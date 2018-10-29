<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentsRequest extends FormRequest
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
            "name" =>'required|max:15',
            'mail' => 'required|email|max:30',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max: 3600',
            "comment" => 'required|max:255'
        ];
    }
}
