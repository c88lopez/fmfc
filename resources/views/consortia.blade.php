@extends('layouts.common')

@push('breadcrumb')
    <a class="breadcrumb-item active" href="consortia">Consorcios</a>
@endpush

@section('content')

    <div class="row">
        <div class="col-sm-2">
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="#">Mis Consorcios</a>
                </li>
                <li class="list-group-item">
                    <a href="#">Dueños</a>
                </li>
                <li class="list-group-item">
                    <a href="#">Empleados</a>
                </li>
            </ul>
        </div>

        <div class="col-sm-10">
            <div class="card">
                <!-- Default panel contents -->
                <div class="card-header">Panel heading</div>
                <div class="card-body">
                    <div class="row justify-content-between">
                        <div class="col-sm-1">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-success">Crear</button>
                            </span>
                        </div>

                        <div class="col-sm-3">
                            <span class="input-group-btn">
                                <input type="text" class="form-control" placeholder="Buscar..." aria-label="Buscar...">
                                <span class="input-group-btn">
                                    <button class="btn btn-secondary" type="button">Go!</button>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Table -->
                <table class="table table-striped table-sm">
                    <thead>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>&nbsp;</th>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">
                            C0001
                        </th>
                        <td>
                            Nombre consorcio 1
                        </td>
                        <td>
                            Av. Direccion consorcio 1234
                        </td>
                        <td>
                            <button type="button" class="btn btn-outline-info btn-sm" aria-label="Left Align">
                                <img src="/icons/iconic/pencil.svg" alt="pencil">
                            </button>
                            <button type="button" class="btn btn-outline-danger btn-sm" aria-label="Left Align">
                                <img src="/icons/iconic/x.svg" alt="x">
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            C0002
                        </th>
                        <td>
                            Nombre consorcio 2
                        </td>
                        <td>
                            Av. Direccion consorcio 5678
                        </td>
                        <td>
                            <button type="button" class="btn btn-outline-info btn-sm" aria-label="Left Align">
                                <img src="/icons/iconic/pencil.svg" alt="pencil">
                            </button>
                            <button type="button" class="btn btn-outline-danger btn-sm" aria-label="Left Align">
                                <img src="/icons/iconic/x.svg" alt="x">
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            C0003
                        </th>
                        <td>
                            Nombre consorcio 3
                        </td>
                        <td>
                            Av. Direccion consorcio 9012
                        </td>
                        <td>
                            <button type="button" class="btn btn-outline-info btn-sm" aria-label="Left Align">
                                <img src="/icons/iconic/pencil.svg" alt="pencil">
                            </button>
                            <button type="button" class="btn btn-outline-danger btn-sm" aria-label="Left Align">
                                <img src="/icons/iconic/x.svg" alt="x">
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <div class="panel-footer">
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&larr;</span> Older</a></li>

                            <li class="page-item active"><a class="page-link" href="#">1<span class="sr-only">(current)</span></a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>

                            <li class="page-item"><a class="page-link" href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
    </div>

@endsection

@push('scripts')
@endpush