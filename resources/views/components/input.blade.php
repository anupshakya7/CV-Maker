@props(['name','placeholder','type'=>'text','value'=>null])
<div class="mb-3">
    <label for="{{$name}}" class="form-label">{{ucfirst($name)}}</label>
    <input type="text" class="form-control" id="{{$name}}" value="{{$value}}" name="{{$name}}"
        placeholder="{{$placeholder}}">
</div>