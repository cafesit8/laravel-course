<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public $timestamps = false;

    // Mutadores y Accesores de la Nueva Forma
    protected function name(): Attribute {
      return new Attribute(
        // Accesor: Muta la data cuando haces una petición a la base de datos
        get: fn ($value) => ucwords($value)
        ,  
        // Mutador: Muta la data cuando se guarda en la base de datos
        set: fn ($value) => ucwords(strtolower($value))
      );
    }

    // Mutadores y Accesores de la Antigua Forma
    // public function getNameAttribute($value) {
    //     return ucwords($value);
    // }

    // public function setNameAttribute($value) {
    //     $this->attributes['name'] = ucwords(strtolower($value));
    // }
}
