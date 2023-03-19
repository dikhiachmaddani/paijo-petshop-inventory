<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManageUserRequest extends FormRequest
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
                        'name' => 'required|string',
                        'email' => 'required|email|unique:users',
                        'role' => 'required|in:operator,admin,manager',
                        'password' => 'required|min:8',
                    ];
                }
                break;
            case 'PUT': {
                    return [
                        'name' => 'required|string',
                        'email' => 'required|email',
                        'role' => 'required|in:operator,admin,manager',
                        'password' => 'required|min:8',
                    ];
                }
                break;
        }
    }
}
