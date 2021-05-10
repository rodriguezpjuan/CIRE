<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClienteRequest extends FormRequest
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
            'cli_rif'       => 'required|unique:clientes|min:6|max:12',
            'cli_razon'     => 'required|min:6|max:60',
            'cli_dir'       => 'max:60',
            'cli_telf1'     => 'max:50',
            'cli_telf2'     => 'max:50',
            'cli_telf3'     => 'max:50',
            'cli_mail1'     => 'max:50',
            'cli_mail2'     => 'max:50',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'cli_rif.required'      => 'El Rif es un campo obligatorio.',
            'cli_rif.unique'        => 'Ya existe un cliente con ese RIF.',
            'cli_rif.min'           => 'El RIF debe contener al menos 6 digitos',
            'cli_rif.max'           => 'El RIF no puede tener mas de 12 digitos.',
            'cli_razon.required'    => 'La razón social es un campo obligatorio.',
            'cli_razon.min'         => 'La razón social debe tener al menos 6 caracteres.',
            'cli_razon.max'         => 'La razón social no debe tener mas de 60 caracteres.',
            'cli_dir.max'           => 'La dirección no puede tener mas de 60 caracteres.',
            'cli_telf1.max'         => 'Ha alcanzado el maximo de caracteres para este campo.',
            'cli_telf2.max'         => 'Ha alcanzado el maximo de caracteres para este campo.',
            'cli_telf3.max'         => 'Ha alcanzado el maximo de caracteres para este campo.',
            'cli_mail1'             => 'Ha alcanzado el maximo de caracteres para este campo.',
            'cli_mail2'             => 'Ha alcanzado el maximo de caracteres para este campo.',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'cli_rif'       => 'RIF',
            'cli_razon'     => 'Razón Social',
            'cli_dir'       => 'Dirección',
            'cli_telf1'     => 'Teléfono 1',
            'cli_telf2'     => 'Teléfono 2',
            'cli_telf3'     => 'Teléfono 3',
            'cli_mail1'     => 'Correo Principal',
            'cli_mail2'     => 'Correo Segundario',

        ];
    }
}
