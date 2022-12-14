@extends('admin.master')

@section('content')

<div class="layoutContent">
    <div class="container-fluid">
        <div class="row layout-header">
            <div class="col-sm-12 header-content">
                <h1>
                    <i class="fas fa-cloud-download-alt fa-xs text-white2"></i> Registros
                </h1>
            </div>
        </div>
        <div class="row layout-body">
            <div class="col-sm-12">
                <div class="card shadow">
                    <div class="card-header">
                        <span>
                            Registros
                        </span>
                        <div class="d-flex align-items-center">
                            <div class="">
                                <a class="btn btn-success btn-descargar" href="{{ route('records.excel', ['name' => request('name'), 'lastname' => request('lastname'), 'company' => request('company'), 'start_date' => request('start_date'), 'end_date' => request('end_date')]) }}">
                                    <span class="icon">
                                        <i class="fas fa-download px-2 py-1"></i>
                                    </span>
                                    <span class="text px-2 py-1">
                                        Descargar
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body row justify-content-start">
                        <div class="buscar-descarga">
                            <form action="{{ route('records.index') }}" method="GET">
                            <div class="form-group mb-0 mx-1 col-md-2">
                                <label class="pr-1">Fecha de inicio:</label>
                                <input type="date" name="start_date" class="form-control" value="{{ request('start_date') }}">
                            </div>
                            <div class="form-group mb-0 mx-1 col-md-2">
                                <label class="labelspan pr-1">Fecha de fin:</label>
                                <input type="date" name="end_date" class="form-control" value="{{ request('end_date') }}">
                            </div>
                            <div class="form-group col-md-2 mb-0">
                                <label class="labelspan pr-1">Nombre:</label>
                                <input type="text" class="form-control" name="name" placeholder="Nombre" value="{{ request('name') }}">
                            </div>
                            <div class="form-group col-md-2 mb-0">
                                <label class="labelspan pr-1">Apellido:</label>
                                <input type="text" class="form-control" name="lastname" placeholder="Nombre" value="{{ request('lastname') }}">
                            </div>
                            <div class="form-group col-md-2 mb-0">
                                <label class="labelspan pr-1">Empresa:</label>
                                <input type="text" class="form-control" name="company" placeholder="Empresa" value="{{ request('company') }}">
                            </div>
                            <div class="form-group col-md-2 mb-0">
                                <label class="labelspan pr-1"></label>
                                <button type="submit" class="btn btn-primary btn-buscar">
                                    Buscar &nbsp;&nbsp;<i class="fas fa-search"></i>
                                </button>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="px-3">
                        @include('admin.includes.alert')
                    </div>
                </div>
                <div class="tablaTotal">
                    <table class="table tableD">
                        <thead>
                            <tr>
                                <th>N??</th>
                                <th>Nombre Completo</th>
                                <th>Empresa</th>
                                <th>Cargo</th>
                                <th>Tel??fono</th>
                                <th>Email</th>
                                <th>Contacto por tel??fono</th>
                                <th>Contacto por email</th>
                                <th>Fecha de registro</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($records as $record)
                            <tr>
                                <td>{{ $records->firstItem() + $loop->index }}</td>
                                <td>{{ $record->name }} {{ $record->lastname }}</td>
                                <td>{{ $record->company }}</td>
                                <td>{{ $record->position }}</td>
                                <td>{{ $record->telephone }}</td>
                                <td>{{ $record->email }}</td>
                                <td>{{ ($record->for_telephone == 1)?'Si':'No' }}</td>
                                <td>{{ ($record->for_email == 1)?'Si':'No' }}</td>
                                <td>{!! \Carbon\Carbon::parse($record->created_at)->format('d/m/Y') !!}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="paginacionTotal d-flex justify-content-end">
                    {{ $records->withQueryString()->render() }}
                </div>
            </div>
        </div>
        @include('admin.includes.footer')
    </div>
</div>

@endsection