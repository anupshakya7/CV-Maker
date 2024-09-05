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
        <h3>Edit Education</h3>
        <form action="{{route('education.update',$education)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="school_name" class="form-label">School Name</label>
                <input type="text" class="form-control" id="school_name"
                    value="{{old('school_name',$education->school_name)}}" name="school_name" placeholder="School Name">
            </div>
            <div class="mb-3">
                <label for="school_location" class="form-label">School Location</label>
                <input type="text" class="form-control" id="school_location"
                    value="{{old('school_location',$education->school_location)}}" name="school_location"
                    placeholder="School Location">
            </div>
            <div class="mb-3">
                <label for="degree" class="form-label">Degree</label>
                <input type="text" class="form-control" id="degree" value="{{old('degree',$education->degree)}}"
                    name="degree" placeholder="Degree">
            </div>
            <div class="mb-3">
                <label for="field_of_study" class="form-label">Field of Study</label>
                <input type="text" class="form-control" id="field_of_study"
                    value="{{old('field_of_study',$education->field_of_study)}}" name="field_of_study"
                    placeholder="Field of Study">
            </div>
            <div class="mb-3">
                <label for="graduation_start_date" class="form-label">Graduation Start Date</label>
                <input type="date" class="form-control" id="graduation_start_date"
                    value="{{old('graduation_start_date',$education->graduation_start_date)}}"
                    name="graduation_start_date">
            </div>
            <div class="mb-3">
                <label for="graduation_end_date" class="form-label">Graduation End Date</label>
                <input type="date" class="form-control" id="graduation_end_date"
                    value="{{old('graduation_end_date',$education->graduation_end_date)}}" name="graduation_end_date">
            </div>
            <button type="submit" class="btn btn-primary">Update Education</button>
        </form>
    </div>

</div>
@endsection