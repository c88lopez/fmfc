<!DOCTYPE html>
<html>
    <head>
        @include('layouts.head')
    </head>
    <body>
        @include('layouts.body')

        <script type="application/javascript" src="{{ elixir('js/jquery.min.js') }}"></script>
        <script type="application/javascript" src="{{ elixir('js/bootstrap.min.js') }}"></script>

        @stack('scripts')
    </body>
</html>