@extends('admin.layouts.main')

@section('content')
<div class="page-breadcrumb">
  <div class="row align-items-center">
    <div class="col-md-6 col-8 align-self-center">
      <h3 class="page-title mb-0 p-0">Profile</h3>
      <div class="d-flex align-items-center">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profile</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="col-md-6 col-4 align-self-center">
      <div class="text-end upgrade-btn">
        <a href="/admin/category"
          class="btn btn-success d-none d-md-inline-block text-white">Kembali</a>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid">
  <!-- Row -->
  <div class="row">
    <!-- Column -->
    <div class="col-lg-12 col-xlg-9 col-md-7">
      <div class="card">
        <div class="card-body">
          <form class="form-horizontal form-material mx-2" method="POST" action="/admin/category">
            @csrf
            <div class="form-group">
              <label class="col-md-12 mb-0">Category</label>
              <div class="col-md-12">
                <input type="text" name="category" placeholder="Category"
                  class="form-control ps-0 form-control-line @error('category') is-invalid @enderror" value="{{ old('category') }}">

                @error('category')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
            
            <div class="form-group">
              <div class="col-sm-12 d-flex">
                <button type="submit" class="btn btn-success mx-auto mx-md-0 text-white">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Column -->
  </div>
</div>
@endsection

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
<div class="container-fluid">
<div class="container mt-5">
    
<div class="row justify-content-center align-items-center">
    <div class="card" style="width: 24rem;">
        <div class="card-header">
        Create User
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
        <form method="post" action="{{ route('users.store') }}" enctype="multipart/form" id="myForm">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="Name">Nama</label> 
                <input type="text" name="Name" class="form-control" id="Name" aria-describedby="Name" > 
            </div>
            <div class="form-group">
                <label for="Email">Email</label> 
                <input type="text" name="Email" class="form-control" id="Email" aria-describedby="Email" > 
            </div>
            <div class="form-group">
                <label for="Address">Alamat</label> 
                <input type="text" name="Address" class="form-control" id="Address" aria-describedby="Address" > 
            </div>
            <div class="form-group">
                <label for="Phone_number">Nomor HP</label> 
                <input type="text" name="Phone_number" class="form-control" id="Phone_number" aria-describedby="Phone_number" > 
            </div>
            <div class="form-group">
                <label for="Gender">Jenis Kelamin</label> 
                <select type="enum" name="Gender" class="form-control" id="Gender"  aria-describedby="Gender">
                  <option>L</option>
                  <option>P</option>
                </select> 
            </div>
            <div class="form-group">
                <label for="Level">Level</label> 
                <select type="Level" name="Level" class="form-control" id="Level"  aria-describedby="Level">
                @foreach($level as $lvl)  
                <option value="{{$lvl->id}}">{{$lvl->level}}</option>
                @endforeach
                </select> 
            </div>
            <div class="form-group">
                <label for="Image">Image</label> 
                <input type="file" name="Image" class="form-control" id="Image" aria-describedby="Image" > 
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</div>
</div>
@endsection