<li class="nav-item @if (Request::is($link))class="active"@endif">
    <a class="nav-link" href="{{$link}}">
        {{$name}}
    </a>
</li>