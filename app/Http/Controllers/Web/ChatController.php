<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
class ChatController extends Controller{
	public function send(Request $request){
		$pusher = App::make('pusher');
    	$pusher->trigger( 
    		$request->input('your_chat_chanel'),
            'chat-event', 
            array('text' => $request->input('chat_content'),'my_chat_chanel'=>$request->input('my_chat_chanel'))
        );
		return $request->input('chat_content');
	}
}