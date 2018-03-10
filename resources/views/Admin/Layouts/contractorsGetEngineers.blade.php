<optgroup label="{{$contractor->name}}">
    @foreach($engineers as $engineer)
        <option value="{{$engineer->id}}">{{$engineer->name}}</option>
    @endforeach
</optgroup>
