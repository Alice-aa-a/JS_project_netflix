@extends('layouts.app')
@section('title','Liste des produits')

@section('content')
    <H1> Liste produits</H1>
<div style="display: flex; flex-wrap: wrap;">
    @foreach    ($products as $product)
        <div class="card" style="width: 20rem;">
        <img src="{{$product->image}}" class="card-img-top" alt="..." style="width: 20rem;">
            <div class="card-body">

                <strong> {{$product->name}} </strong>
                <p> {{$product->price}} €</p>
                <a href="{{ route('products.show', $product) }}">Voir le produit</a>
                <a href="{{ route('products.edit', $product) }}">Modifier</a>
                <a href="{{ route('products.download', $product) }}">PDF</a>
                <a href="{{ route('products.send-mail', $product) }}">Mail</a>

                <form action="{{ route('products.destroy', ['product' => $product]) }}" method="post">
                @csrf
                @method('delete')
                <button class="btn-primary" type="submit"> Supprimer le produit</button>
            </div>
        </div>

    @endforeach

</div>
@endsection


