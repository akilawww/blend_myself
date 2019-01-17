<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecipeProceduresRequest extends FormRequest
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
            'process_num'=> 'required',
            'body' => 'required|string|max:255',
            'recipe_id' => 'required',
            'image' => [
                // 必須
                'required',
                // アップロードされたファイルであること
                'file',
                // 画像ファイルであること
                'image',
                // MIMEタイプを指定
                'mimes:jpeg,png',
                /* 最小縦横120px 最大縦横400px
                'dimensions:min_width=120,min_height=120,max_width=400,max_height=400',*/
            ],
        ];
    }
}
