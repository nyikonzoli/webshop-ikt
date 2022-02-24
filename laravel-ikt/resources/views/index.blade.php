@extends('layouts.main')

@section('content')
{!! Form::open(['method' => 'get']) !!}
    {!! Form::label('category', 'Kategória', ['class' => 'form-label']) !!}
    {!! Form::select('category', []) !!}
{!! Form::close() !!}
@endsection

@section('innerjs')
    <script>
        fetch("{{route("categories.index", ["parentId" => ""])}}")
        .then(response => response.json())
        .then(data => {
            const categories = data

            let out = ""
            for (let cat of categories) {
                out += `
                    <optgroup label=${cat.name}>
                    </optgroup>
                `
            }

            document.querySelector("#category").innerHTML = out
            //TODO: adatok mentese/atadasa
        })
    </script>
@endsection