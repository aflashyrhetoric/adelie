<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CaseCreateRequest extends Request
{
  protected $dontFlash = [
    'thumbnail_url'
    ];
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
          //'client_name' => 'required|max:35',
          //'tagline' => 'required',
          //'thumbnail' => 'required|max:1024',
          //'hero' => 'required|max:1024',
          //'about' => 'required',
          //'phase_one' => 'required'
        ];
    }
}
