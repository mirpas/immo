<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFlatRequest extends FormRequest
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
            'flat_type_id' => 'required',
            'short_name' => 'required',
            'description' => 'nullable',
            'floor' => 'required',
            'no_of_rooms' => 'required',
            'din_area' => 'required',
            'living_area' => 'nullable',
            'heated_area' => 'nullable',
            'useable_area' => 'nullable',
            'balcony_area' => 'nullable',
            'year_of_last_renovation' => 'nullable',
            'built_in_kitchen' => 'nullable',
            'weg_mieteigentumsanteil' => 'nullable',
            'weg_kopfstimmen' => 'nullable',
            'weg_hausgeld' => 'nullable',
        ];
    }
}
