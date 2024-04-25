<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCurso;
use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CursoController extends Controller
{
  function index()
  {
    // return 'Bienvenido a la página curso';
    $cursos = Curso::paginate(5);
    return $cursos;
    // return view('cursos.index');
  }

  function create(Request $request)
  {
    $validator = Validator::make($request->all());

    if($validator->fails()){
      $response = [
        'message' => 'Error en los datos',
        'errors' => $validator->errors(),
        'status' => 400
      ];
      return response()->json($response, 400);
    }

    // $course = Curso::create([
    //   'name' => $request->name,
    //   'description' => $request->description,
    //   'category' => $request->category,
    // ]);

    $course = Curso::create($request->all()); // <--- Asignación masiva: De esta manera nos evitamos de volver a escribir los nombres de las columnas de la db
    
    if(!$course){
      $response = [
        'message' => 'Error al crear el curso',
        'error' => $course->errors(),
        'status' => 400
      ];
      return response()->json($response, 400);
    }

    $response = [
      'message' => 'Curso creado correctamente',
      'course' => $course,
      'status' => 200
    ];

    return response()->json($response, 200);
  }

  function show($id)
  {
    $curso = Curso::find($id);
    if($curso == null){
      $response = [
        'message' => 'Curso no encontrado',
        'status' => 404
      ];
      return response()->json($response, 404);
    }

    $response = [
      'message' => 'Curso encontrado',
      'course' => $curso,
      'status' => 200
    ];

    return response()->json($response, 200);
    // return view('cursos.show', compact('curso'));
  }

  function destroy($id)
  {
    $curso = Curso::find($id);

    if($curso == null){
      $response = [
        'message' => 'Curso no encontrado',
        'status' => 404
      ];
      return response()->json($response, 404);
    }

    $curso->delete();

    $response = [
      'message' => 'Curso eliminado correctamente',
      'status' => 200
    ];
    
    return response()->json($response, 200);

    // return "En esta página podrás eliminar un curso: $curso";
    // return view('cursos.delete', compact('curso'));
  }

  function updatePartial($id, Request $request){
    $course = Curso::find($id);
    if($course == null){
      $response = [
        'message' => 'Curso no encontrado',
        'status' => 404
      ];
      return response()->json($response, 404);
    }

    $validator = Validator::make($request->all(), [
      'name' => 'string|max:25|unique:cursos',
      'description' => 'string',
      'category' => 'string',
    ]);

    if($validator->fails()){
      $response = [
        'message' => 'Error en los datos',
        'errors' => $validator->errors(),
        'status' => 400
      ];
      return response()->json($response, 400);
    }

    // if($request->has('name')) {
    //   $course->name = $request->name;
    // };
    // if($request->has('description')) {
    //   $course->description = $request->description;
    // }
    // if($request->has('category')) {
    //   $course->category = $request->category;
    // }
    // $course->save();

    $course->update($request->all());  // <-- Usamos la asignación masiva para evitar validar si la request tiene cada campo

    $response = [
      'message' => 'Curso actualizado correctamente',
      'course' => $course,
      'status' => 200
    ];

    return response()->json($response, 200);
  }

  function category($curso, $categoria = null)
  {
    if ($categoria) {
      // return "Bienvenido al curso $curso de categoria $categoria";
      return view('cursos.category', compact('curso', 'categoria'));
    } else {
      // return "Bienvenido al curso $curso, sin categoria";
      return view('cursos.category', compact('curso'));
    }
  }
}
