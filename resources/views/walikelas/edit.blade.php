@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Walikelas
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($walikelas, ['route' => ['walikelas.update', $walikelas->id], 'method' => 'patch']) !!}

                        @include('walikelas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection