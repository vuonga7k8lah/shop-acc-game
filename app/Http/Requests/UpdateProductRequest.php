<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateProductRequest extends FormRequest
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
            'title'       => 'required|string|min:3',
            'content'     => 'required|string',
            'desc'        => 'required|string',
            'price'       => 'required|string',
            //            'gallery_image_id'   => 'required|mimes:jpg,png,jpeg',
            //'feature_image_path' => 'required|mimes:jpg,png,jpeg',
            'category_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required'   => 'The title product is required',
            'content.required' => 'The content product is required',
            'desc.required'    => 'The description product is required',
            'price.required'   => 'The price product is required',
            //            'gallery_image_id.required'   => 'The gallery image product is required',
            //            'gallery_image_id.mimes'      => 'The gallery image product type is not support ',
            //            'feature_image_path.required' => 'The feature image product is required',
            //            'feature_image_path.mimes'    => 'The feature image product type is not support ',
        ];
    }
}
