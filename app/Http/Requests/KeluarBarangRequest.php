<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KeluarBarangRequest extends FormRequest
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
            'reference' => 'required',
            'user_id' => 'required|integer',
            'master_data_barang_id' => 'required|integer',
            'stock' => 'required',
            'remarks' => 'required',
        ];
    }
}
