@extends('layoutlogin')

@section('contentlogin')

  <form id="login" method="POST" accept="{{ route('login') }}">
    @csrf
    <h3>Welcome back to i.spill</h3>
    <p>Enter your registered email and password to log in</p>

    <label for="email" value="{{ __('Email') }}"></label>
    <input type="text" placeholder="Email" id="email" name="email">

    <label for="password"></label>
    <input type="password" placeholder="Password" id="password" name="password">

    <button>Login</button>
    <p3>Don't have an Account?<a href={{route('register') }}>Create Now!</a></p3>
  </form>
  </div>
</body>
</html>
@endsection
