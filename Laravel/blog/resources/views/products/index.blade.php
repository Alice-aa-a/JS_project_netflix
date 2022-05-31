@extends('layouts.app')
@section('title','Voir un produit')

@section('content')
    <H1> Liste produits</H1>

    @foreach    ($products as $product)
        <strong> {{$product->name}} </strong>
        <p> {{$product->price}}</p>
        <hr>
        <a href="{{ route('products.show', ['product' => $product]) }}">Voir le produit</a>
        <a href="{{ route('products.edit', ['product' => $product]) }}">Modifier</a>
    @endforeach

@endsection


