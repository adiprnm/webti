<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCurriculumRequest extends FormRequest
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
            'course_code'   => 'required|unique:curricula,course_code|alpha_num',
            'course_name'   => 'required',
            'sks'           => 'required|numeric|digits:1'
        ];
    }

    public function messages()
    {
        return [
            'course_code.required'   => 'Kode mata kuliah harus diisi',
            'course_code.unique' => 'Kode mata kuliah sudah digunakan',
            'course_code.alpha_num' => 'Kode mata kuliah harus berupa huruf atau angka',
            'course_name.required'   => 'Nama mata kuliah harus diisi',
            'sks.required'   => 'SKS harus diisi',
            'sks.numeric'   => 'SKS harus berupa angka',
            'sks.digits'   => 'Jumlah SKS terlalu banyak',
        ];
    }
}
