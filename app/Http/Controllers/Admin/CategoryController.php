<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Session;

use App\Category as Category;
use App\Http\Requests\CategoryStoreRequest as CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest as CategoryUpdateRequest;

class CategoryController extends Controller {

	public function index(){
		$categories = Category::all();

		return view('admin.category.table')->with('categories', $categories);
	}

	public function create(){
		return view('admin.category.createOrUpdate');
	}

	public function edit($id){
		$category = Category::find($id);

		return view('admin.category.createOrUpdate')->with('category', $category);
	}

	public function store(CategoryStoreRequest $request){
		if(Category::create(Request::except('_token'))){
			Session::flash('message_success', 'You have successfully created the category!');
		} else {
			Session::flash('message_error', 'Error while creating the category!');
		}

		return redirect('admin/category');
	}

	public function update(CategoryUpdateRequest $request, $id){
		$category = Category::find($id)->fill(Request::except('_token'));

		if($category->save()){
			Session::flash('message_success', 'You have successfully updated the category: '.$category->name);
		} else {
			Session::flash('message_error', 'Error while updating the following category: '.$category->name);
		}

		return redirect('admin/category');
	}

	public function delete($id){
		$category = Category::find($id);

		if($category->delete()){
			Session::flash('message_success', 'You have successfully deleted the category: '.$category->name);
		} else {
			Session::flash('message_error', 'Error while deleting the following category: '.$category->name);
		}

		return redirect('admin/category');
	}
}
