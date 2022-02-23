@extends('layouts.main')

@section('content')
{!! Form::open(['method' => 'get']) !!}
    {!! Form::label('category', 'Kategória', ['class' => 'form-label']) !!}
    {!! Form::select('category', [

    ]) !!}
{!! Form::close() !!}
@endsection

@section('innerjs')
    <script>
        fetch("{{route("categories.index")}}")
        .then(response => response.json())
        .then(data => {
            const categories = data.data

            let out = ""
            //TODO: adatok mentese/atadasa
        })
    </script>
@endsection