<li>
    <a href="{{$link}}" @if (Request::is($link))class="active"@endif>
        {{$name}}
    </a>
</li>