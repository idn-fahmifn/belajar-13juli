@extends('template.template')

<!-- section 1 -->
@section('page-title')
Detail Barang
@endsection

@section('desc-page')
Nama Barang
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <a href="" class="btn btn-success mb-4 btn-sm">edit</a>
        <a href="" class="btn btn-danger mb-4 btn-sm">hapus</a>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-hover">
        <tbody>
            <tr>
                <td>Nama Barang</td>
                <td>{{$data->nama_barang}}</td>
            </tr>
            <tr>
                <td>Merk Barang</td>
                <td>{{$data->merk}}</td>
            </tr>
            <tr>
                <td>Harga Barang</td>
                <td>{{number_format($data->harga)}}</td>
            </tr>
            <tr>
                <td>Stok Barang</td>
                <td>{{$data->stok}}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
