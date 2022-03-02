@extends('layouts.main')

@section('title', 'Product')

@section('header')
    <script src="{{asset('js/product.js')}}"></script>
@endsection

@section('content')
    <div id="content">
        <div id="image">

        </div>
        <div id="data">
            <h1></h1>
            <h3></h3>
            <p></p>
            <button>Kosárba rakás</button>
        </div>
    </div>
@endsection

@section('innerjs')
    <script>
        async function productData(id{
            let response = await fetch("{{route('products.show', ['id' => " + id + "])}}").then(data => data.json());
            let content = document.getElementById("data");
            content.querySelector("h1").innerHTML = response.name;
            content.querySelector("h3").innerHTML = response.price;
            content.querySelector("p").innerHTML = response.description;
        }
    </script>
@endsection