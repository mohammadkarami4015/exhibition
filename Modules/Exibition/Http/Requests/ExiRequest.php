<?php

namespace Modules\Exibition\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExiRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->method()=='POST'){
        return [
            'title'=>'required|max:250',
            'detail'=>'required',
            'start_reg'=>'required|date_format:Y-m-d',
            'end_reg'=>'required|date_format:Y-m-d',
            'start_holding'=>'required|date_format:Y-m-d',
            'end_holding'=>'required|date_format:Y-m-d',
            'booth_count'=>'required|integer',
            'province'=>'required|string',
            'city'=>'required|string',
            'address'=>'required|string',
            'image'=>'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
        }
        return [
            'title'=>'required|max:250',
            'detail'=>'required',
            'start_reg'=>'required|date_format:Y-m-d',
            'end_reg'=>'required|date_format:Y-m-d',
            'start_holding'=>'required|date_format:Y-m-d',
            'end_holding'=>'required|date_format:Y-m-d',
            'booth_count'=>'required|integer',
            'province'=>'required|string',
            'city'=>'required|string',
            'address'=>'required|string',
        ];

    }
    public function attributes()
    {

        return [
            'title'=>'عنوان',
            'detail'=>'توضیحات',
            'start_reg'=>'تاریخ شروع ثبت نام',
            'end_reg'=>'تاریخ پایان ثبت نام',
            'start_holding'=>'تاریخ شروع برگزاری ',
            'end_holding'=>'تاریخ پایان برگزاری ',
            'province'=>'استان',
            'count_booth'=>'نعداد غرفه ها',
            'address'=>'آدرس',
            'city'=>'شهر',
            'description'=>'توضیحات',
            'image'=>'تصویر',

        ];

    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
