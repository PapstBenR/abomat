<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContractStoreRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'category_id' => 'required|integer',
			'subcategory_id' => 'required|integer',
			'company_id' => 'required|integer',
			'user_id' => 'required|integer',
			'membership_identification' => 'required',
			'membership_identification_extra' => '',
			'duration' => 'required|integer',
			'inception_of_treaty' => 'required|date',
			'cancelation_period' => 'required|integer',
			'notice' => '',
			'canceled' => ''
		];
	}

}
