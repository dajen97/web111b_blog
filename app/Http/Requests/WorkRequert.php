<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkRequert extends FormRequest
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
   * @return array<string, mixed>
   */
  public function rules()
  {
    return [
      'subject' => 'required | max:50',
      'category'  => 'integer',
      'desc'  => 'required | max:4000',
      'status'  => 'booleam',
      'stor'  => 'integer',
      'enable-at'  => 'date',
      'tags'  => 'string ',
      'pic'  => 'string',





    ];
  }
}