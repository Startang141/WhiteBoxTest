@extends('layouts.masterLayouts')

@section('content')

<section class="container mt-5">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>{{$Products->name}}</h2>
                    </div>
                    <div class="card-body mt-5">
                        <div class="row">
                        <div class="col-md-6 ">
                            <img src="{{url ('assets/images/'.$Products->image) }}" width="100%" class="rounded mx-auto d-block" alt="">
                        </div>
                        <div class="col-md-6 mt-5">
                            <h2>{{$Products -> name}}</h2>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td>Rp. {{$Products -> price}}</td>
                                    </tr>
                                    <tr>
                                        <td>Stock</td>
                                        <td>:</td>
                                        <td>{{$Products -> stock}}</td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>:</td>
                                        <td>{{$Products -> description}}</td>
                                    </tr>
                                    <form action="" method="post">
                                        <tr>
                                            <td>Jumlah Pesan</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" name="jumlah_pesan" class="form-control" required="" >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <button type="submit" class="panda-button-bye-now"><i class="fa fa-shopping-cart"></i> Add Cart</button>
                                            </td>
                                        </td>
                                    </tr>
                                </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
</section>
@endsection