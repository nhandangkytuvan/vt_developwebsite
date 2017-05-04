<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Term;
use App\Events\VisitTermEvent;
use Session;
use BrowserDetect;
class TermController extends Controller{
    public function show($term_link,Request $request){
        $array_link = explode('-',$term_link);
        $term_id = end($array_link);
        $term = Term::find($term_id);
        if(!$term){
            return redirect('/');
        }
        // -----------
        event(new VisitTermEvent($term));
        // -----------
        $data['term'] = $term;
        if(BrowserDetect::isDesktop()){
            switch ($term_id) {
                case 33:
                    return view('web.desktop.thietbi',['data'=>$data]); 
                    break;
                case 32:
                    return view('web.desktop.kythuat',['data'=>$data]); 
                    break;
                case 34:
                    return view('web.desktop.hoiphuc',['data'=>$data]); 
                    break;
                default:
                    return view('web.desktop.term',['data'=>$data]); 
                    break;
            }
        }else{
            switch ($term_id) {
                case 33:
                    return view('web.mobile.term',['data'=>$data]);
                    break;
                case 32:
                    return view('web.mobile.kythuat',['data'=>$data]);
                    break;
                case 34:
                    return view('web.mobile.hoiphuc',['data'=>$data]); 
                    break;
                default:
                    return view('web.mobile.term',['data'=>$data]);  
                    break;
            }
        }
    }
    public function showold($term_alias,$term_id,Request $request){
        $term = Term::find($term_id);
        if(!$term){
            return redirect('/');
        }
        // -----------
        event(new VisitTermEvent($term));
        // -----------
        $data['term'] = $term;
        if(BrowserDetect::isDesktop()){
            switch ($term_id) {
                case 33:
                    return view('web.desktop.thietbi',['data'=>$data]); 
                    break;
                case 32:
                    return view('web.desktop.kythuat',['data'=>$data]); 
                    break;
                case 34:
                    return view('web.desktop.hoiphuc',['data'=>$data]); 
                    break;
                default:
                    return view('web.desktop.term',['data'=>$data]); 
                    break;
            }
        }else{
            switch ($term_id) {
                case 33:
                    return view('web.mobile.term',['data'=>$data]);
                    break;
                case 32:
                    return view('web.mobile.kythuat',['data'=>$data]);
                    break;
                case 34:
                    return view('web.mobile.hoiphuc',['data'=>$data]); 
                    break;
                default:
                    return view('web.mobile.term',['data'=>$data]);  
                    break;
            }
        }
    }
}