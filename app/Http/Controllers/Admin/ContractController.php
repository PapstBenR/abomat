<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Session;

use App\Company as Company;
use App\Contract as Contract;
use App\Category as Category;
use App\User as User;
use App\Subcategory as Subcategory;
use App\Http\Requests\ContractStoreRequest as ContractStoreRequest;
use App\Http\Requests\ContractUpdateRequest as ContractUpdateRequest;

class ContractController extends Controller {

	public function index(){
		$contracts = Contract::all();

		foreach ($contracts as $contract) {
			$contract->category_id = Category::find($contract->category_id)->name;
			$contract->subcategory_id = Subcategory::find($contract->subcategory_id)->name;
			$contract->user_id = User::find($contract->user_id)->email;
			$contract->company_id = Company::find($contract->company_id)->short_name;

			if($contract->canceled == true){
				$contract->canceled = 'closed';
			} else {
				$contract->canceled = 'open';
			}
		}

		return view('admin.contract.table')->with('contracts', $contracts);
	}

	public function create(){
		$allCategories = Category::all();
		$allSubcategories = Subcategory::all();
		$allCompanies = Company::all();

		$selectCategories = array();
		$selectSubcategories = array();
		$selectCompanies = array();

		foreach ($allCategories as $category) {
			$selectCategories = array_add($selectCategories, $category->id, $category->name);
		}

		foreach ($allSubcategories as $subcategory) {
			$selectSubcategories = array_add($selectSubcategories, $subcategory->id, $subcategory->name);
		}

		foreach ($allCompanies as $company) {
			$selectCompanies = array_add($selectCompanies, $company->id, $company->short_name);
		}

		return view('admin.contract.createOrUpdate')->with('selectCategories', $selectCategories)
													->with('selectSubcategories', $selectSubcategories)
													->with('selectCompanies', $selectCompanies);
	}

	public function store(ContractStoreRequest $request){
		$contract = new Contract;
		$contract->fill(Request::except('_token', 'canceled'));

		if(Request::get('canceled') == 'canceled'){
			$contract->canceled = true;
		} else {
			$contract->canceled = false;
		}

		if($contract->save()){
			Session::flash('message_success', 'You have successfully created the contract!');
		} else {
			Session::flash('message_error', 'Error while creating the contract!');
		}

		return redirect('admin/contract');
	}

	public function edit($id){
		$contract = Contract::find($id);

		$allCategories = Category::all();
		$allSubcategories = Subcategory::all();
		$allCompanies = Company::all();

		$selectCategories = array();
		$selectSubcategories = array();
		$selectCompanies = array();

		foreach ($allCategories as $category) {
			$selectCategories = array_add($selectCategories, $category->id, $category->name);
		}

		foreach ($allSubcategories as $subcategory) {
			$selectSubcategories = array_add($selectSubcategories, $subcategory->id, $subcategory->name);
		}

		foreach ($allCompanies as $company) {
			$selectCompanies = array_add($selectCompanies, $company->id, $company->short_name);
		}

		return view('admin.contract.createOrUpdate')->with('contract', $contract)
													->with('selectCategories', $selectCategories)
													->with('selectSubcategories', $selectSubcategories)
													->with('selectCompanies', $selectCompanies);
	}

	public function update(ContractUpdateRequest $request, $id){
		$contract = Contract::find($id)->fill(Request::except('_token', 'canceled'));

		if(Request::get('canceled') == 'canceled'){
			$contract->canceled = true;
		} else {
			$contract->canceled = false;
		}

		if($contract->save()){
			Session::flash('message_success', 'You have successfully updated the contract: '.$contract->name);
		} else {
			Session::flash('message_error', 'Error while updating the following contract: '.$contract->name);
		}

		return redirect('admin/contract');
	}

	public function delete($id){
		$contract = Contract::find($id);

		if($contract->delete()){
			Session::flash('message_success', 'You have successfully deleted the contract');
		} else {
			Session::flash('message_error', 'Error while deleting the following contract');
		}

		return redirect('admin/contract');
	}
}
