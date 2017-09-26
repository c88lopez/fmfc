@extends('layouts.common')

@push('breadcrumb')
<li><a href="pppIndustries">PPP Industries</a></li>
@endpush

@section('content')

<div class="row">
    <div class="col-md-2">
        <ul class="list-group">
            <li class="list-group-item">
                <a href="#">Mis Consorcios</a>
            </li>
            <li class="list-group-item">
                <a href="#">Mi Perfil</a>
            </li>
        </ul>
    </div>

    <div class="col-md-10">
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Panel heading</div>
            <div class="panel-body">
                <form class="form-inline">

                    <div class="col-sm-2 no-left-padding">
                        <div class="btn-group" role="group" aria-label="...">
                            <button type="button" class="btn btn-default">Crear</button>
                        </div>
                    </div>

                    <div class="col-sm-4 col-sm-offset-6 no-right-padding">
                        <div class="form-group pull-right">
                            <input type="text" class="form-control" placeholder="Search">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>

                    </div>
                </form>
            </div>

            <!-- Table -->
            <table class="table">
                <thead>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th class="col-sm-2">&nbsp;</th>
                </thead>
                <tbody>
                <tr>
                    <td>
                        C0001
                    </td>
                    <td>
                        Nombre consorcio 1
                    </td>
                    <td>
                        Av. Direccion consorcio 1234
                    </td>
                    <td>
                        <button type="button" class="btn btn-default btn-sm pull-right"
                                aria-label="Left Align">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-sm pull-right"
                                aria-label="Left Align">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>
                        C0002
                    </td>
                    <td>
                        Nombre consorcio 2
                    </td>
                    <td>
                        Av. Direccion consorcio 5678
                    </td>
                    <td>
                        <button type="button" class="btn btn-default btn-sm pull-right"
                                aria-label="Left Align">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-sm pull-right"
                                aria-label="Left Align">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>
                        C0003
                    </td>
                    <td>
                        Nombre consorcio 3
                    </td>
                    <td>
                        Av. Direccion consorcio 9012
                    </td>
                    <td>
                        <button type="button" class="btn btn-default btn-sm pull-right"
                                aria-label="Left Align">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-sm pull-right"
                                aria-label="Left Align">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>

            <div class="panel-footer">
                <nav aria-label="...">
                    <ul class="pager no-top-margin no-bottom-margin">
                        <li class="previous disabled"><a href="#"><span
                                        aria-hidden="true">&larr;</span> Older</a></li>

                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>

                        <li class="next"><a href="#">Newer <span
                                        aria-hidden="true">&rarr;</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>
</div>

@endsection

@push('scripts')
@endpush