<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MasterDataBarangRequest extends FormRequest
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
        switch ($this->method()) {
            case 'POST': {
                    return [
                        'image' => 'required|image',
                        'serial_number' => 'required',
                        'item_name' => 'required',
                        'brand_id' => 'required',
                        'uom_id' => 'required',
                        'category_id' => 'required',
                        'price' => 'required',
                    ];
                }
                break;
            case 'PUT': {
                    return [
                        'serial_number' => 'required',
                        'item_name' => 'required',
                        'brand_id' => 'required',
                        'uom_id' => 'required',
                        'category_id' => 'required',
                        'price' => 'required',
                    ];
                }
                break;
        }
    }
}
