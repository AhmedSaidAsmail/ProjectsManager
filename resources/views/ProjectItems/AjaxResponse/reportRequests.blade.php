<div class="row">
    @foreach($requests as $request)
        @if(getFileType($request->document)['type']=="image")
            <div class="col-md-3 item-list">
                <img src="{{asset('documents/projects/requests/'.$request->document)}}">
                <input type="checkbox" name="project_request[][request_id]" value="{{$request->id}}">
            </div>
        @endif
    @endforeach
</div>
