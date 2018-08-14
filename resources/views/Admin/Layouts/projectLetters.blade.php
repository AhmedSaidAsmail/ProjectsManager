<div id="letters_tab" class="tab-pane fade" role="tabpanel">
    @if(in_array(auth()->user()->permission->contractorPermissions->letters,[4,5,6,7]) || auth()->guard('web')->check())
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    @if(in_array(auth()->user()->permission->contractorPermissions->letters,[7]) || auth()->guard('web')->check())
                        {{-- Submmital add--}}
                        <div class="modal fade" id="add_new_letter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h5 class="modal-title" id="">انشاء خطاب جديد</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('letters.store')}}" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="project_id" value="{{$project->id}}">
                                            {{csrf_field()}}
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10">تصنيف الخطاب</label>

                                                        <div class="input-group">
                                                            <div class="input-group-addon" style="background-color:#BDBDBD;">
                                                                <i class="icon-user"></i>
                                                            </div>
                                                            <select class="form-control" name="sort">
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
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10">نوع الخطاب</label>

                                                        <div class="input-group">
                                                            <div class="input-group-addon" style="background-color:#BDBDBD;">
                                                                <i class="icon-user"></i>
                                                            </div>
                                                            <select class="form-control" name="specific">
                                                                <option value="">== اختر تصنيف ==</option>
                                                                <option value="exported">صادر</option>
                                                                <option value="imported">وارد</option>
                                                                <option value="meeting">محضر اجتماع</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10">الجهه</label>

                                                        <div class="input-group">
                                                            <div class="input-group-addon" style="background-color:#BDBDBD;">
                                                                <i class="icon-user"></i>
                                                            </div>
                                                            <select class="form-control" name="receiver">
                                                                <option value="">== اختر الجهه ==</option>
                                                                <option value="location">الموقع</option>
                                                                <option value="office">المكتب</option>
                                                                <option value="owner">المالك</option>
                                                                <option value="contractor">المقاول</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label mb-10">رقم الخطاب</label>
                                                        <input type="text" name="number" class="form-control" id="recipient-name1">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label mb-10"> رقم البندالمرتبط</label>
                                                        <input type="text" name="related_item" class="form-control" id="" placeholder="رقم المبني + رقم البند">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="message-text" class="control-label mb-10">التاريخ</label>
                                                        <input type="date" name="date" class="form-control" id="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">

                                                </div>
                                                <span class="help-block">  </span>
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="control-label mb-10">الوصف</label>
                                                <input type="text" class="form-control" name="description">
                                            </div>
                                            <div class="form-group">
                                                <div class="fileupload btn btn-danger btn-rounded btn-anim btn-block">
                                                    <i class="fa fa-upload"></i>
                                                    <span class="btn-text">Upload</span>
                                                    <input class="upload" name="document" type="file" multiple>
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
                        <button class="btn btn-success btn-rounded btn-block btn-anim" data-toggle="modal" data-target="#add_new_letter" data-whatever="@">
                            <i class="fa fa-pencil"></i><span class="btn-text">انشاء خطاب جديد</span></button>
                        {{-- Submmital add--}}
                    @endif
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="col-lg-3 col-md-4 file-directory pa-0">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-content">
                                        <h6 class="pl-15 mb-10">بحث</h6>
                                        <ul class="tag-list pl-15 pr-15">
                                            <form action="{{route('letters.index')}}" method="get" id="ajax-data" data-display="#project-submittals">
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
                                                    <label class="control-label mb-10">نوع الخطاب</label>

                                                    <div class="input-group">
                                                        <div class="input-group-addon" style="background-color:#BDBDBD;">
                                                            <i class="icon-user"></i>
                                                        </div>
                                                        <select class="form-control" name="specific">
                                                            <option value="">== اختر تصنيف ==</option>
                                                            <option value="exported">صادر</option>
                                                            <option value="imported">وارد</option>
                                                            <option value="meeting">محضر اجتماع</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-10">الجهه</label>

                                                    <div class="input-group">
                                                        <div class="input-group-addon" style="background-color:#BDBDBD;">
                                                            <i class="icon-user"></i>
                                                        </div>
                                                        <select class="form-control" name="receiver">
                                                            <option value="">== اختر الجهه ==</option>
                                                            <option value="location">الموقع</option>
                                                            <option value="office">المكتب</option>
                                                            <option value="owner">المالك</option>
                                                            <option value="contractor">المقاول</option>

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
                                                <th>التصنيف</th>
                                                <th>التاريخ</th>
                                                <th>النوع</th>
                                                <th>الجهه</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>م</th>
                                                <th>التصنيف</th>
                                                <th>التاريخ</th>
                                                <th>النوع</th>
                                                <th>الجهه</th>
                                                <th>Action</th>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                            <?php $arrangement = 1; ?>
                                            @foreach($project->letters as $letter)
                                                <tr>
                                                    <td>{{$arrangement}}</td>
                                                    <td>{{Lang::get('terms.'.$letter->sort)}}</td>
                                                    <td>{{date('d-m-Y',strtotime($letter->date))}}</td>
                                                    <td>{{$letter->specific}}</td>
                                                    <td>{{$letter->receiver}}</td>
                                                    <td style=" padding: 0px; text-align: left;">
                                                        @if(in_array(auth()->user()->permission->contractorPermissions->letters,[4,5,6,7]) || auth()->guard('web')->check())
                                                            <a href="{{asset('documents/projects/letters/'.$letter->document)}}" style="display: inline;">
                                                                <i class="fas fa-download"></i>
                                                            </a>
                                                        @endif
                                                        @if(in_array(auth()->user()->permission->contractorPermissions->letters,[2,6,7]) || auth()->guard('web')->check())
                                                            <a href="{{route('letters.edit',['id'=>$letter->id])}}" id="project-item-edit" style="display: inline;">
                                                                <i class="far fa-edit"></i>
                                                            </a>
                                                        @endif
                                                        @if(in_array(auth()->user()->permission->contractorPermissions->letters,[1,5,7]) || auth()->guard('web')->check())
                                                            <form method="post" action="{{route('letters.destroy',['id'=>$letter->id])}}" style="display: inline;">
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
