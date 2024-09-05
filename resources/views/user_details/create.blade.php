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
        <form action="{{route('user-detail.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="fullname" class="form-label">Fullname</label>
                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Address">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>
@endsection