<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Visitor;
use App\Mail;
use App\Mail\MessageUs;

class VisitorsController extends Controller
{
    public function message_us()
   {
   		$this->validate(request(),
   		[
   			'name'=> 'required',
   			'email'=>'required|email',
   			'message'=>'required'
   		]);

   		$visitor = Visitor::create(
   			[
   				'name'=>request('name'),
   				'email'=>request('email'),
   				'message'=>request('message')

   			]);

   		\Mail::to('frimpsastro@gmail.com')->send(new MessageUs($visitor));

   		session()->flash('message','Your message has been sent to us. We will message you soon');

   		return redirect('/');
   }
}
