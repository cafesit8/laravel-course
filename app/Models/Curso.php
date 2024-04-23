<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
  use HasFactory;
  public $timestamps = false; // Agregar esto si no quieres que en tus tablas por defecto esté un updated_at o created_at al momento de hacer tus migraciones

  protected $table = 'cursos';

  protected $fillable = [
    'name',
    'description',
    'category'
  ];

  protected function name(): Attribute {
    return new Attribute(
      set: fn ($value) => ucwords(strtolower($value)),
    );
  }
}
