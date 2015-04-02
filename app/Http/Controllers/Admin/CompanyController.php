<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Session;

use App\Company as Company;
use App\Category as Category;
use App\Subcategory as Subcategory;
use App\Http\Requests\CompanyStoreRequest as CompanyStoreRequest;
use App\Http\Requests\CompanyUpdateRequest as CompanyUpdateRequest;

class CompanyController extends Controller {

	public function index(){
		$companies = Company::all();

		foreach ($companies as $company) {
			$company->category_id = Category::find($company->category_id)->name;
			$company->subcategory_id = Subcategory::find($company->subcategory_id)->name;

			if($company->status == true){
				$company->status = 'okay';
			} else {
				$company->status = 'ERROR!!';
			}
		}

		return view('admin.company.table')->with('companies', $companies);
	}

	public function create(){
		$allCategories = Category::all();
		$allSubcategories = Subcategory::all();

		$selectCategories = array();
		$selectSubcategories = array();

		foreach ($allCategories as $category) {
			$selectCategories = array_add($selectCategories, $category->id, $category->name);
		}

		foreach ($allSubcategories as $subcategory) {
			$selectSubcategories = array_add($selectSubcategories, $subcategory->id, $subcategory->name);
		}

		return view('admin.company.createOrUpdate')->with('selectCategories', $selectCategories)->with('selectSubcategories', $selectSubcategories);
	}

	public function store(CompanyStoreRequest $request){
		if(Company::create(Request::except('_token'))){
			Session::flash('message_success', 'You have successfully created the company!');
		} else {
			Session::flash('message_error', 'Error while creating the company!');
		}

		return redirect('admin/company');
	}

	public function edit($id){
		$company = Company::find($id);

		$allCategories = Category::all();
		$allSubcategories = Subcategory::all();

		$selectCategories = array();
		$selectSubcategories = array();

		foreach ($allCategories as $category) {
			$selectCategories = array_add($selectCategories, $category->id, $category->name);
		}

		foreach ($allSubcategories as $subcategory) {
			$selectSubcategories = array_add($selectSubcategories, $subcategory->id, $subcategory->name);
		}

		return view('admin.company.createOrUpdate')->with('company', $company)->with('selectCategories', $selectCategories)->with('selectSubcategories', $selectSubcategories);
	}

	public function update(CompanyUpdateRequest $request, $id){
		$company = Company::find($id)->fill(Request::except('_token'));

		if($company->save()){
			Session::flash('message_success', 'You have successfully updated the company: '.$company->name);
		} else {
			Session::flash('message_error', 'Error while updating the following company: '.$company->name);
		}

		return redirect('admin/company');
	}

	public function delete($id){
		$company = Company::find($id);

		if($company->delete()){
			Session::flash('message_success', 'You have successfully deleted the company: '.$company->name);
		} else {
			Session::flash('message_error', 'Error while deleting the following company: '.$company->name);
		}

		return redirect('admin/company');
	}

	private function createArrayForSelectbox($all){
		$select = array();

		foreach ($all as $option) {
			$select = array_add($select, $option->id, $option->name);
		}

		return $select;
	}
}
