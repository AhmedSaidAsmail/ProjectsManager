<div class="row">
    @foreach($submittals as $submittal)
        @if(getFileType($submittal->document)['type']=="image")
            <div class="col-md-3 item-list">
                <img src="{{asset('documents/projects/submittals/'.$submittal->document)}}">
                <input type="checkbox" name="project_submittal[][submittal_id]" value="{{$submittal->id}}">
            </div>
        @endif
    @endforeach
</div>
