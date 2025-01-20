@extends('layouts.app')
  
@section('title', 'CallumID | Tambah produk')
  
@section('contents')
    <h1 class="mb-0">Tambah Product</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row-full mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="id" readonly>
            </div>
        </div>
            <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Produk">
            </div>
            <div class="col">
                <input type="text" name="price" class="form-control" placeholder="Harga">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="list" name="product_code" class="form-control" placeholder="Kategori">
                
            </div>
            <div class="col">
                <textarea class="form-control" name="description" placeholder="Deskripsi"></textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </form>
@endsection