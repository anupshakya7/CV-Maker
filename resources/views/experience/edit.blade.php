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
        <h3>Edit Experience</h3>
        <form action="{{route('experience.update',$experience)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="job_title" class="form-label">Job Title</label>
                <input type="text" class="form-control" id="job_title" name="job_title"
                    value="{{old('job_title',$experience->job_title)}}" placeholder="Job Title">
            </div>
            <div class="mb-3">
                <label for="employer" class="form-label">Employer</label>
                <input type="text" class="form-control" id="employer" name="employer"
                    value="{{old('job_title',$experience->employer)}}" placeholder="employer">
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" name="city"
                    value="{{old('job_title',$experience->city)}}" placeholder="City">
            </div>
            <div class="mb-3">
                <label for="state" class="form-label">State</label>
                <input type="text" class="form-control" id="state" name="state"
                    value="{{old('job_title',$experience->state)}}" placeholder="State">
            </div>
            <div class="mb-3">
                <label for="start_date" class="form-label">Start Date</label>
                <input type="date" class="form-control" id="start_date" name="start_date"
                    value="{{old('job_title',$experience->start_date)}}">
            </div>
            <div class="mb-3">
                <label for="end_date" class="form-label">End Date</label>
                <input type="date" class="form-control" id="end_date" name="end_date"
                    value="{{old('job_title',$experience->end_date)}}">
            </div>
            <button type="submit" class="btn btn-primary">Update Experience</button>
        </form>
    </div>

</div>
@endsection