@extends('Engineer.Layouts.Master')
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

                        <p>{{$project->description}}</p>

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
                                        <li class=""><a data-toggle="tab" id="dropdown_14_tab" role="tab" href="#tests_tab" aria-expanded="false">الاختبارات</a></li>
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

                                @include('Admin.Layouts.projectInformation')
                                {{-- Prject Information --}}
                                {{-- Timetable --}}
                                {{-- Schedule --}}
                                @include('Admin.Layouts.projectSchedule')
                                {{-- Schedule --}}
                                {{-- Timetable --}}
                                {{-- Submittals  --}}
                                @include('Admin.Layouts.projectSubmittals')
                                {{-- Submittals  --}}
                                {{-- Requests --}}
                                @include('Admin.Layouts.projectRequests')
                                {{-- Requests --}}
                                {{-- Letters --}}
                                @include('Admin.Layouts.projectLetters')
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
                                {{-- Tests --}}
                                @include('Admin.Layouts.projectTests')
                                {{-- Tests --}}
                                {{-- Change Orders --}}
                                @include('Admin.Layouts.changeOrders')
                                {{-- Change Orders --}}
                                {{-- Files --}}
                                @include('Admin.Layouts.projectFiles')
                                {{-- Files --}}
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
                                {{-- Weekly Report --}}
                                @include('Admin.Layouts.projectWeeklyReport')
                                {{-- Weekly Report --}}
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
    {{-- Ajax Result Container--}}
    <div class="project-edit-container">
        <div class="project-edit">
            {{-- Ajax Result--}}
        </div>
    </div>
    {{-- Ajax Result Container--}}
@endsection
@section('additional-css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.min.css" rel="stylesheet">
@endsection
@section('additional-js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.min.js"></script>
    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function (event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
        $(function () {
            $("a.ajax-data").click(function (event) {
                event.preventDefault();
                var url = $(this).attr('href');
                var displayDiv = $("div" + $(this).attr('data-display'));
                displayDiv.empty();
                $.ajax({
                    url: url,
                    type: "get",
                    success: function (response) {
                        displayDiv.html(response);
                    }
                });
            });

            $("form#ajax-data").submit(function (event) {
                event.preventDefault();
                var url = $(this).attr('action');
                var displayDiv = $("div" + $(this).attr('data-display'));
                var formData = $(this).serialize();
                displayDiv.empty();
                $.ajax({
                    url: url,
                    type: "get",
                    data: formData,
                    success: function (response) {
                        displayDiv.html(response);
                    }
                });
            });


        });
    </script>
    <script>
        $(function () {
            getTestSort();
            function getTestSort() {
                $("select#test_sort").change(function () {
                    var val = $(this).val();
                    var relatedSelect = $("select#related_sort");
                    var url = relatedSelect.attr('data-ajax--url');
                    $.ajax({
                        url: url,
                        type: "get",
                        data: {related_to: val},
                        success: function (response) {
                            relatedSelect.html(response);
                        }
                    });
                });
            }

            $("a#project-item-edit").click(function (event) {
                event.preventDefault();
                var container = $(".project-edit-container");
                var itemContainer = container.find('.project-edit');
                var link = $(this).attr('href');
                container.fadeIn();
                $('html, body').css({
                    overflow: 'hidden',
                    height: '100%'
                });
                $.ajax({
                    type: "get",
                    url: link,
                    success: function (respons) {
                        itemContainer.html(respons);
                        getTestSort();
                    }
                });
            });
            $('.project-edit-container').click(function (e) {

                if (!$(e.target).closest('.project-edit').length) {
                    if ($(this).is(":visible")) {
                        $(this).fadeOut();
                    }
                }
            });
        });
        $("#watchNow").click(function(event){
            event.preventDefault();

        });
    </script>
@endsection