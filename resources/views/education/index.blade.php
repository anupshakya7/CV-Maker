@extends('layouts.web')
@section('content')
<h2>Education Summary</h2>

@foreach($educations as $education)
<div class="card my-2">
    <div class="card-body">
        <h3>{{$education->field_of_study}}</h3>
        <h4 class="card-title">
            {{$education->degree}}
            ({{\Carbon\Carbon::parse($education->graduation_start_date)->format('Y')}} -
            {{\Carbon\Carbon::parse($education->graduation_end_date)->format('Y')}})
        </h4>
        <h5>{{$education->school_name}}</h5>
        <p>{{$education->school_location}}</p>
        <a href="{{route('education.edit',$education)}}" class="btn btn-primary">Edit</a>
        <form action="{{route('education.destroy',$education)}}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</div>
@endforeach
<a href="{{route('education.create')}}" class="btn btn-primary mt-4">Add Another Education</a>
<a href="{{route('experience.index')}}" class="btn btn-primary mt-4">Work History</a>
@endsection