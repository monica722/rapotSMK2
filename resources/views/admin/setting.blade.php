@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Setting</a> </div>
    <h1>Admin Settings</h1>
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
            <h5>Security validation</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('/admin/update-pwd') }}" name="password_validate" id="password_validate" novalidate="novalidate">@csrf
              <div class="control-group">
                <label class="control-label">Password Sebelumnya</label>
                <div class="controls">
                  <input type="password" name="current_pwd" id="current_pwd" />
                  <span id="chkPwd"></span>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Password Baru</label>
                <div class="controls">
                  <input type="password" name="pwd" id="pwd" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Konfirmasi password</label>
                <div class="controls">
                  <input type="password" name="pwd2" id="pwd2" />
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Validate" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>



@endsection