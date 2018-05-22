<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Auth;
use Auth;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');     // 
    }

    public function showinbox()
    {
        $inbox = Message::All()->where('receiver',Auth::user()->email);
        return view('message.inbox')->withInboxs($inbox);
    }
    public function shownewmessage()
    {
        return view('message.newmessage');
    }
    public function newmessage(Request $request)
    {
  		$this->validate($request,[
    		'receiver' => 'required|email',
    		'message' =>'required']);
  		$message = new Message;
  		$message->sender=Auth::user()->email;
  		$message->receiver=$request->receiver;
  		$message->msg=$request->message;

  		$message->save();
        return redirect()->route('sent');
    }
    public function showsent()
    {
    	$sent = Message::All()->where('sender',Auth::user()->email);
        return view('message.sent')->withSents($sent);
    }
    public function showmessage($id)
    {
    	 $show = Message::find($id);
    	 return view('message.showmessage')->withShows($show);
    }
    public function deletemessage($id)
    {
    	 $delete = Message::find($id);
    	 $delete->delete();
    	 return redirect()->back();
    }

    public function showinboxpemodal()
    {
        $inbox = Message::All()->where('receiver',Auth::user()->email);
        return view('pemodal.message.inbox')->withInboxs($inbox);
    }
    public function shownewmessagepemodal()
    {
        return view('pemodal.message.newmessage');
    }
    public function newmessagepemodal(Request $request)
    {
  		$this->validate($request,[
    		'receiver' => 'required|email',
    		'message' =>'required']);
  		$message = new Message;
  		$message->sender=Auth::user()->email;
  		$message->receiver=$request->receiver;
  		$message->msg=$request->message;

  		$message->save();
        return redirect()->route('sent');
    }
    public function showsentpemodal()
    {
    	$sent = Message::All()->where('sender',Auth::user()->email);
        return view('pemodal.message.sent')->withSents($sent);
    }
    public function showmessagepemodal($id)
    {
    	 $show = Message::find($id);
    	 return view('pemodal.message.showmessage')->withShows($show);
    }
    public function deletemessagepemodal($id)
    {
    	 $delete = Message::find($id);
    	 $delete->delete();
    	 return redirect()->back();
    }
}

