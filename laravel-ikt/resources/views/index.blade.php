@extends('layouts.main')

@section('content')
{!! Form::open(['method' => 'get']) !!}
    {!! Form::label('category', 'Kategória', ['class' => 'form-label']) !!}
    {!! Form::select('category', [

    ]) !!}
{!! Form::close() !!}
@endsection