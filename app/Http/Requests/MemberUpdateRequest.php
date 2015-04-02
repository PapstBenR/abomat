<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class MemberUpdateRequest extends Request {

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
			'gender' => 'required',
			'first_name' => 'required',
			'last_name' => 'required',
			'email' => 'required',
			'street' => '',
			'postzip' => 'integer',
			'city' => '',
			'country' => 'required'
		];
	}

}
