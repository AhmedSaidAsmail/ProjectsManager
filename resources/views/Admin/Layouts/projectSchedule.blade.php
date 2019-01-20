<div id="time_table_tab" class="tab-pane fade" role="tabpanel">
    @if(in_array(auth()->user()->permission->contractorPermissions->schedule,[4,5,6,7]) || auth()->guard('web')->check())
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    @if(in_array(auth()->user()->permission->contractorPermissions->schedule,[7]) || auth()->guard('web')->check())
                        <div class="modal fade" id="add_new_Test_Paper_model" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
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
                                                                    <div id="Reciving_request_tab"
                                                                         class="tab-pane fade active in"
                                                                         role="tabpanel">
                                                                        <form action="{{route('time-line-items.store')}}"
                                                                              method="post"
                                                                              enctype="multipart/form-data">
                                                                            <input type="hidden" name="project_id"
                                                                                   value="{{$project->id}}">
                                                                            {{csrf_field()}}
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label>عنوان الجدول
                                                                                            الزمني</label>
                                                                                        <select name="time_line_id"
                                                                                                class="form-control">
                                                                                            <option value="">اختار
                                                                                                عنوان
                                                                                            </option>
                                                                                            @foreach($project->timeLines as $timeLine)
                                                                                                <option value="{{$timeLine->id}}">{{$timeLine->nameWithAllParents()}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label>الاسم</label>
                                                                                        <input class="form-control"
                                                                                               name="activity_name">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label>Original</label>
                                                                                        <input class="form-control"
                                                                                               name="original">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label>Activity #ID</label>
                                                                                        <input class="form-control"
                                                                                               name="activity_id">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for="message-text"
                                                                                               class="control-label mb-10">تاريخ
                                                                                            البداية</label>
                                                                                        <input type="date"
                                                                                               name="starting_date"
                                                                                               class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for="message-text"
                                                                                               class="control-label mb-10">تاريخ
                                                                                            النهاية</label>
                                                                                        <input type="date"
                                                                                               name="ending_date"
                                                                                               class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div class="modal-footer">
                                                                                    <input type="submit" value="حفظ"
                                                                                           class="btn btn-success btn-rounded btn-block">
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
                            <button class="btn btn-success btn-rounded btn-block btn-anim" data-toggle="modal"
                                    data-target="#add_new_Test_Paper_model" data-whatever="@">
                                <i class="fa fa-pencil"></i><span class="btn-text">انشاء جدول ذمني</span></button>
                        </div>
                    @endif
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        {{-- Time Lines Table--}}
                        <table class="table table-bordered main-table">
                            <thead>
                            <tr>
                                <th>Activity ID</th>
                                <th>Activity Name</th>
                                <th>Original</th>
                                <th>Start</th>
                                <th>Finish</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($timeLines as $timeLine)
                                <tr>
                                    <td colspan="2">{{$timeLine->name}}</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach($timeLine->items as $item)
                                    <tr>
                                        <td>{{$item->activity_id}}</td>
                                        <td>{{$item->activity_name}}م</td>
                                        <td>{{$item->original}}</td>
                                        <td>{{$item->starting_date}}</td>
                                        <td>{{$item->ending_date}}</td>
                                    </tr>
                                @endforeach
                                {!! timeLinesChilds($timeLine) !!}
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-md-12">
                <h5 class="text-center text-danger"><i class="fas fa-exclamation-triangle"></i> غير مسموح لك بالدخول علي
                    هذه البيانات</h5>
            </div>
        </div>
    @endif

</div>