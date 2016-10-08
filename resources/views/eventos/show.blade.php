@extends('layout')
@section('header')
<div class="page-header">
        <h1>Eventos / Show #{{$evento->id}}</h1>
        @if (Auth::user()->id == $evento->admin_id)
            <form action="{{ route('eventos.destroy', $evento->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="btn-group pull-right" role="group" aria-label="...">
                    <a class="btn btn-warning btn-group" role="group" href="{{ route('eventos.edit', $evento->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                    <button type="submit" class="btn btn-danger">Delete <i class="glyphicon glyphicon-trash"></i></button>
                </div>
            </form>
        @endif
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="nome">Descrição</label>
                <p class="form-control-static">BLALALALALALLBLBLABLABALBALBALBALBALABLABALBALBABLABLABLABLABBLABLABLABLABLABAL</p>
            </div>
            <div class="form-group">
                <label for="nome">Data</label>
                <p class="form-control-static">{{$evento->data}}</p>
            </div>
            <div class="form-group">
                <label for="nome">Número de vagas disponíveis</label>
                <p class="form-control-static">{{$evento->vagas}}</p>
            </div>
            <div class="form-group">
                <label for="nome">Inscritos</label>                    
                <p class="form-control-static">Joao Maria</p>
            </div>

            <a class="btn btn-link" href="{{ route('eventos.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection