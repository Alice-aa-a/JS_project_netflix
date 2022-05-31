@extends('layouts.app')

@section('title', $product->name)

@section('content')
    <H1> Produit</H1>
    <strong> {{$product->name}} </strong>
    <p> {{$product->description}} </p>
    <p> {{$product->price}} € </p>
    <img src="{{$product->image}}" alt=""/>
@endsection

