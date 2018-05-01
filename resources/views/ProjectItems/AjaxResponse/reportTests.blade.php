<div class="row">
    @foreach($tests as $test)
        @if(getFileType($test->document)['type']=="image")
            <div class="col-md-3 item-list">
                <img src="{{asset('documents/projects/tests/'.$test->document)}}">
                <input type="checkbox" name="project_test[][test_id]" value="{{$test->id}}">
            </div>
        @endif
    @endforeach
</div>
