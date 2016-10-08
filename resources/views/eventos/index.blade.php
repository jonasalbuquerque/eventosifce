@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Eventos
            <a class="btn btn-success pull-right" href="{{ route('eventos.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($eventos->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Data</th>
                            <th>Vagas</th>
                            <th>Local</th>
                            <th>Anfitrião</th>
                            
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($eventos as $evento)
                            <tr>
                                <td>{{$evento->id}}</td>
                                <td>{{$evento->nome}}</td>
                                <td>{{$evento->data}}</td>
                                <td>{{$evento->vagas}}</td>
                                <td></td>
                                <td>{{App\User::find($evento->admin_id)->name}}</td>

                                @if (Auth::user()->id == $evento->admin_id)
                                    <td class="text-right">
                                        <a class="btn btn-primary" href="{{ route('eventos.show', $evento->id) }}"><i class="glyphicon glyphicon-eye-open"></i> Ver</a>
                                        <a class="btn btn-warning" href="{{ route('eventos.edit', $evento->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                                        <form action="{{ route('eventos.destroy', $evento->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Apagar</button>
                                        </form>
                                    </td>
                                @else
                                <td class="text-right">
                                    <a class="btn btn-primary" href="{{ route('eventos.show', $evento->id) }}"><i class="glyphicon glyphicon-eye-open"></i> Ver evento</a>
                                    <a class="btn btn-success" href="{{ route('eventos.edit', $evento->id) }}"><i class="glyphicon glyphicon-plus"></i> Participar</a> 
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $eventos->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection