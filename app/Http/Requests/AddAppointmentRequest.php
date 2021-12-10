<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddAppointmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = auth()->user();
        $patient_id = $this->patient_id;

        // jesli nie to uzytkownik dostanie 403
        return $patient_id == $user->id;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'patient_id' => 'required|numeric',
            'doctor_id' => 'required|numeric',
            'visit_type_id' => 'required|numeric',
            'description' => 'required|max:100',
            'visit_date' => 'required',
            'visit_time' => 'required'
        ];
    }
}
