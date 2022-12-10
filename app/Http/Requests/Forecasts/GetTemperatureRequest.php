<?php

namespace App\Http\Requests\Forecasts;

use Illuminate\Foundation\Http\FormRequest;

class GetTemperatureRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return request()->header('x-token') == env('X_TOKEN');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'day' => 'required',
        ];
    }
}
