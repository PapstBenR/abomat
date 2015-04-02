<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CompanyStoreRequest extends Request {

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
			'category_id' => 'required',
			'subcategory_id' => 'required',
			'short_name' => 'required|unique:companies',
			'long_name' => 'required',
			'department' => '',
			'street' => '',
			'postzip' => '',
			'city' => '',
			'country' => '',
			'telephone' => '',
			'mobile' => '',
			'fax' => '',
			'email' => '',
			'url' => 'required|url',
			'description' => '',
			'check_url' => 'required|url'
		];
	}

}
