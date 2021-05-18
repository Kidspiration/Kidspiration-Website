<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DaftarMahasiswa extends FormRequest
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
        return
        [
            'nim' => 'required',
            'nama' => 'required|min:3|max:50',
            // 'email' => 'required|email',
            // 'jenis_kelamin' => 'required|in:P,L',
            'tanggal_lahir' => 'required',
            'jurusan' => 'required',
            // 'alamat' => ''
            'ipk' => 'required',
        ];
    }
}
