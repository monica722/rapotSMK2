@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>Beranda</a> <a href="#">Produk</a> <a href="#" class="current">Tambah Atribut Produk</a> </div>
        <h1>Atribut Produk</h1>
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
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Tambah Atribut Produk</h5>
                    </div>

                    <div class="widget-content nopadding">
                        <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{url('/admin/add-attributes/'.$productDetails->id)}}" name="add_attributes" id="add_attributes">{{ csrf_field() }}
                            <input type="hidden" name="product_id" value="{{ $productDetails->id }}" />
                            <div class="control-group">
                                <label class="control-label">Nama Produk</label>
                                <label class="control-label"><strong> {{ $productDetails->product_name }} </strong></label>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Kode Produk</label>
                                <label class="control-label"><strong> {{ $productDetails->product_code }} </strong></label>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Warna Produk</label>
                                <label class="control-label"><strong> {{ $productDetails->product_color }} </strong></label>
                            </div>
                            <div class="control-group">
                                <label class="control-label"></label>
                                <div class="field_wrapper">
                                    <div>
                                        <input required type="text" name="sku[]" id="sku" placeholder="SKU" style="width: 120px;" />
                                        <input required type="text" name="size[]" id="size" placeholder="Ukuran" style="width: 120px;" />
                                        <input required type="text" name="price[]" id="price" placeholder="Harga" style="width: 120px;" />
                                        <input required type="text" name="stock[]" id="stock" placeholder="Stok" style="width: 120px;" />
                                        <a href="javascript:void(0);" class="add_button" title="Add field">Tambah</a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" value="Tambah Attribut" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
            </div>
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                    <h5>Form Attribut Produk</h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>ID Attribut</th>
                                <th>SKU</th>
                                <th>Ukuran</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($productDetails['attributes'] as $attribute)
                            <tr class="gradeX">
                                <td style="text-align:center; vertical-align:inherit;">{{ $attribute->id }}</td>
                                <td style="text-align:center; vertical-align:inherit;">{{ $attribute->sku }}</td>
                                <td style="text-align:center; vertical-align:inherit;">{{ $attribute->size }}</td>
                                <td style="text-align:right; vertical-align:inherit;"><a style="float:left">Rp.</a> {{ $attribute->price }}</td>
                                <td style="text-align:center; vertical-align:inherit;">{{ $attribute->stock }}</td>
                                <td style="text-align:center; vertical-align:inherit;" class="center">
                                    <a rel="{{ $attribute->id }}" rel1="delete-attribute" href="javascript:" class="btn btn-danger btn-mini deleteRecord">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection