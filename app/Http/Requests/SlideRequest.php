<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class SlideRequest extends Request {

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
            'titulo'     => 'required',
            'descricao'  => 'required_if:tipo,=,J',
            'arquivo'    => 'required',
            'botao'      => 'required',
            'botaoUrl'   => 'required_if:botao,=,S',
            'ordem'      => 'required',
            'status'     => 'required',
		];
	}

}
