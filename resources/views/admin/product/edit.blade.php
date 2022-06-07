@extends('admin.layouts.main')

@section('content')
<div class="page-wrapper">
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
  <div class="row align-items-center">
    <div class="col-md-6 col-8 align-self-center">
      <h3 class="page-title mb-0 p-0">Table</h3>
      <div class="d-flex align-items-center">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Table</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
  <!-- ============================================================== -->
  <!-- Start Page Content -->
  <!-- ============================================================== -->
<div class="container mt-5">
    
<div class="row justify-content-center align-items-center">
    <div class="card" style="width: 24rem;">
        <div class="card-header">
        Edit User
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="post" action="{{ route('product.update', $item->id) }}" id="myForm">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="Name">Nama</label> 
                <input type="text" name="Name" class="form-control" id="Name" value="{{ $item->name }}" aria-describedby="Name" > 
            </div>
            <div class="form-group">
                <label for="Category">Category</label> 
                 <select name="Category" class="form-control">
                  @foreach($category as $ctg)
                  <option value="{{$ctg->id}}" {{$item->category_id == $ctg->id ? 'selected' : ''}} > {{$ctg->category}} </option>
                  @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="Description">Deskripsi</label> 
                <input type="text" name="Description" class="form-control" id="Description" value="{{ $item->description }}" aria-describedby="Description" > 
            </div>
            <div class="form-group">
                <label for="Price">Harga</label> 
                <input type="text" name="Price" class="form-control" id="Price" value="{{ $item->price }}" aria-describedby="Price" > 
            </div>
            <div class="form-group">
                <label for="Stock">Stok</label> 
                <input type="text" name="Stock" class="form-control" id="Stock" value="{{ $item->stock }}" aria-describedby="Stock" > 
            </div>
            <div class="form-group">
                <label for="Rating">Rating</label> 
                <input type="text" name="Rating" class="form-control" id="Rating" value="{{ $item->rating }}" aria-describedby="Rating" > 
            </div>
            <div class="form-group">
                <label for="Image">Image</label> 
                <input type="file" name="Image" class="form-control" id="Image" value="{{ $item->image }}" aria-describedby="Image" > 
                <img style="width:100%" src="{{ asset('assets/'. $item->image)}}" alt="">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</div>
</div>
@endsection