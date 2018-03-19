@extends('Admin.Layouts.Master')
@section('container')
    <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark arabic-fonts">عرض المشاريع</h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12 top-directory">
            <ul class="list-inline arabic-fonts">
                <li class="active"><span>المشروعات</span></li>
                <li><a href="#"><span><i class="fa fa-chevron-right" aria-hidden="true"></i> اعدادات</span></a></li>
                <li><a href="{{route('admin.welcome')}}">
                        <i class="fa fa-chevron-right" aria-hidden="true"></i> صفحة البداية</a></li>
            </ul>
        </div>
        <!-- /Breadcrumb -->
    </div>
    @if(session('success'))
        <div class="alert alert-warning alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

            <p>{{session('success')}}</p>
        </div>
    @endif
    @if(session('fail'))
        <div class="alert alert-warning alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

            <p>{{session('fail')}}</p>
        </div>
    @endif
    <div class="row arabic-fonts">
        <div class="col-lg-12 col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h1 class="panel-title txt-dark h1">{{$project->name}}</h1>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <p class="text-muted">بدايه المشروع :<code>{{date('d-m-Y',strtotime($project->created_at))}}</code>

                        <p>وصف للمشروع وفيه كلام كلام كلام كلام كلام كلام كلام كلامكلام كلام كلام كلامكلام كلام كلام كلامكلام كلام كلام كلامكلام كلام كلام كلامكلام كلام كلام كلامكلام كلام كلام كلامكلام كلام كلام كلامكلام كلام كلام كلامكلام كلام كلام كلامكلام كلام كلام كلامكلام كلام كلام كلامكلام
                            كلام
                            كلام كلامكلام كلام كلام كلامكلام كلام كلام كلامكلام كلام كلام كلام </p>

                        <div class="tab-struct custom-tab-1 mt-40">
                            <ul role="tablist" class="nav nav-tabs" id="myTabs_7">
                                <li class="active" role="presentation"><a aria-expanded="true" data-toggle="tab" role="tab" id="project_data" href="#project_data_show">معلومات المشروع</a></li>
                                <li role="presentation" class=""><a data-toggle="tab" id="" role="tab" href="#time_table_tab" aria-expanded="false">الجدول الذمني</a></li>
                                <li role="presentation" class=""><a data-toggle="tab" id="" role="tab" href="#Submetal_tab" aria-expanded="false">الاعتمادات</a></li>
                                <li role="presentation" class=""><a data-toggle="tab" id="" role="tab" href="#Reqest_tab" aria-expanded="false">الريكويستات</a></li>
                                <li role="presentation" class=""><a data-toggle="tab" id="" role="tab" href="#letters_tab" aria-expanded="false">الخطابات</a></li>
                                <li role="presentation" class=""><a data-toggle="tab" id="" role="tab" href="#quntty_tab" aria-expanded="false">الكميات</a></li>
                                <li class="dropdown" role="presentation"><a data-toggle="dropdown" class="dropdown-toggle" id="myTabDrop_7" href="#" aria-expanded="false">مكتبه المشروع <span class="caret"></span></a>
                                    <ul id="myTabDrop_7_contents" class="dropdown-menu">

                                        <li class=""><a data-toggle="tab" id="dropdown_13_tab" role="tab" href="#medialaibary_tab" aria-expanded="false"> الملفات والفديوهات والصور </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown" role="presentation"><a data-toggle="dropdown" class="dropdown-toggle" id="myTabDrop_7" href="#" aria-expanded="false">المخططات<span class="caret"></span></a>
                                    <ul id="myTabDrop_7_contents" class="dropdown-menu">
                                        <li class=""><a data-toggle="tab" id="dropdown_13_tab" role="tab" href="#planning_tab" aria-expanded="false">مخطططات التندر</a></li>
                                        <li class=""><a data-toggle="tab" id="dropdown_14_tab" role="tab" href="#shopdrowing_tab" aria-expanded="false">مخططات رسومات الورشه</a></li>
                                        <li class=""><a data-toggle="tab" id="dropdown_14_tab" role="tab" href="#as_bulit_tab" aria-expanded="false">مخططات اسبيلت</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown" role="presentation"><a data-toggle="dropdown" class="dropdown-toggle" id="" href="#" aria-expanded="false"> اعمال المشروع<span class="caret"></span></a>
                                    <ul id="myTabDrop_7_contents" class="dropdown-menu">
                                        <li class=""><a data-toggle="tab" id="dropdown_13_tab" role="tab" href="#Labor_tab" aria-expanded="false">العماله - والمعدات</a></li>
                                        <li class=""><a data-toggle="tab" id="dropdown_14_tab" role="tab" href="#papers_entry_tab" aria-expanded="false">الاوراق</a></li>
                                        <li class=""><a data-toggle="tab" id="dropdown_14_tab" role="tab" href="#change_order_entry_tab" aria-expanded="false">اوامر التغيير</a></li>
                                        <li class=""><a data-toggle="tab" id="dropdown_14_tab" role="tab" href="#medialaibary_tab" aria-expanded="false">مكتبه المشروع </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown" role="presentation"><a data-toggle="dropdown" class="dropdown-toggle" id="myTabDrop_7" href="#" aria-expanded="false">التقارير<span class="caret"></span></a>
                                    <ul id="myTabDrop_7_contents" class="dropdown-menu">
                                        <li class=""><a data-toggle="tab" id="dropdown_13_tab" role="tab" href="#dropdown_13" aria-expanded="true">اسبوعي</a></li>
                                        <li class=""><a data-toggle="tab" id="dropdown_14_tab" role="tab" href="#dropdown_14" aria-expanded="false">شهري</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent_7">
                                {{-- Prject Information --}}
                                @include('Admin.Layouts.projectInformations')
                                {{-- Prject Information --}}
                                {{-- Timetable --}}
                                <div id="time_table_tab" class="tab-pane fade" role="tabpanel">
                                    <p>الجدول الزمني لاحقا في اصدار اخر</p>

                                </div>
                                {{-- Timetable --}}
                                {{-- Submittals  --}}
                                @include('Admin.Layouts.projectSubmittals')
                                {{-- Submittals  --}}
                                {{-- Requests --}}
                                @include('Admin.Layouts.projectRequests')
                                {{-- Requests --}}
                                {{-- Letters --}}
                                <div id="letters_tab" class="tab-pane fade" role="tabpanel">
                                    <div class="row col-md-12">
                                        <p>الخطابات لاحقا في اصدار اخر</p>
                                    </div>
                                </div>
                                {{-- Letters --}}
                                {{-- Qunatities --}}
                                <div id="quntty_tab" class="tab-pane fade" role="tabpanel">
                                    <p>الكميات لاحقا في اصدار اخر</p>
                                </div>
                                {{-- Qunatities --}}
                                {{-- Tender Drawing --}}
                                @include('Admin.Layouts.projectTenderDrawing')
                                {{-- Tender Drawing --}}
                                {{-- Shop Drawings --}}
                                @include('Admin.Layouts.projectShopDrawings')
                                {{-- Shop Drawings --}}
                                {{-- Cordnation Drawings --}}
                                @include('Admin.Layouts.projectCordnationDrawings')
                                {{-- Cordnation Drawings --}}
                                        <!-- لعماله - والمعدات -->
                                <div id="Labor_tab" class="tab-pane fade" role="tabpanel">
                                    <p>لعماله - والمعدات</p>
                                </div>
                                <!--/ لعماله - والمعدات -->
                                <!-- الاوراق -->
                                <div id="papers_entry_tab" class="tab-pane fade" role="tabpanel">
                                    <p>الاوراق</p>
                                </div>
                                <!--/ الاوراق -->

                                {{-- Change Orders --}}
                                @include('Admin.Layouts.changeOrders')
                                {{-- Change Orders --}}
                                        <!-- الفديوهات والصور -->
                                <div id="medialaibary_tab" class="tab-pane fade" role="tabpanel">
                                    <!-- Row -->

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel panel-default card-view pa-0">
                                                <div class="panel-wrapper collapse in">
                                                    <div class="panel-body pa-0">
                                                        <div class="">
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
                                                                                                <form action="" method="">
                                                                                                    <div class="form-group">
                                                                                                        <label class="control-label mb-10" for="">نوع المرفق</label>

                                                                                                        <div class="input-group">
                                                                                                            <div class="input-group-addon" style="background-color:#BDBDBD;"><i class="icon-user"></i></div>
                                                                                                            <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                                                                                <option value="">== اختر واحدا==</option>
                                                                                                                <option value="Category 1">انشائي</option>
                                                                                                                <option value="Category 2">معماري</option>
                                                                                                                <option value="Category 2">ميكانيكا</option>
                                                                                                                <option value="Category 2">كهرباء</option>
                                                                                                                <option value="Category 2">موقع عام</option>
                                                                                                                <option value="Category 2">اخري</option>
                                                                                                                <option value="">شهاده ضمان</option>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <label for="message-text" class="control-label mb-10">التاريخ</label>
                                                                                                        <input type="date" class="form-control" id="description">
                                                                                                        </textarea>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <label for="message-text" class="control-label mb-10">الوصف</label>
                                                                                                        <input type="text" class="form-control" id="description">
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <div class="fileupload btn btn-danger btn-rounded btn-anim btn-block"><i class="fa fa-upload"></i><span class="btn-text">Upload</span>
                                                                                                            <input class="upload" type="file" multiple>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <div class="modal-footer">
                                                                                                            <button type="button" class="btn btn-success btn-rounded btn-block">حفظ</button>
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
                                                                        <div class="pl-15 mb-30"><a href="#" class="file-control active">الكل</a> <a href="#" class="file-control">الملفات</a> <a href="#" class="file-control">الفديوهات</a> <a href="#" class="file-control">الصور</a></div>

                                                                        <h6 class="pl-15 mb-10">بحث</h6>
                                                                        <ul class="tag-list pl-15 pr-15">
                                                                            <form action="" method="">
                                                                                <div class="form-group">
                                                                                    <label class="control-label mb-10" for="">التصنيف</label>

                                                                                    <div class="input-group">
                                                                                        <div class="input-group-addon" style="background-color:#BDBDBD;"><i class="icon-user"></i></div>
                                                                                        <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                                                            <option value="Category 2">الكل</option>
                                                                                            <option value="Category 2">ملفات</option>
                                                                                            <option value="Category 1">صور</option>
                                                                                            <option value="Category 2">فديوهات</option>
                                                                                            <option value="Category 2">اخري</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="control-label mb-10" for="">نوع </label>

                                                                                    <div class="input-group">
                                                                                        <div class="input-group-addon" style="background-color:#BDBDBD;"><i class="icon-user"></i></div>
                                                                                        <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                                                            <option value="">اختر واحد</option>
                                                                                            <option value="Category 2">مساحي</option>
                                                                                            <option value="Category 1">انشائي</option>
                                                                                            <option value="Category 2">معماري</option>
                                                                                            <option value="Category 2">ميكانيكا</option>
                                                                                            <option value="Category 2">كهرباء</option>
                                                                                            <option value="Category 2">موقع عام</option>
                                                                                            <option value="Category 2">اخري</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="message-text" class="control-label mb-10">من التاريخ</label>
                                                                                    <input type="date" class="form-control" id="description">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="message-text" class="control-label mb-10">الي التاريخ</label>
                                                                                    <input type="date" class="form-control" id="description">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <div class="modal-footer">

                                                                                        <button type="button" class="btn btn-success btn-rounded btn-block">بحث<i class="fa fa-search"></i></button>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </ul>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9 col-md-8 file-sec pt-20">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="row">
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <div class="file"><a href="#">
                                                                                    <div class="icon"><i class="zmdi zmdi-file-text"></i></div>
                                                                                    <div class="file-name"> Document_2016.doc <br>
                                                                                        <span>Added: Jan 11, 2016</span></div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <div class="file"><a href="#">
                                                                                    <div class="image" style="background-image:url(dist/img/gallery/mock1.jpg)"></div>
                                                                                    <div class="file-name"> Italy street.jpg <br>
                                                                                        <span>Added: Jan 6, 2016</span></div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <div class="file"><a href="#">
                                                                                    <div class="image" style="background-image:url(dist/img/gallery/mock2.jpg)"></div>
                                                                                    <div class="file-name"> My feel.png <br>
                                                                                        <span>Added: Jan 7, 2016</span></div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <div class="file"><a href="#">
                                                                                    <div class="icon"><i class="zmdi zmdi-collection-music"></i></div>
                                                                                    <div class="file-name"> Michal Jackson.mp3 <br>
                                                                                        <span>Added: Jan 22, 2016</span></div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <div class="file"><a href="#">
                                                                                    <div class="image" style="background-image:url(dist/img/gallery/mock3.jpg)"></div>
                                                                                    <div class="file-name"> Document_2016.doc <br>
                                                                                        <span>Added: Fab 11, 2016</span></div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <div class="file"><a href="#">
                                                                                    <div class="icon"><i class="img-responsive zmdi zmdi-collection-video"></i></div>
                                                                                    <div class="file-name"> Monica's birthday.mpg4 <br>
                                                                                        <span>Added: Fab 18, 2016</span></div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box"><a href="#">
                                                                                <div class="file">
                                                                                    <div class="icon"><i class="zmdi zmdi-chart"></i></div>
                                                                                    <div class="file-name"> Annual report 2016.xls <br>
                                                                                        <span>Added: Fab 22, 2016</span></div>
                                                                                </div>
                                                                            </a></div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <div class="file"><a href="#">
                                                                                    <div class="icon"><i class="zmdi zmdi-file-text"></i></div>
                                                                                    <div class="file-name"> Document_2016.doc <br>
                                                                                        <span>Added: Jan 11, 2016</span></div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <div class="file"><a href="#">
                                                                                    <div class="image" style="background-image:url(dist/img/gallery/equal-size/mock6.jpg)"></div>
                                                                                    <div class="file-name"> Italy street.jpg <br>
                                                                                        <span>Added: Jan 6, 2016</span></div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <div class="file"><a href="#">
                                                                                    <div class="image" style="background-image:url(dist/img/gallery/equal-size/mock3.jpg)"></div>
                                                                                    <div class="file-name"> My feel.png <br>
                                                                                        <span>Added: Jan 7, 2016</span></div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <div class="file"><a href="#">
                                                                                    <div class="icon"><i class="zmdi zmdi-collection-music"></i></div>
                                                                                    <div class="file-name"> Michal Jackson.mp3 <br>
                                                                                        <span>Added: Jan 22, 2016</span></div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <div class="file"><a href="#">
                                                                                    <div class="image" style="background-image:url(dist/img/gallery/equal-size/mock2.jpg)"></div>
                                                                                    <div class="file-name"> Document_2016.doc <br>
                                                                                        <span>Added: Fab 11, 2016</span></div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <div class="file"><a href="#">
                                                                                    <div class="icon"><i class="img-responsive zmdi zmdi-collection-video"></i></div>
                                                                                    <div class="file-name"> Monica's birthday.mpg4 <br>
                                                                                        <span>Added: Fab 18, 2016</span></div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box"><a href="#">
                                                                                <div class="file">
                                                                                    <div class="icon"><i class="zmdi zmdi-chart"></i></div>
                                                                                    <div class="file-name"> Annual report 2016.xls <br>
                                                                                        <span>Added: Fab 22, 2016</span></div>
                                                                                </div>
                                                                            </a></div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <div class="file"><a href="#">
                                                                                    <div class="icon"><i class="zmdi zmdi-file-text"></i></div>
                                                                                    <div class="file-name"> Document_2016.doc <br>
                                                                                        <span>Added: Jan 11, 2016</span></div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <div class="file"><a href="#">
                                                                                    <div class="image" style="background-image:url(dist/img/gallery/mock6.jpg)"></div>
                                                                                    <div class="file-name"> Italy street.jpg <br>
                                                                                        <span>Added: Jan 6, 2016</span></div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <div class="file"><a href="#">
                                                                                    <div class="image" style="background-image:url(dist/img/gallery/equal-size/mock5.jpg)"></div>
                                                                                    <div class="file-name"> My feel.png <br>
                                                                                        <span>Added: Jan 7, 2016</span></div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <div class="file"><a href="#">
                                                                                    <div class="icon"><i class="zmdi zmdi-collection-music"></i></div>
                                                                                    <div class="file-name"> Michal Jackson.mp3 <br>
                                                                                        <span>Added: Jan 22, 2016</span></div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <div class="file"><a href="#">
                                                                                    <div class="image" style="background-image:url(dist/img/gallery/equal-size/mock4.jpg)"></div>
                                                                                    <div class="file-name"> Document_2016.doc <br>
                                                                                        <span>Added: Fab 11, 2016</span></div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <div class="file"><a href="#">
                                                                                    <div class="icon"><i class="img-responsive zmdi zmdi-collection-video"></i></div>
                                                                                    <div class="file-name"> Monica's birthday.mpg4 <br>
                                                                                        <span>Added: Fab 18, 2016</span></div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box"><a href="#">
                                                                                <div class="file">
                                                                                    <div class="icon"><i class="zmdi zmdi-chart"></i></div>
                                                                                    <div class="file-name"> Annual report 2016.xls <br>
                                                                                        <span>Added: Fab 22, 2016</span></div>
                                                                                </div>
                                                                            </a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- /Row -->

                                </div>
                                <!--/ الفديوهات والصور -->
                                <!-- فاضي -->
                                <div id="empty" class="tab-pane fade" role="tabpanel">
                                    <p>فاضي</p>
                                </div>
                                <!--/ فاضي -->
                                <!-- فاضي -->
                                <div id="empty" class="tab-pane fade" role="tabpanel">
                                    <p>فاضي</p>
                                </div>
                                <!--/ فاضي -->
                                <!-- فاضي -->
                                <div id="empty" class="tab-pane fade" role="tabpanel">
                                    <p>فاضي</p>
                                </div>
                                <!--/ فاضي -->
                                <!-- فاضي -->
                                <div id="empty" class="tab-pane fade" role="tabpanel">
                                    <p>فاضي</p>
                                </div>
                                <!--/ فاضي -->
                                <div id="dropdown_13" class="tab-pane fade " role="tabpanel">
                                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
                                </div>
                                <div id="dropdown_14" class="tab-pane fade" role="tabpanel">
                                    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection