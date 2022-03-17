@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col">
            <div class="input-group">
                {!! Form::open(['method' => 'get']) !!}
                {!! Form::label('category', 'Kategória') !!}
                {!! Form::select('category', []) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">

        </div>
    </div>
@endsection

@section('innerjs')
    <script>
        "use strict"

        fetch("{{route('categories.indexParents', ['parentId' => ''])}}")
        .then(response => response.json())
        .then(data => {
            const categories = data

            let out = ""
            for (let cat of categories) {
                out +=
                    `<optgroup label=${cat.name}>`
                    fetch("{{route('categories.indexChildren', ['parentId' => 'categories.id'])}}")
                        .then(response => response.json())
                        .then(data => {
                            for (let subCat of data) {
                                out +=
                                    `<option>${subCat.name}</option>`
                            }
                    })
                    `</optgroup>`
            }

            document.querySelector("#category").innerHTML = out
            //TODO: adatok mentese/atadasa
        })
    </script>
@endsection