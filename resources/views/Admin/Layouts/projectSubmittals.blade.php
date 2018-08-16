<div id="Submetal_tab" class="tab-pane fade" role="tabpanel">
    @if(in_array(auth()->user()->permission->contractorPermissions->submittals,[4,5,6,7]) || auth()->guard('web')->check())
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    @if(in_array(auth()->user()->permission->contractorPermissions->submittals,[7]) || auth()->guard('web')->check())
                        {{-- Submmital add--}}
                        <div class="modal fade" id="add_new_submetal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h5 class="modal-title" id="">انشاء صبميتال جديد</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('submittals.store')}}" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="project_id" value="{{$project->id}}">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label class="control-label mb-10" for="">نوع الصبميتال</label>

                                                <div class="input-group">
                                                    <div class="input-group-addon" style="background-color:#BDBDBD;"><i class="icon-user"></i></div>
                                                    <select name="sort" class="form-control" data-placeholder="اختر واحده" tabindex="1">
                                                        <option value="">== اختر واحدا ==</option>
                                                        <option value="sample approval">اعتماد عينه</option>
                                                        <option value="supplier approval">اعتماد مخططات الورشه</option>
                                                        <option value="shop drawing approval ">اعتماد موردين</option>
                                                        <option value="subcontractor approval">اعتماد مقاول باطن</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-10" for="">تصنيف الصبميتال </label>

                                                <div class="input-group">
                                                    <div class="input-group-addon" style="background-color:#BDBDBD;"><i class="icon-user"></i></div>
                                                    <select name="category" class="form-control" data-placeholder="Choose a Category" tabindex="1">
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
                                                <label for="recipient-name" class="control-label mb-10">رقم الصبميتال</label>

                                                <div class="input-group">
                                                    <div class="input-group-addon" style="background-color:#BDBDBD;">
                                                        <i class="icon-user"></i></div>
                                                    <input type="number" name="number" class="form-control" id="recipient-name1">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="control-label mb-10"> رقم البندالمرتبط</label>

                                                <div class="input-group">
                                                    <div class="input-group-addon" style="background-color:#BDBDBD;"><i class="icon-user"></i></div>
                                                    <input type="text" name="related_item" class="form-control" id="recipient-name1">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="control-label mb-10">التاريخ</label>

                                                <div class="input-group">
                                                    <div class="input-group-addon" style="background-color:#BDBDBD;"><i class="icon-user"></i></div>
                                                    <input type="date" name="date" class="form-control" id="description">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="control-label mb-10">الوصف</label>

                                                <div class="input-group">
                                                    <div class="input-group-addon" style="background-color:#BDBDBD;"><i class="icon-user"></i></div>
                                                    <input type="text" name="description" class="form-control" id="description">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="fileupload btn btn-danger btn-rounded btn-anim btn-block">
                                                    <i class="fa fa-upload"></i><span class="btn-text">Upload</span>
                                                    <input class="upload" name="document" type="file" multiple>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="form-group">
                                                    <input type="submit" value="حفظ" class="btn btn-success btn-rounded btn-block">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-success btn-rounded btn-block btn-anim" data-toggle="modal" data-target="#add_new_submetal" data-whatever="@">
                            <i class="fa fa-pencil"></i><span class="btn-text">ارفاق صبميتال جديد</span></button>
                        {{-- Submmital add--}}
                    @endif
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="col-lg-3 col-md-4 file-directory pa-0">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-content">
                                        <h6 class="pl-15 mb-10">بحث</h6>
                                        <ul class="tag-list pl-15 pr-15">
                                            <form action="{{route('submittals.index')}}" method="get" id="ajax-data" data-display="#project-submittals">
                                                <input type="hidden" name="project_id" value="{{$project->id}}">

                                                <div class="form-group">
                                                    <label class="control-label mb-10" for="">نوع </label>

                                                    <div class="input-group">
                                                        <div class="input-group-addon" style="background-color:#BDBDBD;"><i class="icon-user"></i></div>
                                                        <select name="sort" class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                            <option value="">== اختر واحدا ==</option>
                                                            <option value="sample approval">اعتماد عينه</option>
                                                            <option value="supplier approval">اعتماد مخططات الورشه</option>
                                                            <option value="shop drawing approval ">اعتماد موردين</option>
                                                            <option value="subcontractor approval">اعتماد مقاول باطن</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-10" for="">تصنيف الصبميتال </label>

                                                    <div class="input-group">
                                                        <div class="input-group-addon" style="background-color:#BDBDBD;"><i class="icon-user"></i></div>
                                                        <select name="category" class="form-control" data-placeholder="Choose a Category" tabindex="1">
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
                                <div class="table-wrap">
                                    <div class="table-responsive" id="project-submittals">
                                        <table id="pro_list" class="table table-hover display  pb-30">
                                            <thead>
                                            <tr>
                                                <th>م</th>
                                                <th>الرقم</th>
                                                <th>البند</th>
                                                <th>التاريخ</th>
                                                <th>النوع</th>
                                                <th>التصنيف</th>
                                                <th>الوصف</th>
                                                <th>الملف</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>م</th>
                                                <th>الرقم</th>
                                                <th>البند</th>
                                                <th>التاريخ</th>
                                                <th>النوع</th>
                                                <th>التصنيف</th>
                                                <th>الوصف</th>
                                                <th>الملف</th>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                            <?php $arrangement = 1; ?>
                                            @foreach($project->submittals as $submittal)
                                                <tr>
                                                    <td>{{$arrangement}}</td>
                                                    <td>{{$submittal->number}}</td>
                                                    <td>{{$submittal->related_item}}</td>
                                                    <td>{{date('d-m-Y',strtotime($submittal->date))}}</td>
                                                    <td>{{Lang::get('terms.'.$submittal->sort)}}</td>
                                                    <td>{{Lang::get('terms.'.$submittal->category)}}</td>
                                                    <td>{{$submittal->description}}</td>
                                                    <td style=" padding: 0px; text-align: left;">
                                                        @if(in_array(auth()->user()->permission->contractorPermissions->submittals,[4,5,6,7]) || auth()->guard('web')->check())
                                                            <a href="{{asset('documents/projects/submittals/'.$submittal->document)}}" style="display: inline;">
                                                                <i class="fas fa-download"></i>
                                                            </a>
                                                        @endif
                                                        @if(in_array(auth()->user()->permission->contractorPermissions->submittals,[2,6,7]) || auth()->guard('web')->check())
                                                            <a href="{{route('submittals.edit',['id'=>$submittal->id])}}" id="project-item-edit" style="display: inline;">
                                                                <i class="far fa-edit"></i>
                                                            </a>
                                                        @endif
                                                        @if(in_array(auth()->user()->permission->contractorPermissions->submittals,[1,5,7]) || auth()->guard('web')->check())
                                                            <form method="post" action="{{route('submittals.destroy',['id'=>$submittal->id])}}" style="display: inline;">
                                                                {{csrf_field()}}
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <button style=" border: 0; padding: 0; background-color: transparent;"><i class="far fa-trash-alt"></i></button>
                                                            </form>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <?php $arrangement++; ?>
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
    @else
        <div class="row">
            <div class="col-md-12">
                <h5 class="text-center text-danger"><i class="fas fa-exclamation-triangle"></i> غير مسموح لك بالدخول علي هذه البيانات</h5>
            </div>
        </div>
    @endif
</div>
