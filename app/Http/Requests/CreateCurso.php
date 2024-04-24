<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // <---- Esto es para saber si tiene los permisos necesarios para hacer dicha acción (CRUD), lo pongo en true para que pasen todos, ya que para los permisos se usan mayormente los Policies
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
          'name' => 'required|string|min:3|max:25|unique:cursos',
          'description' => 'required|string',
          'category' => 'required|string',
        ];
    }
}
