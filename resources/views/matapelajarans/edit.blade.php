@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Matapelajaran
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($matapelajaran, ['route' => ['matapelajarans.update', $matapelajaran->id], 'method' => 'patch']) !!}

                        @include('matapelajarans.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection