<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class DailyReportRequest extends FormRequest
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
        return[
            'reporting_time' => 'required|date|date_format:Y-m-d',
            'title' => 'required|max:30',
            'content' => 'required|max:1000',
        ];
    }
  
    public function messages()
    {
        return[
            'reporting_time.required' => '入力必須項目です',
            'title.required' => '入力必須項目です',
            'content.required' => '入力必須項目です',
            'title.max:30' => '30文字以下でお願いします',
            'content.max:1000' => '1000文字以下でお願いします',
        ];
    }
}

