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

    <div class="row arabic-fonts">
        <div class="col-lg-12 col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h1 class="panel-title txt-dark h1">مشروع كليه البنات </h1>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <p class="text-muted">بدايه المشروع :<code>18-05-2018 </code>

                        <p>وصف للمشروع وفيه كلام كلام كلام كلام كلام كلام كلام كلامكلام كلام كلام كلامكلام كلام
                            كلام كلامكلام كلام كلام كلامكلام كلام كلام كلامكلام كلام كلام كلامكلام كلام كلام
                            كلامكلام كلام كلام كلامكلام كلام كلام كلامكلام كلام كلام كلامكلام كلام كلام كلامكلام
                            كلام كلام كلامكلام كلام كلام كلامكلام كلام كلام كلامكلام كلام كلام كلامكلام كلام
                            كلام كلام </p>

                        <div class="tab-struct custom-tab-1 mt-40">
                            <ul role="tablist" class="nav nav-tabs" id="myTabs_7">
                                <li class="active" role="presentation">
                                    <a aria-expanded="true" data-toggle="tab" role="tab" id="project_data" href="#project_data_show">
                                        معلومات المشروع
                                    </a>
                                </li>
                                <li role="presentation" class="">
                                    <a data-toggle="tab" id="" role="tab" href="#time_table_tab" aria-expanded="false">
                                        الجدول الذمني
                                    </a>
                                </li>
                                <li role="presentation" class="">
                                    <a data-toggle="tab" id="" role="tab" href="#Submetal_tab" aria-expanded="false">
                                        الاعتمادات
                                    </a>
                                </li>
                                <li role="presentation" class="">
                                    <a data-toggle="tab" id="" role="tab" href="#Reqest_tab" aria-expanded="false">
                                        الريكويستات
                                    </a>
                                </li>
                                <li role="presentation" class="">
                                    <a data-toggle="tab" id="" role="tab" href="#letters_tab" aria-expanded="false">
                                        الخطابات
                                    </a>
                                </li>
                                <li role="presentation" class="">
                                    <a data-toggle="tab" id="" role="tab" href="#quntty_tab" aria-expanded="false">
                                        الكميات
                                    </a>
                                </li>
                                <li class="dropdown" role="presentation">
                                    <a data-toggle="dropdown" class="dropdown-toggle" id="myTabDrop_7" href="#" aria-expanded="false">
                                        مكتبه المشروع<span class="caret"></span>
                                    </a>
                                    <ul id="myTabDrop_7_contents" class="dropdown-menu">

                                        <li class="">
                                            <a data-toggle="tab" id="dropdown_13_tab" role="tab" href="#medialaibary_tab" aria-expanded="false">
                                                الملفات والفديوهات والصور
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown" role="presentation">
                                    <a data-toggle="dropdown" class="dropdown-toggle" id="myTabDrop_7" href="#" aria-expanded="false">
                                        المخططات<span class="caret"></span></a>
                                    <ul id="myTabDrop_7_contents" class="dropdown-menu">
                                        <li class="">
                                            <a data-toggle="tab" id="dropdown_13_tab" role="tab" href="#planning_tab" aria-expanded="false">
                                                مخطططات التندر
                                            </a>
                                        </li>
                                        <li class="">
                                            <a data-toggle="tab" id="dropdown_14_tab" role="tab" href="#shopdrowing_tab" aria-expanded="false">
                                                مخططات رسومات الورشه
                                            </a>
                                        </li>
                                        <li class="">
                                            <a data-toggle="tab" id="dropdown_14_tab" role="tab" href="#as_bulit_tab" aria-expanded="false">
                                                مخططات اسبيلت
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown" role="presentation">
                                    <a data-toggle="dropdown" class="dropdown-toggle" id="" href="#" aria-expanded="false">
                                        اعمال المشروع<span class="caret"></span>
                                    </a>
                                    <ul id="myTabDrop_7_contents" class="dropdown-menu">
                                        <li class="">
                                            <a data-toggle="tab" id="dropdown_13_tab" role="tab" href="#Labor_tab" aria-expanded="false">
                                                العماله - والمعدات
                                            </a>
                                        </li>
                                        <li class="">
                                            <a data-toggle="tab" id="dropdown_14_tab" role="tab" href="#papers_entry_tab" aria-expanded="false">
                                                الاوراق
                                            </a>
                                        </li>
                                        <li class="">
                                            <a data-toggle="tab" id="dropdown_14_tab" role="tab" href="#change_order_entry_tab" aria-expanded="false">
                                                اوامر التغيير
                                            </a>
                                        </li>
                                        <li class="">
                                            <a data-toggle="tab" id="dropdown_14_tab" role="tab" href="#medialaibary_tab" aria-expanded="false">
                                                مكتبه المشروع
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown" role="presentation">
                                    <a data-toggle="dropdown" class="dropdown-toggle" id="myTabDrop_7" href="#" aria-expanded="false">
                                        التقارير<span class="caret"></span>
                                    </a>
                                    <ul id="myTabDrop_7_contents" class="dropdown-menu">
                                        <li class="">
                                            <a data-toggle="tab" id="dropdown_13_tab" role="tab" href="#dropdown_13" aria-expanded="true">
                                                اسبوعي
                                            </a>
                                        </li>
                                        <li class="">
                                            <a data-toggle="tab" id="dropdown_14_tab" role="tab" href="#dropdown_14" aria-expanded="false">
                                                شهري
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent_7">
                                <div id="project_data_show" class="tab-pane fade active in" role="tabpanel">
                                    <div class="row col-md-12">
                                        <!-- Project data view -->
                                        <!-- /.row -->
                                        <!--- collabs -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel-wrapper collapse in">
                                                    <div class="panel-body">
                                                        <div class="panel-group accordion-struct"
                                                             id="accordion_1" role="tablist"
                                                             aria-multiselectable="true">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading activestate"
                                                                     role="tab" id="heading_4">
                                                                    <a class="collapsed" role="button"
                                                                       data-toggle="collapse"
                                                                       data-parent="#accordion_1"
                                                                       href="#collapse_0" aria-expanded="true">بيانات
                                                                        اساسيه</a>
                                                                </div>
                                                                <div id="collapse_0"
                                                                     class="panel-collapse collapse in"
                                                                     role="tabpanel">
                                                                    <div class="panel-body pa-15">
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                    <label class="control-label mb-10"
                                                                                           for=""> اسم
                                                                                        المشروع </label>

                                                                                    <div class="input-group">
                                                                                        <div class="input-group-addon  "
                                                                                             style="background-color:#EEEEEE;">
                                                                                            <i class="icon-user"></i>
                                                                                        </div>
                                                                                        <input type="text"
                                                                                               style="background-color:#FFFFFF; font-weight:bold;"
                                                                                               class="form-control text-muted"
                                                                                               id=""
                                                                                               value="{{$project->name}}"
                                                                                               readonly>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                    <label class="control-label mb-10"
                                                                                           for=""> اسم
                                                                                        المالك </label>

                                                                                    <div class="input-group">
                                                                                        <div class="input-group-addon  "
                                                                                             style="background-color:#EEEEEE;">
                                                                                            <i class="icon-user"></i>
                                                                                        </div>
                                                                                        <input type="text"
                                                                                               style="background-color:#FFFFFF; font-weight:bold;"
                                                                                               class="form-control text-muted"
                                                                                               id=""
                                                                                               value="مالك"
                                                                                               readonly>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                    <label class="control-label mb-10"
                                                                                           for=""> اسم
                                                                                        المقاول </label>

                                                                                    <div class="input-group">
                                                                                        <div class="input-group-addon  "
                                                                                             style="background-color:#EEEEEE;">
                                                                                            <i class="icon-user"></i>
                                                                                        </div>
                                                                                        <input type="text"
                                                                                               style="background-color:#FFFFFF; font-weight:bold;"
                                                                                               class="form-control text-muted"
                                                                                               id=""
                                                                                               value="مقاول"
                                                                                               readonly>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /.row -->
                                                                        <!-- row -->
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                    <label class="control-label mb-10"
                                                                                           for=""> قيمه العقد
                                                                                        الاصليه </label>

                                                                                    <div class="input-group">
                                                                                        <div class="input-group-addon  "
                                                                                             style="background-color:#EEEEEE;">
                                                                                            <i class="icon-user"></i>
                                                                                        </div>
                                                                                        <input type="text"
                                                                                               style="background-color:#FFFFFF; font-weight:bold;"
                                                                                               class="form-control text-muted"
                                                                                               id=""
                                                                                               value="قيمه العقد"
                                                                                               readonly>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                    <label class="control-label mb-10"
                                                                                           for="">مده العقد
                                                                                        الاصليه </label>

                                                                                    <div class="input-group">
                                                                                        <div class="input-group-addon  "
                                                                                             style="background-color:#EEEEEE;">
                                                                                            <i class="icon-user"></i>
                                                                                        </div>
                                                                                        <input type="text"
                                                                                               style="background-color:#FFFFFF; font-weight:bold;"
                                                                                               class="form-control text-muted"
                                                                                               id=""
                                                                                               value="مده العقد"
                                                                                               readonly>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                    <label class="control-label mb-10"
                                                                                           for="">
                                                                                        المدينه </label>

                                                                                    <div class="input-group">
                                                                                        <div class="input-group-addon  "
                                                                                             style="background-color:#EEEEEE;">
                                                                                            <i class="icon-user"></i>
                                                                                        </div>
                                                                                        <input type="text"
                                                                                               style="background-color:#FFFFFF; font-weight:bold;"
                                                                                               class="form-control text-muted"
                                                                                               id=""
                                                                                               value="المدينه"
                                                                                               readonly>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /.row -->
                                                                        <!-- row -->
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                    <label class="control-label mb-10"
                                                                                           for=""> قيمه العقد
                                                                                        الحاليه </label>

                                                                                    <div class="input-group">
                                                                                        <div class="input-group-addon  "
                                                                                             style="background-color:#EEEEEE;">
                                                                                            <i class="icon-user"></i>
                                                                                        </div>
                                                                                        <input type="text"
                                                                                               style="background-color:#FFFFFF; font-weight:bold;"
                                                                                               class="form-control text-muted"
                                                                                               id=""
                                                                                               value="قيمه العقد الحاليه"
                                                                                               readonly>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                    <label class="control-label mb-10"
                                                                                           for="">مده العقد
                                                                                        الحاليه </label>

                                                                                    <div class="input-group">
                                                                                        <div class="input-group-addon  "
                                                                                             style="background-color:#EEEEEE;">
                                                                                            <i class="icon-user"></i>
                                                                                        </div>
                                                                                        <input type="text"
                                                                                               style="background-color:#FFFFFF; font-weight:bold;"
                                                                                               class="form-control text-muted"
                                                                                               id=""
                                                                                               value="مده العقد الحاليه "
                                                                                               readonly>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <!-- model test -->
                                                                                <div class="panel-wrapper collapse in">
                                                                                    <!-- sample modal content -->
                                                                                    <div class="modal fade meum"
                                                                                         tabindex="-1"
                                                                                         role="dialog"
                                                                                         aria-labelledby="myLargeModalLabel"
                                                                                         aria-hidden="true"
                                                                                         style="display: none;">
                                                                                        <div class="modal-dialog">
                                                                                            <div class="modal-content">
                                                                                                <div class="modal-header">
                                                                                                    <button type="button"
                                                                                                            class="close"
                                                                                                            data-dismiss="modal"
                                                                                                            aria-hidden="true">
                                                                                                        ×
                                                                                                    </button>
                                                                                                    <h5 class="modal-title"
                                                                                                        id="">
                                                                                                        بيانات
                                                                                                        مدير
                                                                                                        المشروع</h5>
                                                                                                </div>
                                                                                                <div class="modal-body">
                                                                                                    <div class="form-group">
                                                                                                        <label for="recipient-name"
                                                                                                               class="control-label mb-10">الاسم</label>
                                                                                                        <input type="text"
                                                                                                               class="form-control"
                                                                                                               id=""
                                                                                                               value="احمد سعيد اسماعيل"
                                                                                                               readonly>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <label for="recipient-name"
                                                                                                               class="control-label mb-10">الايميل</label>
                                                                                                        <input type="text"
                                                                                                               class="form-control"
                                                                                                               id=""
                                                                                                               value="osamasabry@msn.com"
                                                                                                               readonly>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <label for="message-text"
                                                                                                               class="control-label mb-10">تليفون
                                                                                                            1</label>
                                                                                                        <input type="tel"
                                                                                                               class="form-control"
                                                                                                               id=""
                                                                                                               value="0504545"
                                                                                                               readonly>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <label for="message-text"
                                                                                                               class="control-label mb-10">تليفون
                                                                                                            2</label>
                                                                                                        <input type="tel"
                                                                                                               class="form-control"
                                                                                                               id=""
                                                                                                               value="0548995526"
                                                                                                               readonly>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="modal-footer">
                                                                                                    <button type="button"
                                                                                                            class="btn btn-danger btn-block"
                                                                                                            data-dismiss="modal">
                                                                                                        اغلاق
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- /.modal-content -->
                                                                                        </div>
                                                                                        <!-- /.modal-dialog -->
                                                                                    </div>
                                                                                    <!-- /.modal -->
                                                                                </div>
                                                                                <!-- model test -->
                                                                                <div class="form-group">
                                                                                    <label class="control-label mb-10"
                                                                                           for=""> مدير
                                                                                        المشروع </label>

                                                                                    <div class="input-group">
                                                                                        <div class="input-group-addon"
                                                                                             style="background-color:#EEEEEE;">
                                                                                            <i class="icon-user"></i>
                                                                                        </div>
                                                                                        <input data-toggle="modal"
                                                                                               data-target=".meum"
                                                                                               type="text"
                                                                                               style="background-color:#FFFFFF; font-weight:bold;"
                                                                                               class="form-control text-muted"
                                                                                               id=""
                                                                                               value="مدير المشروع"
                                                                                               readonly>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading" role="tab"
                                                                     id="heading_4">
                                                                    <a class="collapsed" role="button"
                                                                       data-toggle="collapse"
                                                                       data-parent="#accordion_1"
                                                                       href="#collapse_4" aria-expanded="false">بيانات
                                                                        اخري</a>
                                                                </div>
                                                                <div id="collapse_4"
                                                                     class="panel-collapse collapse"
                                                                     role="tabpanel">
                                                                    <div class="panel-body pa-15">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label class="control-label mb-10"
                                                                                           for=""> عدد
                                                                                        المباني</label>

                                                                                    <div class="input-group">
                                                                                        <div class="input-group-addon  "
                                                                                             style="background-color:#EEEEEE;">
                                                                                            <i class="icon-user"></i>
                                                                                        </div>
                                                                                        <input type="text"
                                                                                               style="background-color:#FFFFFF; font-weight:bold;"
                                                                                               class="form-control text-muted"
                                                                                               id=""
                                                                                               value=" عدد المباني"
                                                                                               readonly>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label class="control-label mb-10"
                                                                                           for="">مراحل
                                                                                        المشروع </label>

                                                                                    <div class="input-group">
                                                                                        <div class="input-group-addon  "
                                                                                             style="background-color:#EEEEEE;">
                                                                                            <i class="icon-user"></i>
                                                                                        </div>
                                                                                        <input type="text"
                                                                                               style="background-color:#FFFFFF; font-weight:bold;"
                                                                                               class="form-control text-muted"
                                                                                               id=""
                                                                                               value="مراحل المشروع"
                                                                                               readonly>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="panel panel-default">
                                                                <div class="panel-heading " role="tab"
                                                                     id="heading_1">
                                                                    <a role="button" data-toggle="collapse"
                                                                       data-parent="#accordion_1"
                                                                       href="#collapse_1" aria-expanded="false">مهندسي
                                                                        الاستشاري</a>
                                                                </div>
                                                                <div id="collapse_1"
                                                                     class="panel-collapse collapse"
                                                                     role="tabpanel">
                                                                    <div class="panel-body pa-15">
                                                                        <div class="row">
                                                                            <div class="col-md-2">
                                                                                <div class="form-group">
                                                                                    <label class="control-label mb-10"
                                                                                           for=""> مهندس
                                                                                        الكهرباء </label>

                                                                                    <div class="input-group">
                                                                                        <div class="input-group-addon  "
                                                                                             style="background-color:#EEEEEE;">
                                                                                            <i class="icon-user"></i>
                                                                                        </div>
                                                                                        <input type="text"
                                                                                               style="background-color:#FFFFFF; font-weight:bold;"
                                                                                               class="form-control text-muted"
                                                                                               id=""
                                                                                               value="مهندس الكهرباء"
                                                                                               readonly>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <div class="form-group">
                                                                                    <label class="control-label mb-10"
                                                                                           for="">مهندس
                                                                                        الميكانيكا </label>

                                                                                    <div class="input-group">
                                                                                        <div class="input-group-addon  "
                                                                                             style="background-color:#EEEEEE;">
                                                                                            <i class="icon-user"></i>
                                                                                        </div>
                                                                                        <input type="text"
                                                                                               style="background-color:#FFFFFF; font-weight:bold;"
                                                                                               class="form-control text-muted"
                                                                                               id=""
                                                                                               value="مهندس الميكانيكا "
                                                                                               readonly>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <div class="form-group">
                                                                                    <label class="control-label mb-10"
                                                                                           for=""> مهندس
                                                                                        معماري </label>

                                                                                    <div class="input-group">
                                                                                        <div class="input-group-addon  "
                                                                                             style="background-color:#EEEEEE;">
                                                                                            <i class="icon-user"></i>
                                                                                        </div>
                                                                                        <input type="text"
                                                                                               style="background-color:#FFFFFF; font-weight:bold;"
                                                                                               class="form-control text-muted"
                                                                                               id=""
                                                                                               value="مهندس معماري"
                                                                                               readonly>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <div class="form-group">
                                                                                    <label class="control-label mb-10"
                                                                                           for=""> مهندس
                                                                                        انشائي </label>

                                                                                    <div class="input-group">
                                                                                        <div class="input-group-addon  "
                                                                                             style="background-color:#EEEEEE;">
                                                                                            <i class="icon-user"></i>
                                                                                        </div>
                                                                                        <input type="text"
                                                                                               style="background-color:#FFFFFF; font-weight:bold;"
                                                                                               class="form-control text-muted"
                                                                                               id=""
                                                                                               value="مهندس انشائي"
                                                                                               readonly>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <div class="form-group">
                                                                                    <label class="control-label mb-10"
                                                                                           for=""> مهندس
                                                                                        كميات </label>

                                                                                    <div class="input-group">
                                                                                        <div class="input-group-addon  "
                                                                                             style="background-color:#EEEEEE;">
                                                                                            <i class="icon-user"></i>
                                                                                        </div>
                                                                                        <input type="text"
                                                                                               style="background-color:#FFFFFF; font-weight:bold;"
                                                                                               class="form-control text-muted"
                                                                                               id=""
                                                                                               value="مهندس كميات"
                                                                                               readonly>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <div class="form-group">
                                                                                    <label class="control-label mb-10"
                                                                                           for=""> مراقب
                                                                                        الشروع </label>

                                                                                    <div class="input-group">
                                                                                        <div class="input-group-addon  "
                                                                                             style="background-color:#EEEEEE;">
                                                                                            <i class="icon-user"></i>
                                                                                        </div>
                                                                                        <input type="text"
                                                                                               style="background-color:#FFFFFF; font-weight:bold;"
                                                                                               class="form-control text-muted"
                                                                                               id=""
                                                                                               value="مراقب الشروع"
                                                                                               readonly>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /.row -->

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading" role="tab"
                                                                     id="heading_2">
                                                                    <a class="collapsed" role="button"
                                                                       data-toggle="collapse"
                                                                       data-parent="#accordion_1"
                                                                       href="#collapse_2" aria-expanded="false">مهندسين
                                                                        المقاول </a>
                                                                </div>
                                                                <div id="collapse_2"
                                                                     class="panel-collapse collapse"
                                                                     role="tabpanel">
                                                                    <div class="panel-body pa-15">
                                                                        <div class="row">
                                                                            <div class="col-md-2">
                                                                                <div class="form-group">
                                                                                    <label class="control-label mb-10"
                                                                                           for=""> مهندس
                                                                                        الكهرباء </label>

                                                                                    <div class="input-group">
                                                                                        <div class="input-group-addon  "
                                                                                             style="background-color:#EEEEEE;">
                                                                                            <i class="icon-user"></i>
                                                                                        </div>
                                                                                        <input type="text"
                                                                                               style="background-color:#FFFFFF; font-weight:bold;"
                                                                                               class="form-control text-muted"
                                                                                               id=""
                                                                                               value="مهندس الكهرباء"
                                                                                               readonly>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <div class="form-group">
                                                                                    <label class="control-label mb-10"
                                                                                           for="">مهندس
                                                                                        الميكانيكا </label>

                                                                                    <div class="input-group">
                                                                                        <div class="input-group-addon  "
                                                                                             style="background-color:#EEEEEE;">
                                                                                            <i class="icon-user"></i>
                                                                                        </div>
                                                                                        <input type="text"
                                                                                               style="background-color:#FFFFFF; font-weight:bold;"
                                                                                               class="form-control text-muted"
                                                                                               id=""
                                                                                               value="مهندس الميكانيكا "
                                                                                               readonly>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <div class="form-group">
                                                                                    <label class="control-label mb-10"
                                                                                           for=""> مهندس
                                                                                        معماري </label>

                                                                                    <div class="input-group">
                                                                                        <div class="input-group-addon  "
                                                                                             style="background-color:#EEEEEE;">
                                                                                            <i class="icon-user"></i>
                                                                                        </div>
                                                                                        <input type="text"
                                                                                               style="background-color:#FFFFFF; font-weight:bold;"
                                                                                               class="form-control text-muted"
                                                                                               id=""
                                                                                               value="مهندس معماري"
                                                                                               readonly>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <div class="form-group">
                                                                                    <label class="control-label mb-10"
                                                                                           for=""> مهندس
                                                                                        انشائي </label>

                                                                                    <div class="input-group">
                                                                                        <div class="input-group-addon  "
                                                                                             style="background-color:#EEEEEE;">
                                                                                            <i class="icon-user"></i>
                                                                                        </div>
                                                                                        <input type="text"
                                                                                               style="background-color:#FFFFFF; font-weight:bold;"
                                                                                               class="form-control text-muted"
                                                                                               id=""
                                                                                               value="مهندس انشائي"
                                                                                               readonly>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                    <label class="control-label mb-10"
                                                                                           for=""> مدير
                                                                                        المشروع </label>

                                                                                    <div class="input-group">
                                                                                        <div class="input-group-addon  "
                                                                                             style="background-color:#EEEEEE;">
                                                                                            <i class="icon-user"></i>
                                                                                        </div>
                                                                                        <input type="text"
                                                                                               style="background-color:#FFFFFF; font-weight:bold;"
                                                                                               class="form-control text-muted"
                                                                                               id=""
                                                                                               value="مدير المشروع"
                                                                                               readonly>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading" role="tab"
                                                                     id="heading_3">
                                                                    <a class="collapsed" role="button"
                                                                       data-toggle="collapse"
                                                                       data-parent="#accordion_1"
                                                                       href="#collapse_3" aria-expanded="false">منسق
                                                                        المالك</a>
                                                                </div>
                                                                <div id="collapse_3"
                                                                     class="panel-collapse collapse"
                                                                     role="tabpanel">
                                                                    <div class="panel-body pa-15">

                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label class="control-label mb-10"
                                                                                           for=""> منسق
                                                                                        1 </label>

                                                                                    <div class="input-group">
                                                                                        <div class="input-group-addon  "
                                                                                             style="background-color:#EEEEEE;">
                                                                                            <i class="icon-user"></i>
                                                                                        </div>
                                                                                        <input type="text"
                                                                                               style="background-color:#FFFFFF; font-weight:bold;"
                                                                                               class="form-control text-muted"
                                                                                               id=""
                                                                                               value="منسق 1 "
                                                                                               readonly>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label class="control-label mb-10"
                                                                                           for="">منسق
                                                                                        2 </label>

                                                                                    <div class="input-group">
                                                                                        <div class="input-group-addon  "
                                                                                             style="background-color:#EEEEEE;">
                                                                                            <i class="icon-user"></i>
                                                                                        </div>
                                                                                        <input type="text"
                                                                                               style="background-color:#FFFFFF; font-weight:bold;"
                                                                                               class="form-control text-muted"
                                                                                               id=""
                                                                                               value="منسق 2  "
                                                                                               readonly>
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


                                        <!-- collabs ---><!-- /.Priject Data view  _file_media_view.php -->
                                    </div>
                                </div>
                                <!-- الجدل الزمني -->
                                <div id="time_table_tab" class="tab-pane fade" role="tabpanel">
                                    <p>الجدول الزمني لاحقا في اصدار اخر</p>

                                </div>
                                <!--/ الجدل الزمني -->
                                <!-- الصبميتال -->
                                <div id="Submetal_tab" class="tab-pane fade" role="tabpanel">
                                    <!-- Row -->

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="panel panel-default card-view">
                                                <div class="modal fade" id="add_new_submetal" tabindex="-1"
                                                     role="dialog" aria-labelledby="exampleModalLabel1">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <h5 class="modal-title" id="">انشاء صبميتال
                                                                    جديد</h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="" method="">
                                                                    <div class="form-group">
                                                                        <label class="control-label mb-10"
                                                                               for="">نوع الصبميتال</label>

                                                                        <div class="input-group">
                                                                            <div class="input-group-addon"
                                                                                 style="background-color:#BDBDBD;">
                                                                                <i class="icon-user"></i></div>
                                                                            <select class="form-control"
                                                                                    data-placeholder="اختر واحده"
                                                                                    tabindex="1">
                                                                                <option value="">== اختر واحدا
                                                                                    ==
                                                                                </option>
                                                                                <option value="Category 1">
                                                                                    اعتماد عينه
                                                                                </option>
                                                                                <option value="Category 2">
                                                                                    اعتماد مخططات الورشه
                                                                                </option>
                                                                                <option value="Category 1">
                                                                                    اعتماد موردين
                                                                                </option>
                                                                                <option value="Category 1">
                                                                                    اعتماد مقاول باطن
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="recipient-name"
                                                                               class="control-label mb-10">رقم
                                                                            الصبميتال</label>

                                                                        <div class="input-group">
                                                                            <div class="input-group-addon"
                                                                                 style="background-color:#BDBDBD;">
                                                                                <i class="icon-user"></i></div>
                                                                            <input type="text"
                                                                                   class="form-control"
                                                                                   id="recipient-name1">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="recipient-name"
                                                                               class="control-label mb-10"> رقم
                                                                            البندالمرتبط</label>

                                                                        <div class="input-group">
                                                                            <div class="input-group-addon"
                                                                                 style="background-color:#BDBDBD;">
                                                                                <i class="icon-user"></i></div>
                                                                            <input type="text"
                                                                                   class="form-control"
                                                                                   id="recipient-name1">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="message-text"
                                                                               class="control-label mb-10">التاريخ</label>

                                                                        <div class="input-group">
                                                                            <div class="input-group-addon"
                                                                                 style="background-color:#BDBDBD;">
                                                                                <i class="icon-user"></i></div>
                                                                            <input type="date"
                                                                                   class="form-control"
                                                                                   id="description">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="message-text"
                                                                               class="control-label mb-10">الوصف</label>

                                                                        <div class="input-group">
                                                                            <div class="input-group-addon"
                                                                                 style="background-color:#BDBDBD;">
                                                                                <i class="icon-user"></i></div>
                                                                            <input type="text"
                                                                                   class="form-control"
                                                                                   id="description">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="fileupload btn btn-danger btn-rounded btn-anim btn-block">
                                                                            <i class="fa fa-upload"></i><span
                                                                                    class="btn-text">Upload</span>
                                                                            <input class="upload" type="file"
                                                                                   multiple>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <div class="form-group">
                                                                            <button type="button"
                                                                                    class="btn btn-success btn-rounded btn-block">
                                                                                حفظ
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-success btn-rounded btn-block btn-anim"
                                                        data-toggle="modal" data-target="#add_new_submetal"
                                                        data-whatever="@"><i class="fa fa-pencil"></i><span
                                                            class="btn-text">ارفاق صبميتال جديد</span></button>
                                                <div class="pa-10">
                                                    <button class="btn btn-primary btn-rounded btn-block btn-anim">
                                                        <i class="fa fa-search"></i><span
                                                                class="btn-text">بحث</span></button>
                                                </div>
                                                <div class="panel-wrapper collapse in">
                                                    <div class="panel-body">
                                                        <div class="table-wrap">
                                                            <div class="table-responsive">
                                                                <table id="pro_list"
                                                                       class="table table-hover display  pb-30">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>م</th>
                                                                        <th>الرقم</th>
                                                                        <th>البند</th>
                                                                        <th>التاريخ</th>
                                                                        <th>النوع</th>
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
                                                                        <th>الوصف</th>
                                                                        <th>الملف</th>
                                                                    </tr>
                                                                    </tfoot>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>24</td>
                                                                        <td>11-01-225</td>
                                                                        <td>24-08-2018</td>
                                                                        <td>اعتماد عينه</td>
                                                                        <td>اعتماد عينات رخام</td>
                                                                        <td><a href="_singlepro.php?pronum=3">
                                                                                <button class="btn btn-info"></button>
                                                                            </a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>63</td>
                                                                        <td>12-04-55</td>
                                                                        <td>2011/07/25</td>
                                                                        <td>مخططات ورشه</td>
                                                                        <td>اعتماد عينات سيراميك</td>
                                                                        <td><a href="_singlepro.php?pronum=3">
                                                                                <button class="btn btn-info"></button>
                                                                            </a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td>24</td>
                                                                        <td>11-01-225</td>
                                                                        <td>24-08-2018</td>
                                                                        <td>اعتماد عينه</td>
                                                                        <td>اعتماد مخططات ارضيات</td>
                                                                        <td><a href="_singlepro.php?pronum=3">
                                                                                <button class="btn btn-info"></button>
                                                                            </a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>24</td>
                                                                        <td>11-01-225</td>
                                                                        <td>24-08-2018</td>
                                                                        <td>اعتماد عينه</td>
                                                                        <td>اعتماد عينات رخام</td>
                                                                        <td><a href="_singlepro.php?pronum=3">
                                                                                <button class="btn btn-info"></button>
                                                                            </a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>63</td>
                                                                        <td>12-04-55</td>
                                                                        <td>2011/07/25</td>
                                                                        <td>مخططات ورشه</td>
                                                                        <td>اعتماد عينات سيراميك</td>
                                                                        <td><a href="_singlepro.php?pronum=3">
                                                                                <button class="btn btn-info"></button>
                                                                            </a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td>24</td>
                                                                        <td>11-01-225</td>
                                                                        <td>24-08-2018</td>
                                                                        <td>اعتماد عينه</td>
                                                                        <td>اعتماد مخططات ارضيات</td>
                                                                        <td><a href="_singlepro.php?pronum=3">
                                                                                <button class="btn btn-info"></button>
                                                                            </a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>24</td>
                                                                        <td>11-01-225</td>
                                                                        <td>24-08-2018</td>
                                                                        <td>اعتماد عينه</td>
                                                                        <td>اعتماد عينات رخام</td>
                                                                        <td><a href="_singlepro.php?pronum=3">
                                                                                <button class="btn btn-info"></button>
                                                                            </a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>63</td>
                                                                        <td>12-04-55</td>
                                                                        <td>2011/07/25</td>
                                                                        <td>مخططات ورشه</td>
                                                                        <td>اعتماد عينات سيراميك</td>
                                                                        <td><a href="_singlepro.php?pronum=3">
                                                                                <button class="btn btn-info"></button>
                                                                            </a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td>24</td>
                                                                        <td>11-01-225</td>
                                                                        <td>24-08-2018</td>
                                                                        <td>اعتماد عينه</td>
                                                                        <td>اعتماد مخططات ارضيات</td>
                                                                        <td><a href="_singlepro.php?pronum=3">
                                                                                <button class="btn btn-info"></button>
                                                                            </a></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Row -->
                                </div>
                                <!--/ الصبميتال -->
                                <!-- الريكويستات -->
                                <div id="Reqest_tab" class="tab-pane fade" role="tabpanel">
                                    <!-- Row -->

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="panel panel-default card-view">
                                                <div class="modal fade" id="add_new_Test_Paper_model"
                                                     tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalLabel1">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <h5 class="modal-title" id="">انشاء ريكويست
                                                                    جديد</h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-sm-12">
                                                                        <div class="panel panel-default card-view">
                                                                            <div class="panel-wrapper collapse in">
                                                                                <div class="panel-body">

                                                                                    <div class="tab-struct custom-tab-2 mt-10">
                                                                                        <ul role="tablist"
                                                                                            class="nav nav-tabs"
                                                                                            id="myTabs_15">
                                                                                            <li class="active"
                                                                                                role="presentation">
                                                                                                <a aria-expanded="true"
                                                                                                   data-toggle="tab"
                                                                                                   role="tab"
                                                                                                   id="home_tab_15"
                                                                                                   href="#Reciving_request_tab">ريكويست</a>
                                                                                            </li>
                                                                                            <li role="presentation"
                                                                                                class=""><a
                                                                                                        data-toggle="tab"
                                                                                                        id="profile_tab_15"
                                                                                                        role="tab"
                                                                                                        href="#Test_request_tab"
                                                                                                        aria-expanded="false">اختبار</a>
                                                                                            </li>
                                                                                            <li class="dropdown"
                                                                                                role="presentation"></li>
                                                                                        </ul>
                                                                                        <div class="tab-content"
                                                                                             id="myTabContent_15">
                                                                                            <div id="Reciving_request_tab"
                                                                                                 class="tab-pane fade active in"
                                                                                                 role="tabpanel">
                                                                                                <form action=""
                                                                                                      method="">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12">
                                                                                                            <div class="form-group">
                                                                                                                <label class="control-label mb-10">تصنيف
                                                                                                                    الريكويست</label>

                                                                                                                <div class="input-group">
                                                                                                                    <div class="input-group-addon"
                                                                                                                         style="background-color:#BDBDBD;">
                                                                                                                        <i class="icon-user"></i>
                                                                                                                    </div>
                                                                                                                    <select class="form-control">
                                                                                                                        <option value="">
                                                                                                                            ==
                                                                                                                            اختر
                                                                                                                            تصنيف
                                                                                                                            ==
                                                                                                                        </option>
                                                                                                                        <option value="">
                                                                                                                            انشائي
                                                                                                                        </option>
                                                                                                                        <option value="">
                                                                                                                            معماري
                                                                                                                        </option>
                                                                                                                        <option value="">
                                                                                                                            كهرباء
                                                                                                                        </option>
                                                                                                                        <option value="">
                                                                                                                            ميكانيكا
                                                                                                                        </option>
                                                                                                                        <option value="">
                                                                                                                            موقع
                                                                                                                            عام
                                                                                                                        </option>
                                                                                                                        <option value="">
                                                                                                                            اخري
                                                                                                                        </option>
                                                                                                                    </select>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-6">
                                                                                                            <div class="form-group">
                                                                                                                <label for="recipient-name"
                                                                                                                       class="control-label mb-10">رقم
                                                                                                                    الريكويست</label>
                                                                                                                <input type="text"
                                                                                                                       class="form-control"
                                                                                                                       id="recipient-name1">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-md-6">
                                                                                                            <div class="form-group">
                                                                                                                <label for="recipient-name"
                                                                                                                       class="control-label mb-10">
                                                                                                                    رقم
                                                                                                                    البندالمرتبط</label>
                                                                                                                <input type="text"
                                                                                                                       class="form-control"
                                                                                                                       id=""
                                                                                                                       placeholder="رقم المبني + رقم البند">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-6">
                                                                                                            <div class="form-group">
                                                                                                                <label for="message-text"
                                                                                                                       class="control-label mb-10">التاريخ</label>
                                                                                                                <input type="date"
                                                                                                                       class="form-control"
                                                                                                                       id="">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-md-6">
                                                                                                            <div class="form-group">
                                                                                                                <label class="control-label mb-10">الكود </label>

                                                                                                                <div class="radio-list">
                                                                                                                    <div class="col-md-2">
                                                                                                                        <div class="radio-inline pl-0"> <span
                                                                                                                                    class="radio radio-info">
                                          <input name="testresultselection" id="testresultselection1" value=""
                                                 type="radio">
                                          <label for="testresultselection1">ِA</label>
                                          </span></div>
                                                                                                                    </div>
                                                                                                                    <div class="col-md-2">
                                                                                                                        <div class="radio-inline"> <span
                                                                                                                                    class="radio radio-info">
                                          <input name="testresultselection" id="testresultselection2" value=""
                                                 type="radio">
                                          <label for="testresultselection2">B</label>
                                          </span></div>
                                                                                                                    </div>
                                                                                                                    <div class="col-md-2">
                                                                                                                        <div class="radio-inline"> <span
                                                                                                                                    class="radio radio-info">
                                          <input name="testresultselection" id="testresultselection3" value=""
                                                 type="radio">
                                          <label for="testresultselection3">C</label>
                                          </span></div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <span class="help-block"> فضلا اختر نتيجه الريكويست </span>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <label for="message-text"
                                                                                                               class="control-label mb-10">الوصف</label>
                                                                                                        <input type="text"
                                                                                                               class="form-control"
                                                                                                               id="">
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <div class="fileupload btn btn-danger btn-rounded btn-anim btn-block">
                                                                                                            <i class="fa fa-upload"></i><span
                                                                                                                    class="btn-text">Upload</span>
                                                                                                            <input class="upload"
                                                                                                                   type="file"
                                                                                                                   multiple>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <div class="modal-footer">
                                                                                                            <button type="button"
                                                                                                                    class="btn btn-success btn-rounded btn-block">
                                                                                                                حفظ
                                                                                                            </button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </form>
                                                                                            </div>
                                                                                            <div id="Test_request_tab"
                                                                                                 class="tab-pane fade"
                                                                                                 role="tabpanel">
                                                                                                <form action=""
                                                                                                      method="">
                                                                                                    <div class="form-group">
                                                                                                        <label class="control-label mb-10">تصنيف
                                                                                                            الاختبار</label>

                                                                                                        <div class="input-group">
                                                                                                            <div class="input-group-addon"
                                                                                                                 style="background-color:#BDBDBD;">
                                                                                                                <i class="icon-user"></i>
                                                                                                            </div>
                                                                                                            <select class="form-control">
                                                                                                                <option value="">
                                                                                                                    ==
                                                                                                                    اختر
                                                                                                                    تصنيف
                                                                                                                    الاختبار
                                                                                                                    ==
                                                                                                                </option>
                                                                                                                <option value="">
                                                                                                                    انشائي
                                                                                                                </option>
                                                                                                                <option value="">
                                                                                                                    معماري
                                                                                                                </option>
                                                                                                                <option value="">
                                                                                                                    كهرباء
                                                                                                                </option>
                                                                                                                <option value="">
                                                                                                                    ميكانيكا
                                                                                                                </option>
                                                                                                                <option value="">
                                                                                                                    موقع
                                                                                                                    عام
                                                                                                                </option>
                                                                                                                <option value="">
                                                                                                                    اخري
                                                                                                                </option>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <!-- /Row -->
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-6">
                                                                                                            <div class="form-group">
                                                                                                                <label class="control-label mb-10">اختر
                                                                                                                    الاختبار</label>

                                                                                                                <div class="input-group">
                                                                                                                    <div class="input-group-addon"
                                                                                                                         style="background-color:#BDBDBD;">
                                                                                                                        <i class="icon-user"></i>
                                                                                                                    </div>
                                                                                                                    <select class="form-control">
                                                                                                                        <option value="">
                                                                                                                            ==
                                                                                                                            اختر
                                                                                                                            نوع
                                                                                                                            الاختبار
                                                                                                                            ==
                                                                                                                        </option>
                                                                                                                        <option value="">
                                                                                                                            دك
                                                                                                                            تربه
                                                                                                                        </option>
                                                                                                                        <option value="">
                                                                                                                            اختبار
                                                                                                                            العزل
                                                                                                                        </option>
                                                                                                                        <option value="">
                                                                                                                            اختبار
                                                                                                                            عينات
                                                                                                                        </option>
                                                                                                                    </select>
                                                                                                                </div>
                                                                                                                <span class="help-block"> فضلا اختر نوع الاختبار طبقا لتصنيف اختيارك </span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <!--/span-->
                                                                                                        <div class="col-md-6">
                                                                                                            <div class="form-group">
                                                                                                                <label class="control-label mb-10">تاريخ
                                                                                                                    الاختبار</label>

                                                                                                                <div class="input-group">
                                                                                                                    <div class="input-group-addon"
                                                                                                                         style="background-color:#BDBDBD;">
                                                                                                                        <i class="icon-user"></i>
                                                                                                                    </div>
                                                                                                                    <input class="form-control"
                                                                                                                           placeholder="dd/mm/yyyy"
                                                                                                                           type="date">
                                                                                                                </div>
                                                                                                                <span class="help-block"> فضلا اختر تاريخ الاختبار </span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <!--/span-->
                                                                                                    </div>
                                                                                                    <!-- /Row -->
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-6">
                                                                                                            <div class="form-group">
                                                                                                                <label class="control-label mb-10">مكان
                                                                                                                    الاختبار</label>

                                                                                                                <div class="radio-list">
                                                                                                                    <div class="radio-inline pl-0"> <span
                                                                                                                                class="radio radio-info">
                                          <input name="TestPlaceselection" id="testplaceradio1" value="" type="radio">
                                          <label for="testplaceradio1">موقع</label>
                                          </span></div>
                                                                                                                    <div class="radio-inline"> <span
                                                                                                                                class="radio radio-info">
                                          <input name="TestPlaceselection" id="testplaceradio2" value="" type="radio">
                                          <label for="testplaceradio2">مختبر</label>
                                          </span></div>
                                                                                                                </div>
                                                                                                                <span class="help-block"> فضلا اختر مكان الاختبار </span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <!--/span-->
                                                                                                        <div class="col-md-6">
                                                                                                            <div class="form-group">
                                                                                                                <label class="control-label mb-10">نتيجه
                                                                                                                    الاختبار</label>

                                                                                                                <div class="radio-list">
                                                                                                                    <div class="radio-inline pl-0"> <span
                                                                                                                                class="radio radio-info">
                                          <input name="testresultselection" id="testresultselection1" value=""
                                                 type="radio">
                                          <label for="testresultselection1">ناجح</label>
                                          </span></div>
                                                                                                                    <div class="radio-inline"> <span
                                                                                                                                class="radio radio-info">
                                          <input name="testresultselection" id="testresultselection2" value=""
                                                 type="radio">
                                          <label for="testresultselection2">فاشل</label>
                                          </span></div>
                                                                                                                </div>
                                                                                                                <span class="help-block"> فضلا اختر نتيجه الاختبار </span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12">
                                                                                                            <div class="form-group">
                                                                                                                <label for="message-text"
                                                                                                                       class="control-label mb-10">الوصف</label>
                                                                                                                <input type="text"
                                                                                                                       class="form-control"
                                                                                                                       id="description">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <div class="fileupload btn btn-danger btn-rounded btn-anim btn-block">
                                                                                                            <i class="fa fa-upload"></i><span
                                                                                                                    class="btn-text">Upload</span>
                                                                                                            <input class="upload"
                                                                                                                   type="file"
                                                                                                                   multiple>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <div class="modal-footer">
                                                                                                            <button type="button"
                                                                                                                    class="btn btn-success btn-rounded btn-block">
                                                                                                                حفظ
                                                                                                            </button>
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
                                                    <button class="btn btn-success btn-rounded btn-block btn-anim"
                                                            data-toggle="modal"
                                                            data-target="#add_new_Test_Paper_model"
                                                            data-whatever="@"><i class="fa fa-pencil"></i><span
                                                                class="btn-text">ارفاق ريكويست جديد</span>
                                                    </button>
                                                </div>
                                                <div class="pa-10">
                                                    <button class="btn btn-primary btn-rounded btn-block btn-anim">
                                                        <i class="fa fa-search"></i><span
                                                                class="btn-text">بحث</span></button>
                                                </div>
                                            </div>
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body">
                                                    <div class="table-wrap">
                                                        <div class="table-responsive">
                                                            <table id="pro_list"
                                                                   class="table table-hover display  pb-30">
                                                                <thead>
                                                                <tr>
                                                                    <th>م</th>
                                                                    <th>النوع</th>
                                                                    <th>التصنيف</th>
                                                                    <th>التاريخ</th>
                                                                    <th>المكان</th>
                                                                    <th>النتيجه</th>
                                                                    <th>الوصف</th>
                                                                    <th>الملف</th>
                                                                </tr>
                                                                </thead>
                                                                <tfoot>
                                                                <tr>
                                                                    <th>م</th>
                                                                    <th>النوع</th>
                                                                    <th>التصنيف</th>
                                                                    <th>التاريخ</th>
                                                                    <th>المكان</th>
                                                                    <th>النتيجه</th>
                                                                    <th>الوصف</th>
                                                                    <th>الملف</th>
                                                                </tr>
                                                                </tfoot>
                                                                <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>ريكويست</td>
                                                                    <td>انشائي</td>
                                                                    <td>24-08-2018</td>
                                                                    <td></td>
                                                                    <td>كود C</td>
                                                                    <td>اختبار دك التربه قبل الحفر</td>
                                                                    <td><a href="#">
                                                                            <button class="btn btn-info"></button>
                                                                        </a></td>
                                                                </tr>
                                                                <tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>اختبار</td>
                                                                    <td>معماري</td>
                                                                    <td>24-08-2018</td>
                                                                    <td>مختبر</td>
                                                                    <td>ناجح</td>
                                                                    <td>اختبار قساوه خرصانات الاعمده</td>
                                                                    <td><a href="#">
                                                                            <button class="btn btn-info"></button>
                                                                        </a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>انشائي</td>
                                                                    <td>اخبار جس التربه</td>
                                                                    <td>24-08-2018</td>
                                                                    <td>موقع</td>
                                                                    <td>فاشل</td>
                                                                    <td>اختبار دك التربه قبل الحفر</td>
                                                                    <td><a href="#">
                                                                            <button class="btn btn-info"></button>
                                                                        </a></td>
                                                                </tr>
                                                                <tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>معماري</td>
                                                                    <td>اخبار صلابه الخرصانه</td>
                                                                    <td>24-08-2018</td>
                                                                    <td>مختبر</td>
                                                                    <td>ناجح</td>
                                                                    <td>اختبار قساوه خرصانات الاعمده</td>
                                                                    <td><a href="#">
                                                                            <button class="btn btn-info"></button>
                                                                        </a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>انشائي</td>
                                                                    <td>اخبار جس التربه</td>
                                                                    <td>24-08-2018</td>
                                                                    <td>موقع</td>
                                                                    <td>فاشل</td>
                                                                    <td>اختبار دك التربه قبل الحفر</td>
                                                                    <td><a href="#">
                                                                            <button class="btn btn-info"></button>
                                                                        </a></td>
                                                                </tr>
                                                                <tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>معماري</td>
                                                                    <td>اخبار صلابه الخرصانه</td>
                                                                    <td>24-08-2018</td>
                                                                    <td>مختبر</td>
                                                                    <td>ناجح</td>
                                                                    <td>اختبار قساوه خرصانات الاعمده</td>
                                                                    <td><a href="#">
                                                                            <button class="btn btn-info"></button>
                                                                        </a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>انشائي</td>
                                                                    <td>اخبار جس التربه</td>
                                                                    <td>24-08-2018</td>
                                                                    <td>موقع</td>
                                                                    <td>فاشل</td>
                                                                    <td>اختبار دك التربه قبل الحفر</td>
                                                                    <td><a href="#">
                                                                            <button class="btn btn-info"></button>
                                                                        </a></td>
                                                                </tr>
                                                                <tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>معماري</td>
                                                                    <td>اخبار صلابه الخرصانه</td>
                                                                    <td>24-08-2018</td>
                                                                    <td>مختبر</td>
                                                                    <td>ناجح</td>
                                                                    <td>اختبار قساوه خرصانات الاعمده</td>
                                                                    <td><a href="#">
                                                                            <button class="btn btn-info"></button>
                                                                        </a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>انشائي</td>
                                                                    <td>اخبار جس التربه</td>
                                                                    <td>24-08-2018</td>
                                                                    <td>موقع</td>
                                                                    <td>فاشل</td>
                                                                    <td>اختبار دك التربه قبل الحفر</td>
                                                                    <td><a href="#">
                                                                            <button class="btn btn-info"></button>
                                                                        </a></td>
                                                                </tr>
                                                                <tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>معماري</td>
                                                                    <td>اخبار صلابه الخرصانه</td>
                                                                    <td>24-08-2018</td>
                                                                    <td>مختبر</td>
                                                                    <td>ناجح</td>
                                                                    <td>اختبار قساوه خرصانات الاعمده</td>
                                                                    <td><a href="#">
                                                                            <button class="btn btn-info"></button>
                                                                        </a></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- /Row -->
                                </div>
                                <!--/ الريكويستات -->
                                <!-- الخطابات -->
                                <div id="letters_tab" class="tab-pane fade" role="tabpanel">
                                    <div class="row col-md-12">
                                        <p>الخطابات لاحقا في اصدار اخر</p>
                                    </div>
                                </div>
                                <!--/ الخطابات -->
                                <!-- الكميات -->
                                <div id="quntty_tab" class="tab-pane fade" role="tabpanel">
                                    <p>الكميات لاحقا في اصدار اخر</p>
                                </div>
                                <!--/ الكميات -->
                                <!-- المخططات  -->
                                <div id="planning_tab" class="tab-pane fade" role="tabpanel">
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
                                                                                <div class="modal fade"
                                                                                     id="uploud_new_tenderplan_model"
                                                                                     tabindex="-1" role="dialog"
                                                                                     aria-labelledby="exampleModalLabel1">
                                                                                    <div class="modal-dialog"
                                                                                         role="document">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <button type="button"
                                                                                                        class="close"
                                                                                                        data-dismiss="modal"
                                                                                                        aria-label="Close">
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                </button>
                                                                                                <h5 class="modal-title"
                                                                                                    id="">رفع
                                                                                                    مخططات
                                                                                                    التندر</h5>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <form action=""
                                                                                                      method="">
                                                                                                    <div class="form-group">
                                                                                                        <label class="control-label mb-10"
                                                                                                               for="">نوع
                                                                                                            المخطط</label>

                                                                                                        <div class="input-group">
                                                                                                            <div class="input-group-addon"
                                                                                                                 style="background-color:#BDBDBD;">
                                                                                                                <i class="icon-user"></i>
                                                                                                            </div>
                                                                                                            <select class="form-control"
                                                                                                                    data-placeholder="Choose a Category"
                                                                                                                    tabindex="1">
                                                                                                                <option value="">
                                                                                                                    اختر
                                                                                                                    واحد
                                                                                                                </option>
                                                                                                                <option value="Category 2">
                                                                                                                    مساحي
                                                                                                                </option>
                                                                                                                <option value="Category 1">
                                                                                                                    انشائي
                                                                                                                </option>
                                                                                                                <option value="Category 2">
                                                                                                                    معماري
                                                                                                                </option>
                                                                                                                <option value="Category 2">
                                                                                                                    ميكانيكا
                                                                                                                </option>
                                                                                                                <option value="Category 2">
                                                                                                                    كهرباء
                                                                                                                </option>
                                                                                                                <option value="Category 2">
                                                                                                                    موقع
                                                                                                                    عام
                                                                                                                </option>
                                                                                                                <option value="Category 2">
                                                                                                                    اخري
                                                                                                                </option>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <label for="message-text"
                                                                                                               class="control-label mb-10">التاريخ</label>
                                                                                                        <input type="date"
                                                                                                               class="form-control"
                                                                                                               id="description">
                                                                                                        </textarea>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <label for="message-text"
                                                                                                               class="control-label mb-10">الوصف</label>
                                                                                                        <input type="text"
                                                                                                               class="form-control"
                                                                                                               id="description">
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <div class="fileupload btn btn-danger btn-rounded btn-anim btn-block">
                                                                                                            <i class="fa fa-upload"></i><span
                                                                                                                    class="btn-text">Upload</span>
                                                                                                            <input class="upload"
                                                                                                                   type="file"
                                                                                                                   multiple>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <div class="modal-footer">
                                                                                                            <button type="button"
                                                                                                                    class="btn btn-success btn-rounded btn-block">
                                                                                                                حفظ
                                                                                                            </button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </form>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div>
                                                                                    <button class="btn btn-success btn-rounded btn-block btn-anim"
                                                                                            data-toggle="modal"
                                                                                            data-target="#uploud_new_tenderplan_model"
                                                                                            data-whatever="@"><i
                                                                                                class="fa fa-pencil"></i><span
                                                                                                class="btn-text">رفع مخطط تندر جديد</span>
                                                                                    </button>
                                                                                </div>

                                                                            </div>
                                                                            <div class="pl-15 mb-30"><a href="#"
                                                                                                        class="file-control active">المعماري</a>
                                                                                <a href="#"
                                                                                   class="file-control">الانشائي</a>
                                                                                <a href="#"
                                                                                   class="file-control">الميكانيكا</a>
                                                                                <a href="#"
                                                                                   class="file-control">الكهرباء</a>
                                                                                <a href="#"
                                                                                   class="file-control">الموقع
                                                                                    العام</a></div>

                                                                            <!--<h6 class="mb-10 pl-15">Folders</h6>
															<ul class="folder-list mb-30">
																<li class="active"><a href=""><i class="zmdi zmdi-folder"></i> Files</a></li>
																<li><a href=""><i class="zmdi zmdi-folder"></i> Pictures</a></li>
																<li><a href=""><i class="zmdi zmdi-folder"></i> Web pages</a></li>
																<li><a href=""><i class="zmdi zmdi-folder"></i> Illustrations</a></li>
																<li><a href=""><i class="zmdi zmdi-folder"></i> Films</a></li>
																<li><a href=""><i class="zmdi zmdi-folder"></i> Books</a></li>
															</ul> -->
                                                                            <h6 class="pl-15 mb-10">بحث</h6>
                                                                            <ul class="tag-list pl-15 pr-15">
                                                                                <form action="" method="">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label mb-10"
                                                                                               for="">نوع
                                                                                            المخطط</label>

                                                                                        <div class="input-group">
                                                                                            <div class="input-group-addon"
                                                                                                 style="background-color:#BDBDBD;">
                                                                                                <i class="icon-user"></i>
                                                                                            </div>
                                                                                            <select class="form-control"
                                                                                                    data-placeholder="Choose a Category"
                                                                                                    tabindex="1">
                                                                                                <option value="">
                                                                                                    اختر واحد
                                                                                                </option>
                                                                                                <option value="Category 2">
                                                                                                    مساحي
                                                                                                </option>
                                                                                                <option value="Category 1">
                                                                                                    انشائي
                                                                                                </option>
                                                                                                <option value="Category 2">
                                                                                                    معماري
                                                                                                </option>
                                                                                                <option value="Category 2">
                                                                                                    ميكانيكا
                                                                                                </option>
                                                                                                <option value="Category 2">
                                                                                                    كهرباء
                                                                                                </option>
                                                                                                <option value="Category 2">
                                                                                                    موقع عام
                                                                                                </option>
                                                                                                <option value="Category 2">
                                                                                                    اخري
                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="message-text"
                                                                                               class="control-label mb-10">من
                                                                                            التاريخ</label>
                                                                                        <input type="date"
                                                                                               class="form-control"
                                                                                               id="description">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="message-text"
                                                                                               class="control-label mb-10">الي
                                                                                            التاريخ</label>
                                                                                        <input type="date"
                                                                                               class="form-control"
                                                                                               id="description">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <div class="modal-footer">

                                                                                            <button type="button"
                                                                                                    class="btn btn-success btn-rounded btn-block">
                                                                                                بحث<i class="fa fa-search"></i>
                                                                                            </button>
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
                                                                            <div class="table-wrap">
                                                                                <div class="table-responsive">
                                                                                    <table id="pro_list"
                                                                                           class="table table-hover display  pb-30">
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
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>مخططات المساحه
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>مخططات المساحه
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>مخططات المساحه
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>مخططات المساحه
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>مخططات المساحه
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>مخططات المساحه
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>مخططات المساحه
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>مخططات المساحه
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>مخططات المساحه
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>مخططات المساحه
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
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
                                    <!-- /Row -->

                                </div>
                                <!--/ المخططات -->
                                <!-- رسومات الورشه -->
                                <div id="shopdrowing_tab" class="tab-pane fade" role="tabpanel">
                                    <!-- Row -->

                                    <div class="row">
                                        <d-iv class="col-md-12">
                                            <div class="panel panel-default card-view pa-0">
                                                <div class="panel-wrapper collapse in">
                                                    <div class="panel-body pa-0">
                                                        <div class="">
                                                            <div class="col-lg-3 col-md-4 file-directory pa-0">
                                                                <div class="ibox float-e-margins">
                                                                    <div class="ibox-content">
                                                                        <div class="file-manager">
                                                                            <div class="mt-20 mb-20 ml-15 mr-15">
                                                                                <div class="modal fade"
                                                                                     id="uploud_new_sopdrowingplan_model"
                                                                                     tabindex="-1" role="dialog"
                                                                                     aria-labelledby="exampleModalLabel1">
                                                                                    <div class="modal-dialog"
                                                                                         role="document">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <button type="button"
                                                                                                        class="close"
                                                                                                        data-dismiss="modal"
                                                                                                        aria-label="Close">
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                </button>
                                                                                                <h5 class="modal-title"
                                                                                                    id="">رفع
                                                                                                    مخططات
                                                                                                    رسومات
                                                                                                    الورشه</h5>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <form action=""
                                                                                                      method="">
                                                                                                    <div class="form-group">
                                                                                                        <label class="control-label mb-10"
                                                                                                               for="">نوع
                                                                                                            المخطط</label>

                                                                                                        <div class="input-group">
                                                                                                            <div class="input-group-addon"
                                                                                                                 style="background-color:#BDBDBD;">
                                                                                                                <i class="icon-user"></i>
                                                                                                            </div>
                                                                                                            <select class="form-control"
                                                                                                                    data-placeholder="Choose a Category"
                                                                                                                    tabindex="1">
                                                                                                                <option value="">
                                                                                                                    اختر
                                                                                                                    واحد
                                                                                                                </option>
                                                                                                                <option value="Category 2">
                                                                                                                    مساحي
                                                                                                                </option>
                                                                                                                <option value="Category 1">
                                                                                                                    انشائي
                                                                                                                </option>
                                                                                                                <option value="Category 2">
                                                                                                                    معماري
                                                                                                                </option>
                                                                                                                <option value="Category 2">
                                                                                                                    ميكانيكا
                                                                                                                </option>
                                                                                                                <option value="Category 2">
                                                                                                                    كهرباء
                                                                                                                </option>
                                                                                                                <option value="Category 2">
                                                                                                                    موقع
                                                                                                                    عام
                                                                                                                </option>
                                                                                                                <option value="Category 2">
                                                                                                                    اخري
                                                                                                                </option>
                                                                                                            </select>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <label for="message-text"
                                                                                                               class="control-label mb-10">التاريخ</label>
                                                                                                        <input type="date"
                                                                                                               class="form-control"
                                                                                                               id="description">
                                                                                                        </textarea>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <label for="message-text"
                                                                                                               class="control-label mb-10">الوصف</label>
                                                                                                        <input type="text"
                                                                                                               class="form-control"
                                                                                                               id="description">
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <div class="fileupload btn btn-danger btn-rounded btn-anim btn-block">
                                                                                                            <i class="fa fa-upload"></i><span
                                                                                                                    class="btn-text">Upload</span>
                                                                                                            <input class="upload"
                                                                                                                   type="file"
                                                                                                                   multiple>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <div class="modal-footer">
                                                                                                            <button type="button"
                                                                                                                    class="btn btn-success btn-rounded btn-block">
                                                                                                                حفظ
                                                                                                            </button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </form>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div>
                                                                                    <button class="btn btn-success btn-rounded btn-block btn-anim"
                                                                                            data-toggle="modal"
                                                                                            data-target="#uploud_new_sopdrowingplan_model"
                                                                                            data-whatever="@"><i
                                                                                                class="fa fa-pencil"></i><span
                                                                                                class="btn-text">رفع مخطط ورشه جديد</span>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="pl-15 mb-30"><a href="#"
                                                                                                        class="file-control active">المعماري</a>
                                                                                <a href="#"
                                                                                   class="file-control">الانشائي</a>
                                                                                <a href="#"
                                                                                   class="file-control">الميكانيكا</a>
                                                                                <a href="#"
                                                                                   class="file-control">الكهرباء</a>
                                                                                <a href="#"
                                                                                   class="file-control">الموقع
                                                                                    العام</a></div>

                                                                            <!--<h6 class="mb-10 pl-15">Folders</h6>
															<ul class="folder-list mb-30">
																<li class="active"><a href=""><i class="zmdi zmdi-folder"></i> Files</a></li>
																<li><a href=""><i class="zmdi zmdi-folder"></i> Pictures</a></li>
																<li><a href=""><i class="zmdi zmdi-folder"></i> Web pages</a></li>
																<li><a href=""><i class="zmdi zmdi-folder"></i> Illustrations</a></li>
																<li><a href=""><i class="zmdi zmdi-folder"></i> Films</a></li>
																<li><a href=""><i class="zmdi zmdi-folder"></i> Books</a></li>
															</ul> -->
                                                                            <h6 class="pl-15 mb-10">بحث</h6>
                                                                            <ul class="tag-list pl-15 pr-15">
                                                                                <form action="" method="">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label mb-10"
                                                                                               for="">نوع
                                                                                            المخطط</label>

                                                                                        <div class="input-group">
                                                                                            <div class="input-group-addon"
                                                                                                 style="background-color:#BDBDBD;">
                                                                                                <i class="icon-user"></i>
                                                                                            </div>
                                                                                            <select class="form-control"
                                                                                                    data-placeholder="Choose a Category"
                                                                                                    tabindex="1">
                                                                                                <option value="">
                                                                                                    اختر واحد
                                                                                                </option>
                                                                                                <option value="Category 2">
                                                                                                    مساحي
                                                                                                </option>
                                                                                                <option value="Category 1">
                                                                                                    انشائي
                                                                                                </option>
                                                                                                <option value="Category 2">
                                                                                                    معماري
                                                                                                </option>
                                                                                                <option value="Category 2">
                                                                                                    ميكانيكا
                                                                                                </option>
                                                                                                <option value="Category 2">
                                                                                                    كهرباء
                                                                                                </option>
                                                                                                <option value="Category 2">
                                                                                                    موقع عام
                                                                                                </option>
                                                                                                <option value="Category 2">
                                                                                                    اخري
                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="message-text"
                                                                                               class="control-label mb-10">من
                                                                                            التاريخ</label>
                                                                                        <input type="date"
                                                                                               class="form-control"
                                                                                               id="description">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="message-text"
                                                                                               class="control-label mb-10">الي
                                                                                            التاريخ</label>
                                                                                        <input type="date"
                                                                                               class="form-control"
                                                                                               id="description">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <div class="modal-footer">

                                                                                            <button type="button"
                                                                                                    class="btn btn-success btn-rounded btn-block">
                                                                                                بحث<i class="fa fa-search"></i>
                                                                                            </button>
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
                                                                            <div class="table-wrap">
                                                                                <div class="table-responsive">
                                                                                    <table id="pro_list"
                                                                                           class="table table-hover display  pb-30">
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
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>مخططات المساحه
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>مخططات المساحه
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>مخططات المساحه
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>مخططات المساحه
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>مخططات المساحه
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>مخططات المساحه
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>مخططات المساحه
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>مخططات المساحه
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>مخططات المساحه
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>مخططات المساحه
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
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
                                    <!-- /Row -->

                                </div>
                                <!--/ رسومات الورشه -->
                                <!-- رسومات از بيلت -->
                                <div id="as_bulit_tab" class="tab-pane fade" role="tabpanel">
                                    <!-- Row -->

                                    <div class="row">
                                        <d-iv class="col-md-12">
                                            <div class="panel panel-default card-view pa-0">
                                                <div class="panel-wrapper collapse in">
                                                    <div class="panel-body pa-0">
                                                        <div class="">
                                                            <div class="col-lg-3 col-md-4 file-directory pa-10">
                                                                <div class="ibox float-e-margins">
                                                                    <div class="ibox-content">
                                                                        <div class="file-manager">
                                                                            <div class="mt-20 mb-20 ml-15 mr-15">
                                                                                <div class="modal fade"
                                                                                     id="uploud_new_As_bulit_model"
                                                                                     tabindex="-1" role="dialog"
                                                                                     aria-labelledby="exampleModalLabel1">
                                                                                    <div class="modal-dialog"
                                                                                         role="document">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <button type="button"
                                                                                                        class="close"
                                                                                                        data-dismiss="modal"
                                                                                                        aria-label="Close">
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                </button>
                                                                                                <h5 class="modal-title"
                                                                                                    id="">رفع
                                                                                                    مخططات
                                                                                                    اسبيلت</h5>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <form action=""
                                                                                                      method="">
                                                                                                    <div class="form-group">
                                                                                                        <label class="control-label mb-10"
                                                                                                               for="">نوع
                                                                                                            المخطط</label>

                                                                                                        <div class="input-group">
                                                                                                            <div class="input-group-addon"
                                                                                                                 style="background-color:#BDBDBD;">
                                                                                                                <i class="icon-user"></i>
                                                                                                            </div>
                                                                                                            <select class="form-control"
                                                                                                                    data-placeholder="Choose a Category"
                                                                                                                    tabindex="1">
                                                                                                                <option value="">
                                                                                                                    اختر
                                                                                                                    واحد
                                                                                                                </option>
                                                                                                                <option value="Category 2">
                                                                                                                    مساحي
                                                                                                                </option>
                                                                                                                <option value="Category 1">
                                                                                                                    انشائي
                                                                                                                </option>
                                                                                                                <option value="Category 2">
                                                                                                                    معماري
                                                                                                                </option>
                                                                                                                <option value="Category 2">
                                                                                                                    ميكانيكا
                                                                                                                </option>
                                                                                                                <option value="Category 2">
                                                                                                                    كهرباء
                                                                                                                </option>
                                                                                                                <option value="Category 2">
                                                                                                                    موقع
                                                                                                                    عام
                                                                                                                </option>
                                                                                                                <option value="Category 2">
                                                                                                                    اخري
                                                                                                                </option>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <label for="message-text"
                                                                                                               class="control-label mb-10">التاريخ</label>
                                                                                                        <input type="date"
                                                                                                               class="form-control"
                                                                                                               id="description">
                                                                                                        </textarea>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <label for="message-text"
                                                                                                               class="control-label mb-10">الوصف</label>
                                                                                                        <input type="text"
                                                                                                               class="form-control"
                                                                                                               id="description">
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <div class="fileupload btn btn-danger btn-rounded btn-anim btn-block">
                                                                                                            <i class="fa fa-upload"></i><span
                                                                                                                    class="btn-text">Upload</span>
                                                                                                            <input class="upload"
                                                                                                                   type="file">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <div class="modal-footer">
                                                                                                            <button type="button"
                                                                                                                    class="btn btn-success btn-rounded btn-block">
                                                                                                                حفظ
                                                                                                            </button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </form>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div>
                                                                                    <button class="btn btn-success btn-rounded btn-block btn-anim"
                                                                                            data-toggle="modal"
                                                                                            data-target="#uploud_new_As_bulit_model"
                                                                                            data-whatever="@"><i
                                                                                                class="fa fa-pencil"></i><span
                                                                                                class="btn-text">رفع مخطط اسبيلت جديد</span>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="pl-15 mb-30"><a href="#"
                                                                                                        class="file-control active">المعماري</a>
                                                                                <a href="#"
                                                                                   class="file-control">الانشائي</a>
                                                                                <a href="#"
                                                                                   class="file-control">الميكانيكا</a>
                                                                                <a href="#"
                                                                                   class="file-control">الكهرباء</a>
                                                                                <a href="#"
                                                                                   class="file-control">الموقع
                                                                                    العام</a></div>

                                                                            <!--<h6 class="mb-10 pl-15">Folders</h6>
															<ul class="folder-list mb-30">
																<li class="active"><a href=""><i class="zmdi zmdi-folder"></i> Files</a></li>
																<li><a href=""><i class="zmdi zmdi-folder"></i> Pictures</a></li>
																<li><a href=""><i class="zmdi zmdi-folder"></i> Web pages</a></li>
																<li><a href=""><i class="zmdi zmdi-folder"></i> Illustrations</a></li>
																<li><a href=""><i class="zmdi zmdi-folder"></i> Films</a></li>
																<li><a href=""><i class="zmdi zmdi-folder"></i> Books</a></li>
															</ul> -->
                                                                            <h6 class="pl-15 mb-10">بحث</h6>

                                                                            <form action="" method="">
                                                                                <div class="form-group">
                                                                                    <label class="control-label mb-10"
                                                                                           for="">نوع
                                                                                        المخطط</label>

                                                                                    <div class="input-group">
                                                                                        <div class="input-group-addon"
                                                                                             style="background-color:#BDBDBD;">
                                                                                            <i class="icon-user"></i>
                                                                                        </div>
                                                                                        <select class="form-control"
                                                                                                data-placeholder="Choose a Category"
                                                                                                tabindex="1">
                                                                                            <option value="">
                                                                                                اختر واحد
                                                                                            </option>
                                                                                            <option value="Category 2">
                                                                                                مساحي
                                                                                            </option>
                                                                                            <option value="Category 1">
                                                                                                انشائي
                                                                                            </option>
                                                                                            <option value="Category 2">
                                                                                                معماري
                                                                                            </option>
                                                                                            <option value="Category 2">
                                                                                                ميكانيكا
                                                                                            </option>
                                                                                            <option value="Category 2">
                                                                                                كهرباء
                                                                                            </option>
                                                                                            <option value="Category 2">
                                                                                                موقع عام
                                                                                            </option>
                                                                                            <option value="Category 2">
                                                                                                اخري
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="message-text"
                                                                                           class="control-label mb-10">من
                                                                                        التاريخ</label>
                                                                                    <input type="date"
                                                                                           class="form-control"
                                                                                           id="description">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="message-text"
                                                                                           class="control-label mb-10">الي
                                                                                        التاريخ</label>
                                                                                    <input type="date"
                                                                                           class="form-control"
                                                                                           id="description">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <div class="modal-footer">

                                                                                        <button type="button"
                                                                                                class="btn btn-success btn-rounded btn-block">
                                                                                            بحث<i class="fa fa-search"></i>
                                                                                        </button>
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
                                                                                <div class="table-responsive">
                                                                                    <table id="pro_list"
                                                                                           class="table table-hover display  pb-30">
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
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>مخططات المساحه
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>مخططات المساحه
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>مخططات المساحه
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>مخططات المساحه
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>مخططات المساحه
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>مخططات المساحه
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>مخططات المساحه
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>مخططات المساحه
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>مخططات المساحه
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>مخططات المساحه
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
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
                                    <!-- /Row -->

                                </div>
                                <!--/ رسومات از بيلت -->
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

                                <!-- اوامر التغيير -->
                                <div id="change_order_entry_tab" class="tab-pane fade" role="tabpanel">
                                    <!-- Row -->

                                    <div class="row">
                                        <d-iv class="col-md-12">
                                            <div class="panel panel-default card-view pa-0">
                                                <div class="panel-wrapper collapse in">
                                                    <div class="panel-body pa-0">
                                                        <div class="">
                                                            <div class="col-lg-3 col-md-4 file-directory pa-10">
                                                                <div class="ibox float-e-margins">
                                                                    <div class="ibox-content">
                                                                        <div class="file-manager">
                                                                            <div class="mt-20 mb-20 ml-15 mr-15">
                                                                                <div class="modal fade"
                                                                                     id="uploud_new_change_order_model"
                                                                                     tabindex="-1" role="dialog"
                                                                                     aria-labelledby="exampleModalLabel1">
                                                                                    <div class="modal-dialog"
                                                                                         role="document">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <button type="button"
                                                                                                        class="close"
                                                                                                        data-dismiss="modal"
                                                                                                        aria-label="Close">
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                </button>
                                                                                                <h5 class="modal-title"
                                                                                                    id="">رفع
                                                                                                    اوامر
                                                                                                    التغيير </h5>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <form action=""
                                                                                                      method="">
                                                                                                    <div class="form-group">
                                                                                                        <label class="control-label mb-10"
                                                                                                               for="">نوع
                                                                                                            امر
                                                                                                            التغيير</label>

                                                                                                        <div class="input-group">
                                                                                                            <div class="input-group-addon"
                                                                                                                 style="background-color:#BDBDBD;">
                                                                                                                <i class="icon-user"></i>
                                                                                                            </div>
                                                                                                            <select class="form-control"
                                                                                                                    data-placeholder="Choose a Category"
                                                                                                                    tabindex="1">
                                                                                                                <option value="">
                                                                                                                    اختر
                                                                                                                    واحد
                                                                                                                </option>
                                                                                                                <option value="Category 2">
                                                                                                                    مساحي
                                                                                                                </option>
                                                                                                                <option value="Category 1">
                                                                                                                    انشائي
                                                                                                                </option>
                                                                                                                <option value="Category 2">
                                                                                                                    معماري
                                                                                                                </option>
                                                                                                                <option value="Category 2">
                                                                                                                    ميكانيكا
                                                                                                                </option>
                                                                                                                <option value="Category 2">
                                                                                                                    كهرباء
                                                                                                                </option>
                                                                                                                <option value="Category 2">
                                                                                                                    موقع
                                                                                                                    عام
                                                                                                                </option>
                                                                                                                <option value="Category 2">
                                                                                                                    اخري
                                                                                                                </option>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <label for="message-text"
                                                                                                               class="control-label mb-10">التاريخ</label>
                                                                                                        <input type="date"
                                                                                                               class="form-control"
                                                                                                               id="description">
                                                                                                        </textarea>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <label for="message-text"
                                                                                                               class="control-label mb-10">السبب</label>
                                                                                                        <input type="text"
                                                                                                               class="form-control"
                                                                                                               id="description">
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <label for="message-text"
                                                                                                               class="control-label mb-10">الوصف</label>
                                                                                                        <input type="text"
                                                                                                               class="form-control"
                                                                                                               id="description">
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <div class="fileupload btn btn-danger btn-rounded btn-anim btn-block">
                                                                                                            <i class="fa fa-upload"></i><span
                                                                                                                    class="btn-text">Upload</span>
                                                                                                            <input class="upload"
                                                                                                                   type="file">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <div class="modal-footer">
                                                                                                            <button type="button"
                                                                                                                    class="btn btn-success btn-rounded btn-block">
                                                                                                                حفظ
                                                                                                            </button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </form>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div>
                                                                                    <button class="btn btn-success btn-rounded btn-block btn-anim"
                                                                                            data-toggle="modal"
                                                                                            data-target="#uploud_new_change_order_model"
                                                                                            data-whatever="@"><i
                                                                                                class="fa fa-pencil"></i><span
                                                                                                class="btn-text">رفع امر تغيير جديد</span>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="pl-15 mb-30"><a href="#"
                                                                                                        class="file-control active">المعماري</a>
                                                                                <a href="#"
                                                                                   class="file-control">الانشائي</a>
                                                                                <a href="#"
                                                                                   class="file-control">الميكانيكا</a>
                                                                                <a href="#"
                                                                                   class="file-control">الكهرباء</a>
                                                                                <a href="#"
                                                                                   class="file-control">الموقع
                                                                                    العام</a></div>

                                                                            <!--<h6 class="mb-10 pl-15">Folders</h6>
															<ul class="folder-list mb-30">
																<li class="active"><a href=""><i class="zmdi zmdi-folder"></i> Files</a></li>
																<li><a href=""><i class="zmdi zmdi-folder"></i> Pictures</a></li>
																<li><a href=""><i class="zmdi zmdi-folder"></i> Web pages</a></li>
																<li><a href=""><i class="zmdi zmdi-folder"></i> Illustrations</a></li>
																<li><a href=""><i class="zmdi zmdi-folder"></i> Films</a></li>
																<li><a href=""><i class="zmdi zmdi-folder"></i> Books</a></li>
															</ul> -->
                                                                            <h6 class="pl-15 mb-10">بحث</h6>

                                                                            <form action="" method="">
                                                                                <div class="form-group">
                                                                                    <label class="control-label mb-10"
                                                                                           for="">نوع امر
                                                                                        التغيير</label>

                                                                                    <div class="input-group">
                                                                                        <div class="input-group-addon"
                                                                                             style="background-color:#BDBDBD;">
                                                                                            <i class="icon-user"></i>
                                                                                        </div>
                                                                                        <select class="form-control"
                                                                                                data-placeholder="Choose a Category"
                                                                                                tabindex="1">
                                                                                            <option value="">
                                                                                                اختر واحد
                                                                                            </option>
                                                                                            <option value="Category 2">
                                                                                                مساحي
                                                                                            </option>
                                                                                            <option value="Category 1">
                                                                                                انشائي
                                                                                            </option>
                                                                                            <option value="Category 2">
                                                                                                معماري
                                                                                            </option>
                                                                                            <option value="Category 2">
                                                                                                ميكانيكا
                                                                                            </option>
                                                                                            <option value="Category 2">
                                                                                                كهرباء
                                                                                            </option>
                                                                                            <option value="Category 2">
                                                                                                موقع عام
                                                                                            </option>
                                                                                            <option value="Category 2">
                                                                                                اخري
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="message-text"
                                                                                           class="control-label mb-10">من
                                                                                        التاريخ</label>
                                                                                    <input type="date"
                                                                                           class="form-control"
                                                                                           id="description">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="message-text"
                                                                                           class="control-label mb-10">الي
                                                                                        التاريخ</label>
                                                                                    <input type="date"
                                                                                           class="form-control"
                                                                                           id="description">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <div class="modal-footer">

                                                                                        <button type="button"
                                                                                                class="btn btn-success btn-rounded btn-block">
                                                                                            بحث<i class="fa fa-search"></i>
                                                                                        </button>
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
                                                                                <div class="table-responsive">
                                                                                    <table id="pro_list"
                                                                                           class="table table-hover display  pb-30">
                                                                                        <thead>
                                                                                        <tr>
                                                                                            <th>م</th>
                                                                                            <th>النوع</th>
                                                                                            <th>التاريخ</th>
                                                                                            <th>السبب</th>
                                                                                            <th>الوصف</th>
                                                                                            <th>الملف</th>
                                                                                        </tr>
                                                                                        </thead>
                                                                                        <tfoot>
                                                                                        <tr>
                                                                                            <th>م</th>
                                                                                            <th>النوع</th>
                                                                                            <th>التاريخ</th>
                                                                                            <th>السبب</th>
                                                                                            <th>الوصف</th>
                                                                                            <th>الملف</th>
                                                                                        </tr>
                                                                                        </tfoot>
                                                                                        <tbody>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>بناءا علي اوامر
                                                                                                المالك
                                                                                            </td>
                                                                                            <td>امر تغغير
                                                                                                الاحواض
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>حاجه فنيه في
                                                                                                المشروع
                                                                                            </td>
                                                                                            <td>امر تغغير بلاط
                                                                                                الارضيات
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>

                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>بناءا علي اوامر
                                                                                                المالك
                                                                                            </td>
                                                                                            <td>امر تغغير
                                                                                                الاحواض
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>حاجه فنيه في
                                                                                                المشروع
                                                                                            </td>
                                                                                            <td>امر تغغير بلاط
                                                                                                الارضيات
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>بناءا علي اوامر
                                                                                                المالك
                                                                                            </td>
                                                                                            <td>امر تغغير
                                                                                                الاحواض
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>حاجه فنيه في
                                                                                                المشروع
                                                                                            </td>
                                                                                            <td>امر تغغير بلاط
                                                                                                الارضيات
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>بناءا علي اوامر
                                                                                                المالك
                                                                                            </td>
                                                                                            <td>امر تغغير
                                                                                                الاحواض
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>مساحي</td>
                                                                                            <td>24-08-2018</td>
                                                                                            <td>حاجه فنيه في
                                                                                                المشروع
                                                                                            </td>
                                                                                            <td>امر تغغير بلاط
                                                                                                الارضيات
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="_singlepro.php?pronum=3">
                                                                                                    <button class="btn btn-info"></button>
                                                                                                </a></td>
                                                                                        </tr>
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
                                    <!-- /Row -->

                                </div>
                                <!--/ اوامر التغيير -->
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
                                                                                <div class="modal fade"
                                                                                     id="uploud_new_media_model"
                                                                                     tabindex="-1" role="dialog"
                                                                                     aria-labelledby="exampleModalLabel1">
                                                                                    <div class="modal-dialog"
                                                                                         role="document">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <button type="button"
                                                                                                        class="close"
                                                                                                        data-dismiss="modal"
                                                                                                        aria-label="Close">
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                </button>
                                                                                                <h5 class="modal-title"
                                                                                                    id="">رفع
                                                                                                    صوره او
                                                                                                    فيديو</h5>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <form action=""
                                                                                                      method="">
                                                                                                    <div class="form-group">
                                                                                                        <label class="control-label mb-10"
                                                                                                               for="">نوع
                                                                                                            المرفق</label>

                                                                                                        <div class="input-group">
                                                                                                            <div class="input-group-addon"
                                                                                                                 style="background-color:#BDBDBD;">
                                                                                                                <i class="icon-user"></i>
                                                                                                            </div>
                                                                                                            <select class="form-control"
                                                                                                                    data-placeholder="Choose a Category"
                                                                                                                    tabindex="1">
                                                                                                                <option value="">
                                                                                                                    ==
                                                                                                                    اختر
                                                                                                                    واحدا==
                                                                                                                </option>
                                                                                                                <option value="Category 1">
                                                                                                                    انشائي
                                                                                                                </option>
                                                                                                                <option value="Category 2">
                                                                                                                    معماري
                                                                                                                </option>
                                                                                                                <option value="Category 2">
                                                                                                                    ميكانيكا
                                                                                                                </option>
                                                                                                                <option value="Category 2">
                                                                                                                    كهرباء
                                                                                                                </option>
                                                                                                                <option value="Category 2">
                                                                                                                    موقع
                                                                                                                    عام
                                                                                                                </option>
                                                                                                                <option value="Category 2">
                                                                                                                    اخري
                                                                                                                </option>
                                                                                                                <option value="">
                                                                                                                    شهاده
                                                                                                                    ضمان
                                                                                                                </option>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <label for="message-text"
                                                                                                               class="control-label mb-10">التاريخ</label>
                                                                                                        <input type="date"
                                                                                                               class="form-control"
                                                                                                               id="description">
                                                                                                        </textarea>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <label for="message-text"
                                                                                                               class="control-label mb-10">الوصف</label>
                                                                                                        <input type="text"
                                                                                                               class="form-control"
                                                                                                               id="description">
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <div class="fileupload btn btn-danger btn-rounded btn-anim btn-block">
                                                                                                            <i class="fa fa-upload"></i><span
                                                                                                                    class="btn-text">Upload</span>
                                                                                                            <input class="upload"
                                                                                                                   type="file"
                                                                                                                   multiple>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <div class="modal-footer">
                                                                                                            <button type="button"
                                                                                                                    class="btn btn-success btn-rounded btn-block">
                                                                                                                حفظ
                                                                                                            </button>
                                                                                                        </div>

                                                                                                    </div>
                                                                                                </form>
                                                                                            </div>

                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div>
                                                                                <button class="btn btn-success btn-rounded btn-block btn-anim"
                                                                                        data-toggle="modal"
                                                                                        data-target="#uploud_new_media_model"
                                                                                        data-whatever="@"><i
                                                                                            class="fa fa-pencil"></i><span
                                                                                            class="btn-text">رفع مرفق جديد</span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="pl-15 mb-30"><a href="#"
                                                                                                    class="file-control active">الكل</a>
                                                                            <a href="#"
                                                                               class="file-control">الملفات</a>
                                                                            <a href="#"
                                                                               class="file-control">الفديوهات</a>
                                                                            <a href="#"
                                                                               class="file-control">الصور</a>
                                                                        </div>

                                                                        <!--<h6 class="mb-10 pl-15">Folders</h6>
															<ul class="folder-list mb-30">
																<li class="active"><a href=""><i class="zmdi zmdi-folder"></i> Files</a></li>
																<li><a href=""><i class="zmdi zmdi-folder"></i> Pictures</a></li>
																<li><a href=""><i class="zmdi zmdi-folder"></i> Web pages</a></li>
																<li><a href=""><i class="zmdi zmdi-folder"></i> Illustrations</a></li>
																<li><a href=""><i class="zmdi zmdi-folder"></i> Films</a></li>
																<li><a href=""><i class="zmdi zmdi-folder"></i> Books</a></li>
															</ul> -->
                                                                        <h6 class="pl-15 mb-10">بحث</h6>
                                                                        <ul class="tag-list pl-15 pr-15">
                                                                            <form action="" method="">
                                                                                <div class="form-group">
                                                                                    <label class="control-label mb-10"
                                                                                           for="">التصنيف</label>

                                                                                    <div class="input-group">
                                                                                        <div class="input-group-addon"
                                                                                             style="background-color:#BDBDBD;">
                                                                                            <i class="icon-user"></i>
                                                                                        </div>
                                                                                        <select class="form-control"
                                                                                                data-placeholder="Choose a Category"
                                                                                                tabindex="1">
                                                                                            <option value="Category 2">
                                                                                                الكل
                                                                                            </option>
                                                                                            <option value="Category 2">
                                                                                                ملفات
                                                                                            </option>
                                                                                            <option value="Category 1">
                                                                                                صور
                                                                                            </option>
                                                                                            <option value="Category 2">
                                                                                                فديوهات
                                                                                            </option>
                                                                                            <option value="Category 2">
                                                                                                اخري
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="control-label mb-10"
                                                                                           for="">نوع </label>

                                                                                    <div class="input-group">
                                                                                        <div class="input-group-addon"
                                                                                             style="background-color:#BDBDBD;">
                                                                                            <i class="icon-user"></i>
                                                                                        </div>
                                                                                        <select class="form-control"
                                                                                                data-placeholder="Choose a Category"
                                                                                                tabindex="1">
                                                                                            <option value="">
                                                                                                اختر واحد
                                                                                            </option>
                                                                                            <option value="Category 2">
                                                                                                مساحي
                                                                                            </option>
                                                                                            <option value="Category 1">
                                                                                                انشائي
                                                                                            </option>
                                                                                            <option value="Category 2">
                                                                                                معماري
                                                                                            </option>
                                                                                            <option value="Category 2">
                                                                                                ميكانيكا
                                                                                            </option>
                                                                                            <option value="Category 2">
                                                                                                كهرباء
                                                                                            </option>
                                                                                            <option value="Category 2">
                                                                                                موقع عام
                                                                                            </option>
                                                                                            <option value="Category 2">
                                                                                                اخري
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="message-text"
                                                                                           class="control-label mb-10">من
                                                                                        التاريخ</label>
                                                                                    <input type="date"
                                                                                           class="form-control"
                                                                                           id="description">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="message-text"
                                                                                           class="control-label mb-10">الي
                                                                                        التاريخ</label>
                                                                                    <input type="date"
                                                                                           class="form-control"
                                                                                           id="description">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <div class="modal-footer">

                                                                                        <button type="button"
                                                                                                class="btn btn-success btn-rounded btn-block">
                                                                                            بحث<i class="fa fa-search"></i>
                                                                                        </button>
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
                                                                                    <div class="icon"><i
                                                                                                class="zmdi zmdi-file-text"></i>
                                                                                    </div>
                                                                                    <div class="file-name">
                                                                                        Document_2016.doc <br>
                                                                                        <span>Added: Jan 11, 2016</span>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <div class="file"><a href="#">
                                                                                    <div class="image"
                                                                                         style="background-image:url(dist/img/gallery/mock1.jpg)"></div>
                                                                                    <div class="file-name">
                                                                                        Italy street.jpg <br>
                                                                                        <span>Added: Jan 6, 2016</span>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <div class="file"><a href="#">
                                                                                    <div class="image"
                                                                                         style="background-image:url(dist/img/gallery/mock2.jpg)"></div>
                                                                                    <div class="file-name"> My
                                                                                        feel.png <br>
                                                                                        <span>Added: Jan 7, 2016</span>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <div class="file"><a href="#">
                                                                                    <div class="icon"><i
                                                                                                class="zmdi zmdi-collection-music"></i>
                                                                                    </div>
                                                                                    <div class="file-name">
                                                                                        Michal Jackson.mp3 <br>
                                                                                        <span>Added: Jan 22, 2016</span>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <div class="file"><a href="#">
                                                                                    <div class="image"
                                                                                         style="background-image:url(dist/img/gallery/mock3.jpg)"></div>
                                                                                    <div class="file-name">
                                                                                        Document_2016.doc <br>
                                                                                        <span>Added: Fab 11, 2016</span>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <div class="file"><a href="#">
                                                                                    <div class="icon"><i
                                                                                                class="img-responsive zmdi zmdi-collection-video"></i>
                                                                                    </div>
                                                                                    <div class="file-name">
                                                                                        Monica's birthday.mpg4
                                                                                        <br>
                                                                                        <span>Added: Fab 18, 2016</span>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <a href="#">
                                                                                <div class="file">
                                                                                    <div class="icon"><i
                                                                                                class="zmdi zmdi-chart"></i>
                                                                                    </div>
                                                                                    <div class="file-name">
                                                                                        Annual report 2016.xls
                                                                                        <br>
                                                                                        <span>Added: Fab 22, 2016</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a></div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <div class="file"><a href="#">
                                                                                    <div class="icon"><i
                                                                                                class="zmdi zmdi-file-text"></i>
                                                                                    </div>
                                                                                    <div class="file-name">
                                                                                        Document_2016.doc <br>
                                                                                        <span>Added: Jan 11, 2016</span>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <div class="file"><a href="#">
                                                                                    <div class="image"
                                                                                         style="background-image:url(dist/img/gallery/equal-size/mock6.jpg)"></div>
                                                                                    <div class="file-name">
                                                                                        Italy street.jpg <br>
                                                                                        <span>Added: Jan 6, 2016</span>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <div class="file"><a href="#">
                                                                                    <div class="image"
                                                                                         style="background-image:url(dist/img/gallery/equal-size/mock3.jpg)"></div>
                                                                                    <div class="file-name"> My
                                                                                        feel.png <br>
                                                                                        <span>Added: Jan 7, 2016</span>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <div class="file"><a href="#">
                                                                                    <div class="icon"><i
                                                                                                class="zmdi zmdi-collection-music"></i>
                                                                                    </div>
                                                                                    <div class="file-name">
                                                                                        Michal Jackson.mp3 <br>
                                                                                        <span>Added: Jan 22, 2016</span>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <div class="file"><a href="#">
                                                                                    <div class="image"
                                                                                         style="background-image:url(dist/img/gallery/equal-size/mock2.jpg)"></div>
                                                                                    <div class="file-name">
                                                                                        Document_2016.doc <br>
                                                                                        <span>Added: Fab 11, 2016</span>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <div class="file"><a href="#">
                                                                                    <div class="icon"><i
                                                                                                class="img-responsive zmdi zmdi-collection-video"></i>
                                                                                    </div>
                                                                                    <div class="file-name">
                                                                                        Monica's birthday.mpg4
                                                                                        <br>
                                                                                        <span>Added: Fab 18, 2016</span>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <a href="#">
                                                                                <div class="file">
                                                                                    <div class="icon"><i
                                                                                                class="zmdi zmdi-chart"></i>
                                                                                    </div>
                                                                                    <div class="file-name">
                                                                                        Annual report 2016.xls
                                                                                        <br>
                                                                                        <span>Added: Fab 22, 2016</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a></div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <div class="file"><a href="#">
                                                                                    <div class="icon"><i
                                                                                                class="zmdi zmdi-file-text"></i>
                                                                                    </div>
                                                                                    <div class="file-name">
                                                                                        Document_2016.doc <br>
                                                                                        <span>Added: Jan 11, 2016</span>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <div class="file"><a href="#">
                                                                                    <div class="image"
                                                                                         style="background-image:url(dist/img/gallery/mock6.jpg)"></div>
                                                                                    <div class="file-name">
                                                                                        Italy street.jpg <br>
                                                                                        <span>Added: Jan 6, 2016</span>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <div class="file"><a href="#">
                                                                                    <div class="image"
                                                                                         style="background-image:url(dist/img/gallery/equal-size/mock5.jpg)"></div>
                                                                                    <div class="file-name"> My
                                                                                        feel.png <br>
                                                                                        <span>Added: Jan 7, 2016</span>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <div class="file"><a href="#">
                                                                                    <div class="icon"><i
                                                                                                class="zmdi zmdi-collection-music"></i>
                                                                                    </div>
                                                                                    <div class="file-name">
                                                                                        Michal Jackson.mp3 <br>
                                                                                        <span>Added: Jan 22, 2016</span>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <div class="file"><a href="#">
                                                                                    <div class="image"
                                                                                         style="background-image:url(dist/img/gallery/equal-size/mock4.jpg)"></div>
                                                                                    <div class="file-name">
                                                                                        Document_2016.doc <br>
                                                                                        <span>Added: Fab 11, 2016</span>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <div class="file"><a href="#">
                                                                                    <div class="icon"><i
                                                                                                class="img-responsive zmdi zmdi-collection-video"></i>
                                                                                    </div>
                                                                                    <div class="file-name">
                                                                                        Monica's birthday.mpg4
                                                                                        <br>
                                                                                        <span>Added: Fab 18, 2016</span>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                                                            <a href="#">
                                                                                <div class="file">
                                                                                    <div class="icon"><i
                                                                                                class="zmdi zmdi-chart"></i>
                                                                                    </div>
                                                                                    <div class="file-name">
                                                                                        Annual report 2016.xls
                                                                                        <br>
                                                                                        <span>Added: Fab 22, 2016</span>
                                                                                    </div>
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
                                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out
                                        mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table
                                        readymade.</p>
                                </div>
                                <div id="dropdown_14" class="tab-pane fade" role="tabpanel">
                                    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party
                                        before they sold out master cleanse gluten-free squid scenester freegan
                                        cosby sweater.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Content -->

        <!-- /#wrapper -->

        <!-- JavaScript -->

        <!-- Init JavaScript -->
        <!-- Data table JavaScript -->

        <!-- Footer -->
        <footer class="footer container-fluid pl-30 pr-30">
            <div class="row">
                <div class="col-sm-12">
                    <p>2017 &copy; Osama sabry. Pampered by Hencework</p>
                </div>
            </div>
        </footer>
        <!-- /Footer -->

    </div>
@endsection