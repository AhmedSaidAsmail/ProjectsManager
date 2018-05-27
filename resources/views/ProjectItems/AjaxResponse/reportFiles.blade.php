<div class="row">
    @foreach($files as $file)
        @if(getFileType($file->document)['type']=="image")
            <div class="col-md-3 item-list">
                <img src="{{asset('documents/projects/files/'.$file->document)}}">
                <input type="checkbox" name="project_files[][file_id]" value="{{$file->id}}">
            </div>
        @endif
    @endforeach
</div>
