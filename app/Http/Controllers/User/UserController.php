<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\UserOnlineEvent;
use App\User;
use App\Setting;
use App\Online;
use Session;
use Hash;
use Illuminate\Support\Facades\Log;
class UserController extends Controller{
	public function create(Request $request){
		if ($request->isMethod('post')) {
			$this->validate($request,User::$rules_create,User::$messages_create);
			$user = new User;
			$user->username = $request->input('username');
			$user->user_name = $request->input('user_name');
			$user->password = Hash::make($request->input('password'));
			$user->user_group = $request->input('user_group');
			if($user->save()){
				Session::flash('success','Đăng ký thành công.');
				return redirect('user/user/index');
			}else{
				Session::flash('error','Đăng ký gặp lỗi.');
				return back();
			}
		}else{
			return view('user.user.create');
		}
	}
	public function logout(Request $request){
		$user = Session::get('user');
		$online = Online::updateOrCreate(
		    ['user_id' => $user->id],
		    ['status' => 0]
		);
		event(new UserOnlineEvent($user,'offline'));
		Session::forget('user');
		Session::flash('info','Hẹn gặp lại.');
		Log::info('offline');
		return redirect('/');
	}
	public function password(Request $request){
		$user = Session::get('user');
		if ($request->isMethod('post')) {
			$this->validate($request,User::$rules_forget,User::$messages_forget);
			if(Hash::check($request->input('password_old'),$user->password)){
				$user->password = Hash::make($request->input('password_new'));
				$user->save();
				Session::flush();
				Session::flash('info','Đăng nhập lại.');
				return redirect('web/user/login');
			}else{
				Session::flash('info','Password cũ không đúng.');
				return back();
			}
		}else{
			return 'Hi';
		}
	}
	public function edit(Request $request){
		$user = Session::get('user');
		if($request->isMethod('post')){
			$this->validate($request,User::$rules_edit);
			$user->user_name = $request->input('user_name');
			$user->user_email = $request->input('user_email');
			if($request->hasFile('user_avatar')){
                $file = $request->file('user_avatar');
                $extension = $file->extension();
                $user_avatar = str_slug($user->user_name,'-').'-'.time().'.'.$extension;
                $path = $file->move(public_path().'/img',$user_avatar);
                $user->user_avatar = $user_avatar;
            }
            $user->save();
            Session::flash('success','Sửa thông tin thành công.');
            return back();
		}else{
			$data['user'] = $user;
			return view('user.user.edit',['data'=>$data]);
		}
	}
	public function index(Request $request){
		$users = User::orderBy('username');
		if($request->input('user_group')){
			$users = $users->where('user_group',$request->input('user_group'));
		}
		if($request->input('username')){
			$users = $users->where('username',$request->input('username'));
		}
		$users = $users->get();
		$data['users'] = $users;
		$data['request'] = $request;
		return view('user.user.index',['data'=>$data]);
	}
	public function group($user_id,Request $request){
		$user = User::find($user_id);
		if ($request->isMethod('post')) {
			$user->user_group = $request->input('user_group');
			if($user->save()){
				Session::flash('success','Chỉnh sửa thành công.');
				return redirect('user/user/index');
			}else{
				Session::flash('error','Chỉnh sửa lỗi.');
				return back();
			}
		}else{
			$data['user'] = $user;
			return view('user.user.group',['data'=>$data]);
		}
	}
	public function delete($user_id,Request $request){
		$user = User::find($user_id);
		if($request->isMethod('post')){
			if($user->delete()){
				Session::flash('success','Xóa user '.$user->username.' thành công.');
				return redirect('user/user/index');
			}else{
				Session::flash('error','Xóa user '.$user->username.' gặp lỗi.');
				return back();
			}
		}else{
			$data['user'] = $user;
			return view('user.user.delete',['data'=>$data]);
		}
	}
	public function block($user_id,Request $request){
		$user = User::find($user_id);
		if($request->isMethod('post')){
			$user->user_block = 1;
			$user->save();
			Session::flash('success','Khóa thành công.');
			return redirect('user/user/index');
		}else{
			$data['user'] = $user;
			return view('user.user.block',['data'=>$data]);
		}
	}
}