<?php namespace App\Http\Controllers\Homepage;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Session;

use App\Company as Company;
use App\Category as Category;
use App\Subcategory as Subcategory;

class NoticeController extends Controller {

	public function index(){
		$categories = Category::all();

		return view('homepage.choice');
	}

	public function terminate(){
		$company = Company::find(1);
		$dateToday = date('d.m.Y');

		return view('homepage.notice')->with('company', $company)
																	->with('dateToday', $dateToday);
	}
}
