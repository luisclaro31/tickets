<?php namespace Tickets\Http\Requests;

use Tickets\Http\Requests\Request;

class EditStudentRequest extends Request {

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
				'full_name'			=>	'required',
				'identification'	=>	'required',
				'category_id'		=>	'required',
				'user_id'			=>	'required'
		];
	}

}
