@extends('layouts.masterLayouts')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    </div>
                    <div class="card-body mt-5">
                        <div class="row">
                        @foreach($Products as $p)
                        <div class="col-md-6 ">
                            <img src="assets/images/{{$p->image}}" width="100%" class="rounded mx-auto d-block" alt="">
                        </div>
                        <div class="col-md-6 mt-5">
                            <h2>{{$p -> name}}</h2>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td>Rp. {{$p -> price}}</td>
                                    </tr>
                                    <tr>
                                        <td>Stock</td>
                                        <td>:</td>
                                        <td>{{$p -> stock}}</td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>:</td>
                                        <td>{{$p -> description}}</td>
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
                    @endforeach
                </div>
            </div>
        </div>
        </div>
    </div>
</div>


@endsection