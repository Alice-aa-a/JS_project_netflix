@extends('layouts.app')
@section('title','Liste des produits')

@section('content')
    <H1> Liste produits</H1>

    @foreach    ($products as $product)

        <strong> {{$product->name}} </strong>
        <p> {{$product->price}}</p>
        <hr>
        <a href="{{ route('products.show', $product) }}">Voir le produit</a>
        <a href="{{ route('products.edit', $product) }}">Modifier</a>
        <a href="{{ route('products.download', $product) }}">PDF</a>
        <a href="{{ route('products.send-mail', $product) }}">Mail</a>

        <form action="{{ route('products.destroy', ['product' => $product]) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit"> Supprimer le produit</button>

    @endforeach

@endsection


