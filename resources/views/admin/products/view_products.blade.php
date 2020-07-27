@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>Beranda</a> <a href="#">Produk</a> <a href="#" class="current">View Produk</a> </div>
        <h1>Form Produk</h1>
        @if(Session::has('flash_message_error'))
        <div class="alert alert-error alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{!! session('flash_message_error') !!}</strong>
        </div>
        @endif
        @if(Session::has('flash_message_success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{!! session('flash_message_success') !!}</strong>
        </div>
        @endif
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
            </div>
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                    <h5>Form Produk</h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>ID Produk</th>
                                <th>ID Kategori</th>
                                <th>Nama Kategori</th>
                                <th>Nama Produk</th>
                                <th>Kode Produk</th>
                                <th>Warna Produk</th>
                                <th>Harga</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr class="gradeX">
                                <td style="text-align:center; vertical-align:inherit;">{{ $product->id }}</td>
                                <td style="text-align:center; vertical-align:inherit;">{{ $product->category_id }}</td>
                                <td style="text-align:center; vertical-align:inherit;">{{ $product->category_name }}</td>
                                <td style="vertical-align:inherit;">{{ $product->product_name }}</td>
                                <td style="text-align:center; vertical-align:inherit;">{{ $product->product_code }}</td>
                                <td style="text-align:center; vertical-align:inherit;">{{ $product->product_color }}</td>
                                <td style="vertical-align:inherit; padding-bottom:0px;">Rp. <p style="text-align:right; float:right;">{{ $product->price }}</p>
                                </td>
                                <td style="text-align:center; vertical-align:inherit;">
                                    @if(!empty($product->image))
                                    <img style="width: 60px;" src="{{ asset('/image/backend_image/products/small/'.$product->image) }}">
                                    @endif
                                </td>
                                <td style="text-align:center; vertical-align:inherit;" class="center">
                                    <a href="#myModal{{ $product->id }}" data-toggle="modal" class="btn btn-success btn-mini">View</a>
                                    <a href="{{url('/admin/edit-product/'.$product->id )}}" class="btn btn-primary btn-mini">Edit</a>
                                    <a href="{{url('/admin/add-attributes/'.$product->id )}}" class="btn btn-success btn-mini">Add</a>
                                    <a rel="{{ $product->id }}" rel1="delete-product" <?php /* href="{{url('/admin/delete-product/'.$product->id )}}"*/ ?> href="javascript:" class="btn btn-danger btn-mini deleteRecord">Hapus</a>
                                </td>
                            </tr>
                            <div id="myModal{{ $product->id }}" class="modal hide">
                                <div class="modal-header">
                                    <button data-dismiss="modal" class="close" type="button">×</button>
                                    <h3>Detail Lengkap {{ $product->product_name }}</h3>
                                </div>
                                <div class="modal-body">
                                    <p>ID Produk : {{ $product->id }}</p>
                                    <p>ID Kategori : {{ $product->category_id }}</p>
                                    <p>Kode Produk : {{ $product->product_code }}</p>
                                    <p>Warna Produk : {{ $product->product_color }}</p>
                                    <p>Bahan :</p>
                                    <p>Harga : {{ $product->price }}</p>
                                    <p>Deskrpsi : {{ $product->description }}</p>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection