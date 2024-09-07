@props(['name','placeholder','value'=>null])
<div class="mb-3">
    <label for="{{$name}}" class="form-label">{{ucfirst($name)}}</label>
    <textarea type="text" class="form-control" id="{{$name}}" name="{{$name}}"
        placeholder="{{$placeholder}}">{{$value}}</textarea>
</div>