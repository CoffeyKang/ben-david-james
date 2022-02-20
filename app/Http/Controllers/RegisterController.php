<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Registered;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
	public function register(Request $request)
	{	
		$data = $request->validate([
			'first_name' => 'required',
			'last_name' => 'required',
			'email' => 'required',
			'agency' => 'required',
			'city' => 'required',
			'province' => 'required',
		]);

		Mail::to(data_get($data, 'email')?:'coffeykang@gmail.com')->send(new Registered($data));

		return redirect()->back()->with('messege', 'Thank you for your registration.');
	}
}
