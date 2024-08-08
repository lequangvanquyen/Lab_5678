<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleNhapSV extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'masv'=> ['required','regex:/^PS\d{5}/'],
            'hoten'=> ['required','min:3','max:20'],
            'tuoi'=>'required|integer|min:16|max:100',
            'ngaysinh'=>['required','regex:/\d{1,2}\/\d{1,2}\/\d{4}/'],
            'cmnd'=>'digits_between:9,10',
            'email'=>'email|ends_with:@fpt.edu.vn'
        ];
    }

    function messages()
    {
        return [
            'masv.required' => 'Mã SV chưa nhập',
            'masv.regex' => 'Mã SV không đúng định dạng',
            'hoten.required' => 'Họ tên chưa được nhập',
            'hoten.min' => 'Họ tên sao ngắn quá ',
            'hoten.max' => 'Họ tên quá dài quá',
            'ngaysinh.required' => 'Ngày sinh không được để trống',
            'ngaysinh.date' => 'Ngày sinh không đúng định dạng',
            'cmnd.required' => 'Số CMND không được để trống',
            'cmnd.regex' => 'Số CMND không đúng định dạng',
            'tuoi.required' => 'Tuổi không được để trống',
            'tuoi.integer' => 'Tuổi phải là số nguyên',
            'tuoi.min' => 'Tuổi phải lớn hơn hoặc bằng 16',
            'tuoi.max' => 'Tuổi phải nhỏ hơn hoặc bằng 100',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'email.ends_with' => 'Email phải có đuôi @fpt.edu.vn',
        ];
    }

    function attributes()
    {
        return [
            'masv' => 'Mã sinh viên',
            'hoten' => 'Họ tên',
            'ngaysinh' => 'Ngày sinh',
            'cmnd' => 'Số CMND',
            'tuoi' => 'Tuổi',
            'email' => 'Email',
        ];
    }
}
