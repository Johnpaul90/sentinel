<h1>You are an Admin!</h1>
<h2>Total earnings for the month = N500,000.00</h2>
<form action="{{route('authenticate.logout')}}" method="post" id="logout-form">
    {{csrf_field()}}
    <a href="#"onclick="document.getElementById('logout-form').submit()">Logout</a>
</form>
