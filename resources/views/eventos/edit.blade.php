@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Eventos / Edit #{{$evento->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">
            {{ Form::model($evento, ['url' => ['eventos', $evento->id], 'files' => true]) }}

                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="well well-sm">
                  {{ Form::text('titulo', null) }}
                </div>
                <div class="well well-sm">
                  {{ Form::textarea('descricao', null) }}
                </div>

                <div class="well well-sm">
                      {{ Form::submit('Salvar', array('class' => 'btn btn-primary')) }}
                      <a class="btn btn-link pull-right" href="{{ route('eventos.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>                      
                </div>
            {{ Form::close() }}

        </div>
    </div>
@endsection
@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    $('.date-picker').datepicker({
    });
  </script>
@endsection
