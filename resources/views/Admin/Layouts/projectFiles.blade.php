<div id="medialaibary_tab" class="tab-pane fade" role="tabpanel">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default card-view pa-0">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body pa-0">

                        <div class="col-lg-3 col-md-4 file-directory pa-0">
                            <div class="ibox float-e-margins">
                                <div class="ibox-content">
                                    <div class="file-manager">
                                        <div class="mt-20 mb-20 ml-15 mr-15">
                                            <div class="modal fade" id="uploud_new_media_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h5 class="modal-title" id="">رفع صوره او فيديو</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{route('project-files.store')}}" method="post" enctype="multipart/form-data">
                                                                <input type="hidden" name="project_id" value="{{$project->id}}">
                                                                {{csrf_field()}}
                                                                <div class="form-group">
                                                                    <label class="control-label mb-10" for="">نوع المرفق</label>

                                                                    <div class="input-group">
                                                                        <div class="input-group-addon" style="background-color:#BDBDBD;"><i class="icon-user"></i></div>
                                                                        <select name="sort" class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                                            <option value="">== اختر تصنيف ==</option>
                                                                            <option value="structural">انشائي</option>
                                                                            <option value="architectural">معماري</option>
                                                                            <option value="electrically">كهرباء</option>
                                                                            <option value="mechanics">ميكانيكا</option>
                                                                            <option value="general">موقع عام</option>
                                                                            <option value="certificate-guarantee">شهاده ضمان</option>
                                                                            <option value="other">اخري</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="message-text" class="control-label mb-10">التاريخ</label>
                                                                    <input name="date" type="date" class="form-control" id="description">
                                                                    </textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="message-text" class="control-label mb-10">الوصف</label>
                                                                    <input name="description" type="text" class="form-control" id="description">
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="fileupload btn btn-danger btn-rounded btn-anim btn-block"><i class="fa fa-upload"></i><span class="btn-text">Upload</span>
                                                                        <input name="document" class="upload" type="file" multiple>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="modal-footer">
                                                                        <input type="submit" value="حفظ" class="btn btn-success btn-rounded btn-block">
                                                                    </div>

                                                                </div>
                                                            </form>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <button class="btn btn-success btn-rounded btn-block btn-anim" data-toggle="modal" data-target="#uploud_new_media_model" data-whatever="@"><i class="fa fa-pencil"></i><span class="btn-text">رفع مرفق جديد</span></button>
                                        </div>
                                    </div>
                                    <div class="pl-15 mb-30">
                                        <a href="{{route('project-files.index')}}?project_id={{$project->id}}" data-display="#project-files" class="file-control active ajax-data">الكل</a>
                                        <a href="{{route('project-files.index')}}?type=files&project_id={{$project->id}}" data-display="#project-files" class="file-control ajax-data">الملفات</a>
                                        <a href="{{route('project-files.index')}}?type=videos&project_id={{$project->id}}" data-display="#project-files" class="file-control ajax-data">الفديوهات</a>
                                        <a href="{{route('project-files.index')}}?type=images&project_id={{$project->id}}" data-display="#project-files" class="file-control ajax-data">الصور</a>
                                    </div>

                                    <h6 class="pl-15 mb-10">بحث</h6>
                                    <ul class="tag-list pl-15 pr-15">
                                        <form action="{{route('project-files.index')}}" method="get" id="ajax-data" data-display="#project-files">
                                            <input type="hidden" name="project_id" value="{{$project->id}}">

                                            <div class="form-group">
                                                <label class="control-label mb-10" for="">التصنيف</label>

                                                <div class="input-group">
                                                    <div class="input-group-addon" style="background-color:#BDBDBD;"><i class="icon-user"></i></div>
                                                    <select name="type" class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                        <option value="">الكل</option>
                                                        <option value="files">ملفات</option>
                                                        <option value="images">صور</option>
                                                        <option value="videos">فديوهات</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-10" for="">نوع </label>

                                                <div class="input-group">
                                                    <div class="input-group-addon" style="background-color:#BDBDBD;"><i class="icon-user"></i></div>
                                                    <select name="sort" class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                        <option value="">== اختر تصنيف ==</option>
                                                        <option value="structural">انشائي</option>
                                                        <option value="architectural">معماري</option>
                                                        <option value="electrically">كهرباء</option>
                                                        <option value="mechanics">ميكانيكا</option>
                                                        <option value="general">موقع عام</option>
                                                        <option value="other">اخري</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="control-label mb-10">من التاريخ</label>
                                                <input name="date_from" type="date" class="form-control" id="description">
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="control-label mb-10">الي التاريخ</label>
                                                <input name="date_to" type="date" class="form-control" id="description">
                                            </div>
                                            <div class="form-group">
                                                <div class="modal-footer">

                                                    <button class="btn btn-success btn-rounded btn-block">بحث<i class="fa fa-search"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 file-sec pt-20">
                            <div class="row">
                                <div class="col-lg-12" id="project-files">
                                    {{-- Files show --}}
                                    @foreach($project->files->chunk(4) as $chunk)
                                        <div class="row">
                                            @foreach($chunk as $file)
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                    <div class="file">
                                                        <a href="{{asset('documents/projects/files/'.$file->document)}}" {!!  getFileType($file->document)['type']=="image"?'class="show-more-photos" data-toggle="lightbox" data-gallery="'.$project->name.'"':'target="_blank"'!!}  >
                                                            <div class="icon">
                                                                <?php
                                                                $fileType = getFileType($file->document);
                                                                ?>
                                                                <i class="fas {{$fileType['icon']}} {{$fileType['color']}}"></i>
                                                            </div>
                                                            <div class="file-name"> {{$file->description}} <br>
                                                                <span>Added: {{date('M d,Y',strtotime($file->created_at))}}</span></div>
                                                        </a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>