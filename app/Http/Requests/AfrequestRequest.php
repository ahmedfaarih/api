<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AfrequestRequest extends FormRequest
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
                'port_id_ld' => 'nullable',
                'port_id_dc' => 'nullable',
                'weight' => 'required',
                'volume' => 'required',
                'commodity' => 'required',
                'remarks' => 'nullable',
                'terms_id' => 'nullable',
                'shipper_id' => 'nullable',
                'consignee_id' => 'nullable'
            ];
    }
}
