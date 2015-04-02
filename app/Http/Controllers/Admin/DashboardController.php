<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Session;

use App\Company as Company;
use App\Contract as Contract;
use App\User as User;

class DashboardController extends Controller {

	public function index(){
		# get the number of available companies, contracts, member and canceled contracts
		$iCompanies = count(Company::all());
		$iContracts = count(Contract::all());
		$iContractsCan = count(Contract::all());
		$iMember = count(User::all());

		return view('admin.dashboard')->with('iCompanies', $iCompanies)
										->with('iContracts', $iContracts)
										->with('iContractsCan', $iContractsCan)
										->with('iMember', $iMember);
	}
}
