<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Post;
use App\User;
use App\Term;
use File;
use Gate;
use Session;
use DB;
class PostController extends Controller{
    public function create(Request $request){
        $user = Session::get('user');
        $terms = Term::get();
        if($request->isMethod('post')){
            $this->validate($request,Post::$rules,Post::$messages);
            $post = new Post;
            $post->user_id = $user->id;
            $post->post_alias = str_slug($request->input('post_name'),'-');
            foreach ($post->fillable as $key => $value) {
                if($request->has($value)){
                    $post->$value = $request->input($value);
                }
                if($request->hasFile($value)){
                    $file = $request->file($value);
                    $extension = $file->extension();
                    $file_name = $post->post_alias.'-'.time().'.'.$extension;
                    $file->move(public_path().'/img',$file_name);
                    $post->$value = $file_name;
                }
            }
            if($post->save()){
                Session::flash('success','Thêm thành công.');
                return redirect('user/post/edit/'.$post->id);
            }else{
                Session::flash('error','Thêm lỗi.');
                return back();
            }
        }else{
            $data['terms'] = $terms;
            return view('user.post.create',['data'=>$data]); 
        }
    }
    public function edit($post_id,Request $request){
        $user = Session::get('user');
        $terms = Term::get();
        $post = Post::find($post_id);
        if($request->isMethod('post')){
            // if (Gate::forUser($user)->denies('edit-post', $post)) {
            //     Session::flash('error','Bài viết không phải của bạn.');
            //     return back();
            // }
            $this->validate($request,Post::$rules,Post::$messages);
            $post->post_alias = str_slug($request->input('post_name'),'-');
            foreach ($post->fillable as $key => $value) {
                if($request->has($value)){
                    $post->$value = $request->input($value);
                }
                if($request->hasFile($value)){
                    $file = $request->file($value);
                    $extension = $file->extension();
                    $file_name = $post->post_alias.'-'.time().'.'.$extension;
                    $file->move(public_path().'/img',$file_name);
                    $post->$value = $file_name;
                }
            }
            if($post->save()){
                Session::flash('success','Sửa thành công.');
                return redirect('user/post/edit/'.$post->id);
            }else{
                Session::flash('error','Sửa lỗi.');
                return back();
            }
        }else{
            $data['post'] = $post;
            $data['terms'] = $terms;
            return view('user.post.edit',['data'=>$data]); 
        }
    }
    public function index(Request $request){
        $users = User::get();
        $terms = Term::get();
        $posts = Post::orderby('id','desc');
        if($request->input('post_name')){
            $posts = $posts->where('post_name','like','%'.$request->input('post_name').'%');
        }
        if($request->input('post_created')){
            $created_at = date('Y-m-d',strtotime($request->input('post_created')));
            $posts = $posts->whereDate('created_at',$created_at);
        }
        if($request->input('term_id')){
            $term_ids = [];
            $term = Term::find($request->input('term_id'));
            $term_childs = $term->children;
            if(count($term_childs)){
                foreach ($term_childs as $key => $term_child) {
                    $term_ids[] = $term_child->id;
                }
            }
            $term_ids[] = $term->id;
            $posts = $posts->whereIn('term_id',$term_ids);
        }
        if($request->input('user_id')){
            $posts = $posts->where('user_id',$request->input('user_id'));
        }
        $posts = $posts->paginate(22);
        $data['users'] = $users;
        $data['posts'] = $posts;
        $data['terms'] = $terms; 
        if($request->input('view')=='list'){
            return view('user.post.indexList',['data'=>$data]);
        }elseif($request->input('view')=='icon'){
            return view('user.post.indexIcon',['data'=>$data]);
        }else{
            return view('user.post.indexList',['data'=>$data]);
        }
    }
    public function delete($post_id,Request $request){
        $user = Session::get('user');
        $post = Post::find($post_id);
        if($request->isMethod('post')){
            if (Gate::forUser($user)->denies('delete-post', $post)) {
                Session::flash('error','Bài viết không phải của bạn.');
                return back();
            }
            if($post->delete()){
                $post->visit()->delete();
                DB::statement('ALTER TABLE visit AUTO_INCREMENT = 1');
                DB::statement('ALTER TABLE post AUTO_INCREMENT = 1');
                Session::flash('success','Xóa thành công.');
                File::delete(public_path().'/img/'.$post->post_avatar);
                return redirect('user/post/index');
            }else{
                Session::flash('error','Xóa lỗi.');
                return back();
            }
        }else{
            $data['post'] = $post;
            return view('user.post.delete',['data'=>$data]); 
        }
    }
}