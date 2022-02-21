<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Registered;
use App\Mail\autoResponse;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
	public function register(Request $request)
	{	
		if(!$request->check) {
			return redirect()->back()->withErrors('Please check our policy checkbox.');
		}
		$data = $request->validate([
			'first_name' => 'required',
			'last_name' => 'required',
			'email' => 'required',
			'agency' => 'required',
			'city' => 'required',
			'province' => 'required',
		]);

		Mail::to('Info@japantravelexpo.ca')->send(new Registered($data));
		Mail::to(data_get($data, 'email'))->send(new autoResponse($data));

		return redirect()->back()->with('messege', 'Thank you for your registration.');
	}
}
