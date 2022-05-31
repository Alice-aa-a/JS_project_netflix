@extends('layouts.app')
@section('title', $product->name)

@section('content')
    <H1> Produit</H1>

    <!--@if ($errors->any())
    <div class="alert alert-danger">
    <ul>
    @foreach-?all() as $error)
    <li>{{ errors }}</li>
    @endforeach
    </ul>
    </div>
    @endif-->

    <form action="{{ route('products.update'), $product }}" method="post">
        @method('PUT')
        @csrf <!--sécuriser formulaire-->

        <div class="input-group">
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ $product->name }}"/>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="input-group">
            <input type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" value="{{ $product->description }}"/>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <input type="text" name="image" id="image" class="form-control" value="{{$product->image}}"/>


        <div class="input-group">
            <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" value="{{ $product->price }}"/>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>


        <button type="submit" class="btn btn-primary">Modifier</button>

    </form>

@endsection

