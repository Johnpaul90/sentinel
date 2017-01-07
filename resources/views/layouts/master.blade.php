
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Authentication</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://getbootstrap.com/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{URL::to('src/css/style.css')}}">

</head>

<body>

<div class="container">
    @include('partials.header')
    @yield('content')

    <footer class="footer text-center">
        <p>&copy; 2016 Okeke JP</p>
    </footer>

</div>
</body>
</html>
