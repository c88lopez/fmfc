<!DOCTYPE html>
<html>
    <head>
        @include('layouts.head')
    </head>
    <body style="padding-top: 70px;">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">
                        <img alt="Fmfc" src="" />
                    </a>
                </div>

                <div>
                    <ul class="nav navbar-nav">
                        @include('layouts.menu.list')
                    </ul>
                </div>

                <div class="navbar-btn navbar-right">
                    <button class="btn btn-success">Log In !</button>
                </div>
            </div>
        </nav>

        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            @stack('breadcrumb')
        </ol>

        @include('layouts.body')

        <script type="application/javascript" src="{{ mix('js/all.js') }}"></script>

        @stack('scripts')
    </body>
</html>