<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RentalRequest extends FormRequest
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
            'camera_id' => 'required|numeric|exists:cameras,id',
            'client_id' => 'required|numeric|exists:clients,id',
            'start_date' => 'required|date',
            'end_Date' => 'required|date',
        ];
    }
}
