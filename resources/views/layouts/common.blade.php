<!DOCTYPE html>
<html>
    <head>
        @include('layouts.head')
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">
                <img alt="Fmfc" src="" />
            </a>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    @include('layouts.menu.list')
                </ul>
            </div>

            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Log In !</button>
            </form>
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