<?php namespace App\Http\Controllers\Jobs;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Session;

use App\Company as Company;

class JobController extends Controller {

	public function checkCompanies(){
		$companies = Company::all();
		$error = array();

		foreach ($companies as $company) {
			# Init
			$company_error = 0;

			# get the source code of website
			$context = stream_context_create(array('http' => array('header'=>'Connection: close\r\n')));
			$source = file_get_contents($company->check_url, false, $context);
			$source_min = strip_tags($source);
			$source_min = preg_replace('![^0-9]!', '', $source_min);

			# Street
			if(!empty($company->street)){
				if(strpos($source, $company->street) == false){
					if(strpos($source_min, $company->street) == false){
						$error = array_add($error, $company->id, 'Street');
						$company_error++;
					}
				}
			}

			# Postzip
			if(!empty($company->postzip)){
				if(strpos($source, $company->postzip) == false){
					if(strpos($source_min, $company->postzip) == false){
						$error = array_add($error, $company->id, 'Postzip');
						$company_error++;
						return $source;
					}
				}
			}

			# City
			if(!empty($company->city)){
				if(strpos($source, $company->city) == false){
					if(strpos($source_min, $company->city) == false){
						$error = array_add($error, $company->id, 'City');
						$company_error++;
					}
				}
			}

			# Telephone
			if(!empty($company->telephone)){
				if(strpos($source, $company->telephone) == false){
					if(strpos($source_min, $company->telephone) == false){
						$error = array_add($error, $company->id, 'Telephone');
						$company_error++;
					}
				}
			}

			# Mobile
			if(!empty($company->mobile)){
				if(strpos($source, $company->mobile) == false){
					if(strpos($source_min, $company->mobile) == false){
						$error = array_add($error, $company->id, 'Mobile');
						$company_error++;
					}
				}
			}

			# Fax
			if(!empty($company->fax)){
				if(strpos($source, $company->fax) == false){
					if(strpos($source_min, $company->fax) == false){
						$error = array_add($error, $company->id, 'Fax');
						$company_error++;
					}
				}
			}

			# Email
			if(!empty($company->email)){
				if(strpos($source, $company->email) == false){
					if(strpos($source_min, $company->email) == false){
						$error = array_add($error, $company->id, 'Email');
						$company_error++;
					}
				}
			}

			# check if any error occured
			if($company_error > 0){
				$company = Company::find($company->id);
				$company->status = false;
				$company->save();
			} else {
				$company = Company::find($company->id);
				$company->status = true;
				$company->save();
			}
		}

		return var_dump($error);
	}

}
