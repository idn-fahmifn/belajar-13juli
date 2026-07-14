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
        </thead>
        <tbody>
            @forelse ($data as $row)
            <tr>
                <td>{{$row->nama_barang}}</td>
                <td>{{ $row->merk }}</td>
                <td>IDR. {{number_format($row->harga)}}</td>
                <td>{{$row->stok}}</td>
                <td></td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center py-4">Data barang tidak ditemukan</td>
            </tr>
            @endforelse

        </tbody>
    </table>
</div>
@endsection
