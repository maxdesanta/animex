<form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none">
    {{ csrf_field() }}
</form>

<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    Logout
</a>