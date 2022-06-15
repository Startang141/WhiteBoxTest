@extends('layouts.masterLayouts')

@section('content')
<section class="container mt-5">
  <div class="container">
    <div class="row">
      <div class="container">
        <div class="page-breadcrumb">
          <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
              <h3 class="page-title mb-0 p-0">Keranjang</h3>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Keranjang</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h2>{{ auth()->user()->email }}</h2>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama Produk</th>
                      <th>Jumlah x Jumlah</th>
                      <th>Subtotal</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($carts as $item)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->product->name }}</td>
                        <td>{{ $item->qty }} x {{ number_format($item->price) }}</td>
                        <td>{{ number_format($item->subtotal) }}</td>
                        <td>
                          <a href="" class="btn btn-info btn-sm text-white">Edit</a>
                          <a href="" class="btn btn-danger btn-sm text-white">Delete</a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
                <h4 class="float-start mt-2 fw-bold">Rp. {{ number_format($total) }}</h4>
                <button class="btn btn-dark btn-lg float-end">Check Out</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection