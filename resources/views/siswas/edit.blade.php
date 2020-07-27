@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Siswas
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($siswas, ['route' => ['siswas.update', $siswas->id], 'method' => 'patch']) !!}

                        @include('siswas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection