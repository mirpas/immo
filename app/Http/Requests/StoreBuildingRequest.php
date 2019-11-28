<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBuildingRequest extends FormRequest
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
           'short_name' => 'required',
           'description' => '',
           'street' => 'required',
           'zip' => 'required',
           'city' => 'required',
           'flurnummer' => '',
           'ground_area' => 'required',
           'building_area' => 'required',
           'year_of_construction' => '',
           'year_of_last_renovation' => '',
        ];
    }
}
