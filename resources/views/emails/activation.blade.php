<h1>Hello,{{$user->first_name}}</h1>

<p>Please click the link to activate your account</p>

<a href="{{env('APP_URL')}}/activate/{{$user->email}}/{{$code}}">Activate Account</a>