<div id="as_bulit_tab" class="tab-pane fade" role="tabpanel">
    @if(in_array(auth()->user()->permission->contractorPermissions->cordnation_drawings,[4,5,6,7]) || auth()->guard('web')->check())
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default card-view pa-0">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body pa-0">
                            <div class="">
                                <div class="col-lg-3 col-md-4 file-directory pa-10">
                                    <div class="ibox float-e-margins">
                                        <div class="ibox-content">
                                            <div class="file-manager">
                                                <div class="mt-20 mb-20 ml-15 mr-15">
                                                    @if(in_array(auth()->user()->permission->contractorPermissions->cordnation_drawings,[7]) || auth()->guard('web')->check())
                                                        <div class="modal fade" id="uploud_new_As_bulit_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                        <h5 class="modal-title" id="">رفع مخططات اسبيلت</h5>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form action="{{route('cordnation-drawings.store')}}" method="post" enctype="multipart/form-data">
                                                                            <input type="hidden" name="project_id" value="{{$project->id}}">
                                                                            {{csrf_field()}}
                                                                            <div class="form-group">
                                                                                <label class="control-label mb-10" for="">نوع المخطط</label>

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
                                                                                <label for="message-text" class="control-label mb-10">التاريخ</label>
                                                                                <input name="date" type="date" class="form-control" id="description">
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
                                                        <div>
                                                            <button class="btn btn-success btn-rounded btn-block btn-anim" data-toggle="modal" data-target="#uploud_new_As_bulit_model" data-whatever="@"><i class="fa fa-pencil"></i><span
                                                                        class="btn-text">رفع مخطط اسبيلت جديد</span>
                                                            </button>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="pl-15 mb-30">
                                                    <a href="{{route('cordnation-drawings.index')}}?project_id={{$project->id}}&sort=architectural" data-display="#project-cordnationDrawings" class="file-control active ajax-data">المعماري</a>
                                                    <a href="{{route('cordnation-drawings.index')}}?project_id={{$project->id}}&sort=structural" data-display="#project-cordnationDrawings" class="file-control ajax-data">الانشائي</a>
                                                    <a href="{{route('cordnation-drawings.index')}}?project_id={{$project->id}}&sort=mechanics" data-display="#project-cordnationDrawings" class="file-control ajax-data">الميكانيكا</a>
                                                    <a href="{{route('cordnation-drawings.index')}}?project_id={{$project->id}}&sort=electrically" data-display="#project-cordnationDrawings" class="file-control ajax-data">الكهرباء</a>
                                                    <a href="{{route('cordnation-drawings.index')}}?project_id={{$project->id}}&sort=general" data-display="#project-cordnationDrawings" class="file-control ajax-data">الموقع العام</a>
                                                </div>
                                                <h6 class="pl-15 mb-10">بحث</h6>

                                                <form action="{{route('cordnation-drawings.index')}}" method="get" id="ajax-data" data-display="#project-cordnationDrawings">
                                                    <input type="hidden" name="project_id" value="{{$project->id}}">

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
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-8 file-sec pt-20">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="table-wrap">
                                                    <div class="table-responsive" id="project-cordnationDrawings">
                                                        <table id="pro_list" class="table table-hover display  pb-30">
                                                            <thead>
                                                            <tr>
                                                                <th>م</th>
                                                                <th>النوع</th>
                                                                <th>التاريخ</th>
                                                                <th>الوصف</th>
                                                                <th>الملف</th>
                                                            </tr>
                                                            </thead>
                                                            <tfoot>
                                                            <tr>
                                                                <th>م</th>
                                                                <th>النوع</th>
                                                                <th>التاريخ</th>
                                                                <th>الوصف</th>
                                                                <th>الملف</th>
                                                            </tr>
                                                            </tfoot>
                                                            <tbody>
                                                            <?php $cordnationsArrangement = 1; ?>
                                                            @foreach($project->cordnationDrawings as $cordnation)
                                                                <tr>
                                                                    <td>{{$cordnationsArrangement}}</td>
                                                                    <td>{{Lang::get('terms.'.$cordnation->sort)}}</td>
                                                                    <td>{{date('d-m-Y',strtotime($cordnation->date))}}</td>
                                                                    <td>{{$cordnation->description}}</td>
                                                                    <td>
                                                                        @if(in_array(auth()->user()->permission->contractorPermissions->cordnation_drawings,[4,5,6,7]) || auth()->guard('web')->check())
                                                                            <a href="{{asset('documents/projects/cordnations/'.$cordnation->document)}}">
                                                                                <i class="fas fa-cloud-download-alt"></i>
                                                                            </a>
                                                                        @endif
                                                                        @if(in_array(auth()->user()->permission->contractorPermissions->cordnation_drawings,[2,6,7]) || auth()->guard('web')->check())
                                                                            <a href="{{route('cordnation-drawings.edit',['id'=>$cordnation->id])}}" id="project-item-edit" style="display: inline;">
                                                                                <i class="far fa-edit"></i>
                                                                            </a>
                                                                        @endif
                                                                        @if(in_array(auth()->user()->permission->contractorPermissions->cordnation_drawings,[1,5,7]) || auth()->guard('web')->check())
                                                                            <form method="post" action="{{route('cordnation-drawings.destroy',['id'=>$cordnation->id])}}" style="display: inline;">
                                                                                {{csrf_field()}}
                                                                                <input type="hidden" name="_method" value="DELETE">
                                                                                <button style=" border: 0; padding: 0; background-color: transparent;"><i class="far fa-trash-alt"></i></button>
                                                                            </form>
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                                <?php $cordnationsArrangement++; ?>
                                                            @endforeach
                                                            </tbody>

                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-md-12">
                <h5 class="text-center text-danger"><i class="fas fa-exclamation-triangle"></i> غير مسموح لك بالدخول علي هذه البيانات</h5>
            </div>
        </div>
    @endif
</div>