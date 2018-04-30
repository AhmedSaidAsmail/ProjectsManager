<div id="tests_tab" class="tab-pane fade" role="tabpanel">
    @if(in_array(auth()->user()->permission->contractorPermissions->tests,[4,5,6,7]) || auth()->guard('web')->check())
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    @if(in_array(auth()->user()->permission->contractorPermissions->tests,[7]) || auth()->guard('web')->check())
                        <div class="modal fade" id="add_Test_Paper_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h5 class="modal-title" id="">انشاء اختبار جديد</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="panel panel-default card-view">
                                                    <div class="panel-wrapper collapse in">
                                                        <div class="panel-body">

                                                            <div class="tab-struct custom-tab-2 mt-10">
                                                                <ul role="tablist" class="nav nav-tabs" id="myTabs_15">
                                                                    <li class="active" role="presentation"><a aria-expanded="true" data-toggle="tab" role="tab" id="home_tab_15" href="#Reciving_request_tab">الاختبار</a></li>
                                                                </ul>
                                                                <div class="tab-content" id="myTabContent_15">
                                                                    <div id="Reciving_request_tab" class="tab-pane fade active in" role="tabpanel">
                                                                        <form action="{{route('tests.store')}}" method="post" enctype="multipart/form-data">
                                                                            <input type="hidden" name="project_id" value="{{$project->id}}">
                                                                            {{csrf_field()}}
                                                                            <div class="form-group">
                                                                                <label class="control-label mb-10">تصنيف الاختبار</label>

                                                                                <div class="input-group">
                                                                                    <div class="input-group-addon" style="background-color:#BDBDBD;"><i class="icon-user"></i></div>
                                                                                    <select class="form-control" name="sort" id="test_sort">
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

                                                                            <!-- /Row -->
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label mb-10">اختر الاختبار</label>

                                                                                        <div class="input-group">
                                                                                            <div class="input-group-addon" style="background-color:#BDBDBD;"><i class="icon-user"></i></div>
                                                                                            <select class="form-control" name="project_test_sort_id" id="related_sort" data-ajax--url="{{route('test-sorts.getRelated')}}">
                                                                                                <option value="">== اختر نوع الاختبار ==</option>

                                                                                            </select>
                                                                                        </div>
                                                                                        <span class="help-block"> فضلا اختر نوع الاختبار طبقا لتصنيف اختيارك </span></div>
                                                                                </div>
                                                                                <!--/span-->
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label mb-10">تاريخ الاختبار</label>

                                                                                        <div class="input-group">
                                                                                            <div class="input-group-addon" style="background-color:#BDBDBD;"><i class="icon-user"></i></div>
                                                                                            <input type="date" name="date" class="form-control" id="">
                                                                                        </div>
                                                                                        <span class="help-block"> فضلا اختر تاريخ الاختبار </span></div>
                                                                                </div>
                                                                                <!--/span-->
                                                                            </div>
                                                                            <!-- /Row -->
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label mb-10">مكان الاختبار</label>

                                                                                        <div class="radio-list">
                                                                                            <div class="radio-inline pl-0"> <span class="radio radio-info">
                                          <input name="location" id="testplaceradio1" value="location" type="radio">
                                          <label for="testplaceradio1">موقع</label>
                                          </span></div>
                                                                                            <div class="radio-inline"> <span class="radio radio-info">
                                          <input name="location" id="testplaceradio2" value="lap" type="radio">
                                          <label for="testplaceradio2">مختبر</label>
                                          </span></div>
                                                                                        </div>
                                                                                        <span class="help-block"> فضلا اختر مكان الاختبار </span></div>
                                                                                </div>
                                                                                <!--/span-->
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label mb-10">نتيجه الاختبار</label>

                                                                                        <div class="radio-list">
                                                                                            <div class="radio-inline pl-0"> <span class="radio radio-info">
                                          <input name="result" id="result1" value="1" type="radio">
                                          <label for="result1">ناجح</label>
                                          </span></div>
                                                                                            <div class="radio-inline"> <span class="radio radio-info">
                                          <input name="result" id="result2" value="0" type="radio">
                                          <label for="result2">فاشل</label>
                                          </span></div>
                                                                                        </div>
                                                                                        <span class="help-block"> فضلا اختر نتيجه الاختبار </span></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label for="message-text" class="control-label mb-10">الوصف</label>
                                                                                        <input type="text" class="form-control" name="description">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div class="fileupload btn btn-danger btn-rounded btn-anim btn-block"><i class="fa fa-upload"></i><span class="btn-text">Upload</span>
                                                                                    <input class="upload" name="document" type="file" multiple>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div class="modal-footer">
                                                                                    <button class="btn btn-success btn-rounded btn-block">حفظ</button>
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
                            <button class="btn btn-success btn-rounded btn-block btn-anim" data-toggle="modal" data-target="#add_Test_Paper_model" data-whatever="@">
                                <i class="fa fa-pencil"></i><span class="btn-text">اضافة اختبار جديد</span>
                            </button>
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
                                        <form action="{{route('tests.index')}}" method="get" id="ajax-data" data-display="#project-tests">
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
                                                <label class="control-label mb-10" for="">النتيجة</label>

                                                <div class="input-group">
                                                    <div class="input-group-addon" style="background-color:#BDBDBD;"><i class="icon-user"></i></div>
                                                    <select name="result" class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                        <option value="">اختار النتيجة</option>
                                                        <option value="1">ناجح</option>
                                                        <option value="0">فاشل</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-10" for="">النتيجة</label>

                                                <div class="input-group">
                                                    <div class="input-group-addon" style="background-color:#BDBDBD;"><i class="icon-user"></i></div>
                                                    <select name="location" class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                        <option value="">اختار المكان</option>
                                                        <option value="location">موقع</option>
                                                        <option value="lap">مختبر</option>
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
                                <div class="table-responsive" id="project-tests">
                                    <table id="pro_list" class="table table-hover display  pb-30">
                                        <thead>
                                        <tr>
                                            <th>م</th>
                                            <th>التصنيف</th>
                                            <th>التاريخ</th>
                                            <th>النتيجه</th>
                                            <th>الوصف</th>
                                            <th>المكان</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>م</th>
                                            <th>التصنيف</th>
                                            <th>التاريخ</th>
                                            <th>النتيجه</th>
                                            <th>الوصف</th>
                                            <th>المكان</th>
                                            <th>Action</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php $testsArrangement = 1; ?>
                                        @foreach($project->tests as $test)
                                            <tr>
                                                <td>{{$testsArrangement}}</td>
                                                <td>{{Lang::get('terms.'.$test->sort)}}</td>
                                                <td>{{date('d-m-Y',strtotime($test->date))}}</td>
                                                <td><i class="fa fa-circle fa-lg {!! $test->result?'text-success':'text-danger' !!}"></i></td>
                                                <td>{{$test->description}}</td>
                                                <td>{{Lang::get('terms.'.$test->location)}}</td>
                                                <td>
                                                    @if(in_array(auth()->user()->permission->contractorPermissions->tests,[4,5,6,7]) || auth()->guard('web')->check())
                                                        <a href="{{asset('documents/projects/tests/'.$test->document)}}">
                                                            <i class="fas fa-download"></i>
                                                        </a>
                                                    @endif
                                                    @if(in_array(auth()->user()->permission->contractorPermissions->tests,[2,6,7]) || auth()->guard('web')->check())
                                                        <a href="{{route('tests.edit',['id'=>$test->id])}}" id="project-item-edit" style="display: inline;">
                                                            <i class="far fa-edit"></i>
                                                        </a>
                                                    @endif
                                                    @if(in_array(auth()->user()->permission->contractorPermissions->tests,[1,5,7]) || auth()->guard('web')->check())
                                                        <form method="post" action="{{route('tests.destroy',['id'=>$test->id])}}" style="display: inline;">
                                                            {{csrf_field()}}
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <button style=" border: 0; padding: 0; background-color: transparent;"><i class="far fa-trash-alt"></i></button>
                                                        </form>
                                                    @endif
                                                </td>
                                            </tr>
                                            <?php $testsArrangement++; ?>
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