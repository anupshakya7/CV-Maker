@extends('layouts.web')
@section('content')
<div class="container">
    <div>
        @if(session()->has('errors'))
        @foreach($errors->all() as $e)
        <div class="alert alert-danger" role="alert">
            <p>{{$e}}</p>
        </div>
        @endforeach
        @endif
    </div>
    <div class="card p-3 mt-3">
        <h3>Create User Detail</h3>
        <form action="{{route('user-detail.store')}}" method="POST">
            @csrf
            <x-input name="fullname" placeholder="Full Name"></x-input>
            <x-input name="email" placeholder="Email Address"></x-input>
            <x-input name="phone" placeholder="Phone Number"></x-input>
            <x-input name="address" placeholder="Address"></x-input>
            <x-textarea name="summary" placeholder="Summary"></x-textarea>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>
@endsection