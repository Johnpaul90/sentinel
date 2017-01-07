<div class="header clearfix">
    <nav>
        <ul class="nav nav-pills pull-right">
            @if(Sentinel::check())
                <li role="presentation">
                    <form action="{{route('authenticate.logout')}}" method="post" id="logout-form">
                        {{csrf_field()}}
                        <a href="#"onclick="document.getElementById('logout-form').submit()">Logout</a>
                    </form>
                </li>
            @else
            <li role="presentation"><a href="{{route('authenticate.login')}}">Login</a></li>
            <li role="presentation"><a href="{{route('authenticate.register')}}">Register</a></li>
            @endif
        </ul>
    </nav>
    @if(Sentinel::check())
        Welcome, {{Sentinel::getUser()->first_name}}
    @else
    <h3 class="text-muted">Authentication with Sentinel</h3>
    @endif
</div>
