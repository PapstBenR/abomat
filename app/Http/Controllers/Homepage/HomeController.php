<?php namespace App\Http\Controllers\Homepage;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Session;

use App\Category as Category;
use App\Http\Requests\CategoryStoreRequest as CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest as CategoryUpdateRequest;

class HomeController extends Controller {

	public function index(){
		return view('homepage.home');
	}
}
