<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Setting;
use App\Events\VisitSumEvent;
use App\Events\VisitPostEvent;
use Session;
use BrowserDetect;
class PostController extends Controller{
    public function show($post_link,Request $request){
        $array_link = explode('-',$post_link);
        $post_id = end($array_link);
    	$setting = Setting::first();
        if(!Session::has('user')){
            event(new VisitSumEvent($setting));
        }
    	$post = Post::find($post_id);
        if(!$post){
            return redirect('/');
        }
        // --------------
        event(new VisitPostEvent($post));
        // ------------
        $data['post'] = $post;
        if(BrowserDetect::isDesktop()){
        	return view('web.desktop.post',['data'=>$data]); 
        }else{
        	return view('web.mobile.post',['data'=>$data]); 
        }
    }
    public function showold($post_alias,$post_id,Request $request){
        $setting = Setting::first();
        event(new VisitSumEvent($setting));
        $post = Post::find($post_id);
        if(!$post){
            return redirect('/');
        }
        // --------------
        event(new VisitPostEvent($post));
        // ------------
        $data['post'] = $post;
        if(BrowserDetect::isDesktop()){
            return view('web.desktop.post',['data'=>$data]); 
        }else{
            return view('web.mobile.post',['data'=>$data]); 
        }
    }
}