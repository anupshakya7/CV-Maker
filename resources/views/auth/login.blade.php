@extends('layouts.web')
@section('content')
<div class="container">
    <div class="card p-3 mt-3">
        <h2>Login Form</h2>
        <form action="{{route('auth.login.submit')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}"
                    placeholder="Email Address" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                @if($errors->has('email'))
                <span class="text-danger">{{$errors->first('email')}}</span>
                @endif
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}"
                    placeholder="Password">
                @if($errors->has('password'))
                <span class="text-danger">{{$errors->first('password')}}</span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

</div>
@endsection