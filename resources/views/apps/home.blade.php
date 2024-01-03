@extends('layouts.app', ['title' => 'Dashboard'])
@section('content')
    <div class="d-flex flex-column align-items-center bg-dark min-vh-100">
      <div class="container">
          <div class="banner my-5">
            <img src="{{ asset('images/banner.png') }}" alt="" class="w-100">
            <button><a href="#produk">Lihat Produk</a></button>
          </div>

          <div class="row my-5 justify-content-center row-gap-3" id="produk">
            <div class="col-6 col-lg-3 card p-0">
              <img src="{{ asset('images/product-1.jpg') }}" alt="" class="w-100">
              <div class="keterangan">
                <li>
                  Samsung Galaxy S21
                </li>
                <li class="harga">Rp
                  9.500.000
                </li>
                <li class="terjual">Terjual 1 rb</li>
          
                <!-- <button onclick="tambah()" class="btn-tambah">Tambah</button> -->
              </div>
            </div>
            <div class="col-6 col-lg-3 card p-0">
              <img src="{{ asset('images/product-4.jpg') }}" alt="" class="w-100">
              <div class="keterangan">
                <li>
                  Mouse Gaming
                </li>
                <li class="harga">Rp
                  250.000
                </li>
                <li class="terjual">Terjual 1 rb</li>
          
                <!-- <button onclick="tambah()" class="btn-tambah">Tambah</button> -->
              </div>
            </div>
            <div class="col-6 col-lg-3 card p-0">
              <img src="{{ asset('images/product-2.jpg') }}" alt="" class="w-100">
              <div class="keterangan">
                <li>
                  Samsung Galaxy S20
                </li>
                <li class="harga">Rp
                  8.000.000
                </li>
                <li class="terjual">Terjual 1 rb</li>
          
                <!-- <button onclick="tambah()" class="btn-tambah">Tambah</button> -->
              </div>
            </div>
            <div class="col-6 col-lg-3 card p-0">
              <img src="{{ asset('images/product-3.jpg') }}" alt="" class="w-100">
              <div class="keterangan">
                <li>
                  Macbook Pro M1
                </li>
                <li class="harga">Rp
                  20.000.000
                </li>
                <li class="terjual">Terjual 1 rb</li>
          
              </div>
            </div>
          </div>
        </div>
    </div>
    

  @endsection



 
