<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAchievementRequest extends FormRequest
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
            'student_name'  => 'required|regex:/^[\pL\s\-]+$/u',
            'event_name'  => 'required',
            'description'  => 'required',
        ];
    }
    
    /**
     * Custom messages
     *
     * @return array
     */
    public function messages()
    {
        return [
            'student_name.required' => 'Nama mahasiswa harus diisi',
            'student_name.regex' => 'Format nama salah',
            'event_name.required'  => 'Nama kegiatan harus diisi',
            'event_name.required'  => 'Prestasi harus diisi',
            
        ];
    }
}
