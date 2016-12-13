<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class PagesController extends Controller
{
	public function welcome(){
		return view('welcome');
	}
	public function about(){
		return view('about');
	}
	public function inventory(){
		return view('inventory');
	}
	public function schedule(){
		return view('schedule');
	}
	public function feedback(){
		return view('feedback');
	}
	public function subscribe(){
		return view('subscribe');
	}
	public function sale(){
		return view('sale');
	}
	public function details(){
		return view('details');
	}
	public function managePets(){
		return view('managePets')
	}
}
