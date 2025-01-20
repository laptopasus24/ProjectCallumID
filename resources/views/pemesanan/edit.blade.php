@extends('layouts.app')
  
@section('title', 'CallumID | Edit Product')
  
@section('contents')
    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Produk</label>
                <input type="text" name="title" class="form-control" placeholder="Produk" value="{{ $product->title }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Harga</label>
                <input type="text" name="price" class="form-control" placeholder="harga" value="{{ $product->price }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Kategori</label>
                <input type="text" name="product_code" class="form-control" placeholder="kategori" value="{{ $product->product_code }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea class="form-control" name="description" placeholder="deskripsi" >{{ $product->description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
@endsection