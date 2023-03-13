<label for="{{$name}}" class='form-input-image'> </label>
<div>
    <span>{{$placeholder}}</span>
    <div class='form-image {{$url ? 'active' : ''}}' for="{{$name}}" style='background-image:url({{$url}})' ></div>
    @error($name)
        <span class="form-input-error" for="{{$name}}">{{$message}}</span>
    @enderror
    <input type="file" name='{{$name}}' id={{$name}}>
</div>
