<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Session;

use App\Category as Category;
use App\Subcategory as Subcategory;

use App\Http\Requests\SubcategoryStoreRequest as SubcategoryStoreRequest;
use App\Http\Requests\SubcategoryUpdateRequest as SubcategoryUpdateRequest;

class SubcategoryController extends Controller {

	public function index($id){
		$category = Category::find($id);
		$subcategories = $category->subcategories;

		return view('admin.subcategory.table')->with('subcategories', $subcategories)->with('id', $id);
	}

	public function create($id){
		return view('admin.subcategory.createOrUpdate')->with('id', $id);
	}

	public function store(SubcategoryStoreRequest $request, $id){
		$subcategory = new Subcategory;

		$subcategory->fill(Request::except('_token'));
		$subcategory->category_id = $id;

		if($subcategory->save()){
			Session::flash('message_success', 'You have successfully created the subcategory: '.$subcategory->name);
		} else {
			Session::flash('message_error', 'Error while creating the following subcategory: '.$subcategory->name);
		}

		return redirect('admin/subcategory/'.$id);
	}

	public function edit($id){
		$subcategory = Subcategory::find($id);

		return view('admin.subcategory.createOrUpdate')->with('subcategory', $subcategory);
	}

	public function update(SubcategoryUpdateRequest $request, $id){
		$subcategory = Subcategory::find($id)->fill(Request::except('_token'));

		if($subcategory->save()){
			Session::flash('message_success', 'You have successfully updated the subcategory: '.$subcategory->name);
		} else {
			Session::flash('message_error', 'Error while updating the following subcategory: '.$subcategory->name);
		}

		return redirect('admin/subcategory/'.$subcategory->category_id);
	}

	public function delete($id){
		$subcategory = Subcategory::find($id);

		if($subcategory->delete()){
			Session::flash('message_success', 'You have successfully deleted the subcategory: '.$subcategory->name);
		} else {
			Session::flash('message_error', 'Error while deleting the following subcategory: '.$subcategory->name);
		}

		return redirect('admin/subcategory/'.$subcategory->category_id);
	}

}
