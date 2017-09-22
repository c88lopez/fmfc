@extends('layouts.common')

@push('breadcrumb')
    <li><a href="pppIndustries">PPP Industries</a></li>
@endpush

@section('content')

    <div class="row">
        <div class="col-md-1">
            <ul class="nav nav-pills nav-stacked">
                <li role="presentation">
                    <a href="#">Mis Consorcios</a>
                </li>
                <li role="presentation">
                    <a href="#">Mi Perfil</a>
                </li>
            </ul>
        </div>

        <div class="col-md-11">
            &nbsp;
        </div>
    </div>

@endsection

@push('scripts')
@endpush