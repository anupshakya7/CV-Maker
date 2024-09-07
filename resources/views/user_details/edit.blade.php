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
        <h3>Edit User Detail</h3>
        <form action="{{route('user-detail.update',$userDetail)}}" method="POST">
            @csrf
            @method('PUT')
            <x-input name="fullname" placeholder="Full Name" :value="$userDetail->fullname"></x-input>
            <x-input name="email" placeholder="Email Address" :value="$userDetail->email"></x-input>
            <x-input name="phone" placeholder="Phone Number" :value="$userDetail->phone"></x-input>
            <x-input name="address" placeholder="Address" :value="$userDetail->address"></x-input>
            <x-textarea name="summary" placeholder="Summary" :value="$userDetail->summary"></x-textarea>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>
@endsection