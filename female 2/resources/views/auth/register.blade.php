@extends('layoutregister')

@section('contentregister')
  <form method="POST" action="{{ route('register') }}">
    @csrf
    <h3>Create New Account</h3>
    <br>
    <label for="name"></label>
    <input type="text" id="name" placeholder="Username" name="name">

    <label for="email"></label>
    <input type="text" placeholder="Email" id="email" name="email">

    <label for="password"></label>
    <input type="password" placeholder="Password" id="password" name="password">
    
    <label for="password_confirmation">
    <input id="password_confirmation" placeholder="Password Confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />


    <button class="ml-4">{{ __('Register') }}
    </button>
    <br>
    <div style="text-align: center; margin-left:-130px">Already a member?<a href={{route('login') }}>Login here</a></div>
  </form>
  </div>
</body>

</html>
@endsection