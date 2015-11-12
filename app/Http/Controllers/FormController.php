<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CommentFormRequest;
use App\Http\Controllers\Controller;

class FormController extends Controller
{

public function create()
    {
        return view('home');
    }

    public function store(CommentFormRequest $request)
    {

\Mail::send('contact',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_message' => $request->get('message')
        ), function($message)
    {
        $message->from('wj@wjgilmore.com');
        $message->to('luciewambui12@gmail.com', 'Admin')->subject('pataride Feedback');
    });

  return \Redirect::route('home')->with('message', 'Thanks for contacting us!');

}


}    