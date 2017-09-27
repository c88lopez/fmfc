<!DOCTYPE html>
<html>
    <head>
        @include('layouts.head')
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">Fmfc</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    @include('layouts.menu.list')
                </ul>

                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Log In !</button>
            </div>
        </nav>

        <nav class="breadcrumb">
            <a class="breadcrumb-item" href="/">Home</a>
            @stack('breadcrumb')
        </nav>

        @include('layouts.body')

        <script type="application/javascript" src="{{ mix('js/all.js') }}"></script>

        @stack('scripts')
    </body>
</html>