<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
        return [
            'building_id' => 'required',
            'flat_id' => 'required',
            'company' => 'nullable',
            'company_extra' => 'nullable',
            'company_ceo' => 'nullable',
            'prename' => 'nullable',
            'surname' => 'nullable',
            'birth_name' => 'nullable',
            'gender' => 'nullable',
            'nationality' => 'nullable',
            'day_of_birth' => 'nullable',
            'phone' => 'nullable',
            'mobile' => 'nullable',
            'email' => 'nullable',
            'iban' => 'nullable',
            'bic' => 'nullable',
            'tax_id' => 'nullable',
            'street' => 'required',
            'street_extra' => 'nullable',
            'zip' => 'required',
            'city' => 'required',
            'country' => 'nullable',
        ];
    }
}
