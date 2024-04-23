@extends('layout.plantilla')
@section('title', 'Categoria del curso')
@section('content')
    <h1>El curso de {{$curso}} tiene como categoria: {{$categoria}}</h1>
@endsection