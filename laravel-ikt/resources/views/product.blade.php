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
            <h3></h3>
            <h6></h6>
            <p></p>
            <button>Kosárba rakás</button>
        </div>
    </div>
@endsection

@section('innerjs')
    <script>
        async function productData(){
            let response = await fetch("{{route('products.show', ['id' => $id])}}").then(data => data.json());
            console.log(response);
            let content = document.getElementById("data");
            content.querySelector("h3").innerHTML = response.name;
            content.querySelector("h6").innerHTML = response.price;
            content.querySelector("p").innerHTML = response.description;
        }

        productData();
    </script>
@endsection