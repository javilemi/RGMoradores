@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Moradores
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($moradores, ['route' => ['moradores.update', $moradores->id], 'method' => 'patch']) !!}

                        @include('moradores.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection