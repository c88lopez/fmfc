<!DOCTYPE html>
<html>
    <head>
        @include('layouts.head')
    </head>
    <body style="padding-top: 70px;">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <img alt="Brand" src="" />
                    </a>
                </div>
                <div class="collapse navbar-collapse navbar-left">
                    <button type="button" class="btn btn-default navbar-btn">Log in</button>
                </div>
            </div>
        </nav>

        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Home 2</a></li>
            @stack('breadcrumb')
        </ol>

        @include('layouts.body')

        <script type="application/javascript" src="{{ elixir('js/jquery.min.js') }}"></script>
        <script type="application/javascript" src="{{ elixir('js/bootstrap.min.js') }}"></script>

        @stack('scripts')
    </body>
</html>