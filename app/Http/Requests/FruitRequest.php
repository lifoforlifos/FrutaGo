<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FruitRequest extends FormRequest
{
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
        switch($this->method()) {
            case 'GET':
            case 'DELETE':
                return [
                    'fruit'         => 'nullable',
                ];
            case 'POST':
                return [
                    'name'          => 'required|string|max:75',
                    'pays_origin'   => 'required|string',
                    'price'         => 'required|number',
                ];
            case 'PUT':
            case 'PATCH':
                return [
                    'id'            => 'required|number',
                    'name'          => 'required|string|max:75',
                    'pays_origin'   => 'required|string',
                    'price'         => 'required|number',
                ];
            default:break;
        }
    }
}
