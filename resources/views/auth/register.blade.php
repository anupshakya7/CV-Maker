@extends('layouts.web')
@section('content')
<div class="container">
    <div class="card p-3 mt-3">
        <h2>Register Form</h2>
        <form action="{{route('auth.register.submit')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}"
                    placeholder="Fullname">
                @if($errors->has('name'))
                <span class="text-danger">{{$errors->first('name')}}</span>
                @endif
            </div>
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
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                    value="{{old('password_confirmation')}}" placeholder="Confirm Password">
                @if($errors->has('password_confirmation'))
                <span class="text-danger">{{$errors->first('password_confirmation')}}</span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>

</div>
@endsection