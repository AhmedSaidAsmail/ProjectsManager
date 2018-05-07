<div id="time_table_tab" class="tab-pane fade" role="tabpanel">
    @if(in_array(auth()->user()->permission->contractorPermissions->schedule,[4,5,6,7]) || auth()->guard('web')->check())
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    @if(in_array(auth()->user()->permission->contractorPermissions->schedule,[7]) || auth()->guard('web')->check())
                        <div class="modal fade" id="add_new_Test_Paper_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h5 class="modal-title" id="">انشاء جدول ذمني</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="panel panel-default card-view">
                                                    <div class="panel-wrapper collapse in">
                                                        <div class="panel-body">

                                                            <div class="tab-struct custom-tab-2 mt-10">
                                                                <div class="tab-content" id="myTabContent_15">
                                                                    <div id="Reciving_request_tab" class="tab-pane fade active in" role="tabpanel">
                                                                        <form action="{{route('schedules.store')}}" method="post" enctype="multipart/form-data">
                                                                            <input type="hidden" name="project_id" value="{{$project->id}}">
                                                                            {{csrf_field()}}
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-success btn-rounded btn-block btn-anim" data-toggle="modal" data-target="#add_new_Test_Paper_model" data-whatever="@">
                                <i class="fa fa-pencil"></i><span class="btn-text">انشاء جدول ذمني</span></button>
                        </div>
                    @endif
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="col-lg-3 col-md-4 file-directory pa-0">
                            <div class="ibox float-e-margins">
                                <div class="ibox-content">
                                    <h6 class="pl-15 mb-10">بحث</h6>
                                    <ul class="tag-list pl-15 pr-15">
                                        <form action="{{route('schedules.index')}}" method="get" id="ajax-data" data-display="#project-requests">
                                            <input type="hidden" name="project_id" value="{{$project->id}}">
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
                            <div class="table-wrap">
                                <div class="table-responsive" id="project-requests">
                                    <table id="pro_list" class="table table-hover display  pb-30">
                                        <thead>
                                        <tr>
                                            <th>م</th>
                                            <th>الوصف</th>
                                            <th>التاريخ</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>م</th>
                                            <th>الوصف</th>
                                            <th>التاريخ</th>
                                            <th>Action</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php $requestsArrangement = 1; ?>
                                        @foreach($project->schedules as $schedule)
                                            <tr>
                                                <td>{{$requestsArrangement}}</td>
                                                <td>{{$schedule->description}}</td>
                                                <td>{{date('d-m-Y',strtotime($schedule->date))}}</td>

                                                <td>
                                                    @if(in_array(auth()->user()->permission->contractorPermissions->schedule,[4,5,6,7]) || auth()->guard('web')->check())
                                                        <a href="{{asset('documents/projects/schedules/'.$schedule->document)}}" style="display: inline;">
                                                            <i class="fas fa-download"></i>
                                                        </a>
                                                    @endif
                                                    @if(in_array(auth()->user()->permission->contractorPermissions->schedule,[2,6,7]) || auth()->guard('web')->check())
                                                        <a href="{{route('schedules.edit',['id'=>$schedule->id])}}" id="project-item-edit" style="display: inline;">
                                                            <i class="far fa-edit"></i>
                                                        </a>
                                                    @endif
                                                    @if(in_array(auth()->user()->permission->contractorPermissions->schedule,[1,5,7]) || auth()->guard('web')->check())
                                                        <form method="post" action="{{route('schedules.destroy',['id'=>$schedule->id])}}" style="display: inline;">
                                                            {{csrf_field()}}
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <button style=" border: 0; padding: 0; background-color: transparent;"><i class="far fa-trash-alt"></i></button>
                                                        </form>
                                                    @endif
                                                </td>
                                            </tr>
                                            <?php $requestsArrangement++; ?>
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
    @else
        <div class="row">
            <div class="col-md-12">
                <h5 class="text-center text-danger"><i class="fas fa-exclamation-triangle"></i> غير مسموح لك بالدخول علي هذه البيانات</h5>
            </div>
        </div>
    @endif

</div>