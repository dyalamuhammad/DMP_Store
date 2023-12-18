@extends('layouts.app', ['title' => 'Dashboard'])
@section('content')
  
    <div class="container">
        <div class="banner">
          <img src="{{ asset('images/banner.png') }}" alt="">
          <button><a href="#isian">Lihat Produk</a></button>
        </div>
        <div class="banner-1">
          <form action="" method="post">
            <input type="text" placeholder="Cari Produk..." name="keyword" >
            <button type="submit" name="cari" class="btn-cari">Search</button>
          </form>
        </div>
      </div>
  @endsection

 
