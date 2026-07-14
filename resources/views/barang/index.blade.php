@extends('template.template')

<!-- section 1 -->
@section('page-title')
Barang
@endsection

@section('desc-page')
Data lengkap barang.
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <a href="" class="btn btn-success mb-4 btn-sm">Buat Baru</a>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <th>Nama Barang</th>
            <th>Merk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Pilihan</th>

        <tbody>
            <tr>
                <td>test</td>
                <td>test</td>
                <td>test</td>
                <td>test</td>
                <td>test</td>
            </tr>
        </tbody>
        </thead>

    </table>
</div>
@endsection
