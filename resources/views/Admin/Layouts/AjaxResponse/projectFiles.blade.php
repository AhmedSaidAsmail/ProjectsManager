@foreach($files->chunk(4) as $chunk)
    <div class="row">
        @foreach($chunk as $file)
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                <div class="file"><a href="{{asset('documents/projects/files/'.$file->document)}}" target="_blank">
                        <div class="icon">
                            <?php
                            $fileType = getFileType($file->document);
                            ?>
                            <i class="fas {{$fileType['icon']}} {{$fileType['color']}}"></i>
                        </div>
                        <div class="file-name"> {{$file->description}} <br>
                            <span>Added: {{date('M d,Y',strtotime($file->created_at))}}</span></div>
                    </a></div>
            </div>
        @endforeach
    </div>
@endforeach