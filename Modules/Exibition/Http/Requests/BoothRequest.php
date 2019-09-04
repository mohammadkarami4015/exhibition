<?php

namespace Modules\Exibition\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BoothRequest extends FormRequest
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
                'area'=>'required|integer',
                'exibition_id'=>'required',
                'image'=>'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ];
        }
        return [
            'title'=>'required|max:250',
            'detail'=>'required',
            'area'=>'required|integer',
            'exibition_id'=>'required|integer',

        ];

    }
    public function attributes()
    {

        return [
            'title' => 'عنوان',
            'detail' => 'توضیحات',
            'area' => 'مساحت غرفه',
            'image' => 'تصویر',
            'exibition_id' => 'انتخاب نمایشگاه',

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
