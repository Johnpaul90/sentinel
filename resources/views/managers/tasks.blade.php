<h1>you are a Manager!!</h1>
<h2>You have no tasks at the moment. Enjoy!</h2>

<form action="{{route('authenticate.logout')}}" method="post" id="logout-form">
    {{csrf_field()}}
    <a href="#"onclick="document.getElementById('logout-form').submit()">Logout</a>
</form>
