<optgroup label="{{$owner->name}}">
    @foreach($engineers as $engineer)
        <option value="{{$engineer->id}}">{{$engineer->name}}</option>
    @endforeach
</optgroup>
