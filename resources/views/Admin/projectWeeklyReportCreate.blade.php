<?php
$parent = null;
switch (true) {
    case auth()->guard('web')->check():
        $parent = 'Admin.Layouts.Master';
        break;
    case auth()->guard('contractor')->check():
        $parent = 'Contractor.Layouts.Master';
        break;
    case auth()->guard('owner')->check():
        $parent = 'Owner.Layouts.Master';
        break;
    case auth()->guard('engineer')->check():
        $parent = 'Engineer.Layouts.Master';
        break;
    default :
        $parent = 'Admin.Layouts.Master';

}
$reportType = $monthly ? "شهري" : "اسبوعي";
?>
@extends($parent)
@section('container')
    <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark arabic-fonts">اعداد تقرير {{$reportType}}</h5>
        </div>

        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12 top-directory">
            <ul class="list-inline arabic-fonts">
                <li class="active">
                    <span>اعداد تقرير {{$reportType}}</span>
                </li>
                <li>
                    <a href="#">
                        <span><i class="fa fa-chevron-right" aria-hidden="true"></i>المشروعات</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.welcome')}}">
                        <i class="fa fa-chevron-right" aria-hidden="true"></i> صفحة البداية
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="row arabic-fonts">
        <div class="panel panel-default card-view">
            <div class="panel-body">
                <div class="form-wrap">
                    <form method="post" action="{{route('weekly-report.store',['projectId'=>$project->id])}}"
                          enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="monthly" value="{{$monthly}}">
                        <div class="panel-group" id="report">
                            <div class="panel panel-warning">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#report_information" data-parent="#report" data-toggle="collapse">
                                            مقدمة التقرير
                                        </a>
                                    </h4>
                                </div>
                                <div id="report_information" class="collapse panel-collapse">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label mb-10" for="">اسم المشروع</label>

                                                    <div class="input-group">
                                                        <div class="input-group-addon ">
                                                            <i class="icon-user"></i></div>
                                                        <input type="text" class="form-control"
                                                               value="{{$project->name}}" name="name" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">تاريخ بداية التقرير</label>

                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fas fa-calendar"></i></div>
                                                        <input type="text" value="" class="form-control"
                                                               name="starting_date" data-mask="9999-99-99"
                                                               placeholder="" required>
                                                    </div>
                                                    <span class="text-muted">yyyy-mm-dd</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">تاريخ نهاية التقرير</label>

                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fas fa-calendar"></i></div>
                                                        <input type="text" value="" class="form-control"
                                                               name="ending_date" data-mask="9999-99-99" placeholder=""
                                                               required>
                                                    </div>
                                                    <span class="text-muted">yyyy-mm-dd</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label mb-10" for="">نسبة الانجاز
                                                        المالية</label>

                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fas fa-percent"></i>
                                                        </div>
                                                        <input type="number" value="" class="form-control"
                                                               name="financial_achievement_ratio" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label mb-10" for="">نسبة الانجاز
                                                        الفعلية</label>

                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fas fa-percent"></i>
                                                        </div>
                                                        <input type="number" value="" class="form-control"
                                                               name="actual_completion_rate" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label mb-10" for="">نسبة الانجاز
                                                        المطلوبة</label>

                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fas fa-percent"></i>
                                                        </div>
                                                        <input type="number" value="" class="form-control"
                                                               name="percentage_achievement_required" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#project_results" data-toggle="collapse" data-parent="#report">
                                            نتائج الاختبارات
                                        </a>
                                    </h4>
                                </div>
                                <div class="collapse panel-collapse" id="project_results">
                                    <div class="panel-body">
                                        <div id="projectTestResult" data-parent="{{$project->id}}"
                                             data-ajax--url="{{route('tests.getAccordingToDate')}}">


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#project_requests" data-toggle="collapse" data-parent="#report">
                                            المخاطبات ومحاضر الاجتماعات
                                        </a>
                                    </h4>
                                </div>
                                <div class="collapse panel-collapse" id="project_requests">
                                    <div class="panel-body">
                                        <div id="projectRequestResult" data-parent="{{$project->id}}"
                                             data-ajax--url="{{route('requests.getAccordingToDate')}}">


                                        </div>
                                        <div id="projectSubmittalsResult" data-parent="{{$project->id}}"
                                             data-ajax--url="{{route('submittals.getAccordingToDate')}}">


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#project_photos" data-toggle="collapse" data-parent="#report">
                                            الصور الفوتوغرافيه
                                        </a>
                                    </h4>
                                </div>
                                <div class="collapse panel-collapse" id="project_photos">
                                    <div class="panel-body">

                                        <div id="projectFileResult" data-parent="{{$project->id}}"
                                             data-ajax--url="{{route('project-files.getAccordingToDate')}}">


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-success panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#contractor_team" data-parent="#report" data-toggle="collapse">
                                            الهيكل التنظيمي لجهاز المقاول
                                        </a>
                                    </h4>
                                </div>
                                <div class="collapse panel-collapse" id="contractor_team">
                                    <div class="panel-body">
                                        <div id="contractor_team_container">
                                            {{-- Contractor team --}}
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <a href="#" id="insertRow" class="btn btn-success">اضافة طاقم</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-primary panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#contractor_team_panel" data-parent="#report" data-toggle="collapse">
                                            معدات المقاول وأدوات بالموقع
                                        </a>
                                    </h4>
                                </div>
                                <div id="contractor_team_panel" class="collapse panel-collapse">
                                    <div class="panel-body">
                                        <div id="contractor_tools_container">
                                            {{-- Contractor tools --}}
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <a href="#" id="insertToolRow" class="btn btn-success">اضافة طاقم</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-info panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#pro_schedule" data-parent="#report" data-toggle="collapse">
                                            البرنامج الزمنى
                                        </a>
                                    </h4>
                                </div>
                                <div id="pro_schedule" class="collapse panel-collapse">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>البرنامج الزمني</label>
                                                    <input type="file" name="schedule" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="panel-default panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#report_done_working" data-parent="#report" data-toggle="collapse">
                                            بيان الاعمال المنفذه بالمشروع
                                        </a>
                                    </h4>
                                </div>
                                <div id="report_done_working" class="collapse panel-collapse">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="tinymce"
                                                          name="report_additional[done_working]"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="panel-danger panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#report_status" data-parent="#report" data-toggle="collapse">
                                            بيان الحالة
                                        </a>
                                    </h4>
                                </div>
                                <div id="report_status" class="collapse panel-collapse">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="tinymce"
                                                          name="report_additional[report_status]"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="panel-warning panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#working_rate" data-parent="#report" data-toggle="collapse">
                                            معدل سير الاعمال
                                        </a>
                                    </h4>
                                </div>
                                <div id="working_rate" class="collapse panel-collapse">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="tinymce"
                                                          name="report_additional[working_rate]"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="panel-default panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#completion_Schedule" data-parent="#report" data-toggle="collapse">
                                            جدول نسب الانجاز
                                        </a>
                                    </h4>
                                </div>
                                <div id="completion_Schedule" class="collapse panel-collapse">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="tinymce"
                                                          name="report_additional[completion_Schedule]"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="panel-primary panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#working_next_month" data-parent="#report" data-toggle="collapse">
                                            وصف الاعمال المتوقع انجازها خلال الشهر القادم
                                        </a>
                                    </h4>
                                </div>
                                <div id="working_next_month" class="collapse panel-collapse">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="tinymce"
                                                          name="report_additional[working_next_month]"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="panel-info panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#consultant_note" data-parent="#report" data-toggle="collapse">
                                            ملاحظات الاستشارى على الاعمال بالموقع
                                        </a>
                                    </h4>
                                </div>
                                <div id="consultant_note" class="collapse panel-collapse">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="tinymce"
                                                          name="report_additional[consultant_note]"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="panel-default panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#contractor_required" data-parent="#report" data-toggle="collapse">
                                            المطلوب من المقاول
                                        </a>
                                    </h4>
                                </div>
                                <div id="contractor_required" class="collapse panel-collapse">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="tinymce"
                                                          name="report_additional[contractor_required]"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="panel-danger panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#owner_required" data-parent="#report" data-toggle="collapse">
                                            المطلوب من المالك
                                        </a>
                                    </h4>
                                </div>
                                <div id="owner_required" class="collapse panel-collapse">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="tinymce"
                                                          name="report_additional[owner_required]"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="panel-primary panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#consultant_recommendations" data-parent="#report"
                                           data-toggle="collapse">
                                            توصيات الاستشاري
                                        </a>
                                    </h4>
                                </div>
                                <div id="consultant_recommendations" class="collapse panel-collapse">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="tinymce"
                                                          name="report_additional[consultant_recommendations]"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="panel-default panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#details" data-parent="#report" data-toggle="collapse">
                                            التفاصيل
                                        </a>
                                    </h4>
                                </div>
                                <div id="details" class="collapse panel-collapse">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="tinymce" name="text"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success mr-10">Submit</button>
                        <button type="submit" class="btn btn-default">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('additional-css')
    <link href="{{asset('template/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css')}}"
          rel="stylesheet" type="text/css"/>
    <style>

        .panel-body .row {
            margin: 10px 0;
        }

        .item-list {
            overflow: hidden;
        }

        .item-list img {
            width: 100%;
        }
    </style>
@endsection
@section('additional-js')
    <script src="{{asset('template/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js')}}"></script>
    <script src="{{asset('template/vendors/bower_components/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('template/dist/js/tinymce-data.js')}}"></script>
    <script>
        $(function () {
            $('a#removeRow').click(function (event) {
                event.preventDefault();
            });

            $('a#insertRow').click(function (event) {
                event.preventDefault();

                var destiny = $('#contractor_team_container');
                var lastIndex = destiny.find('#contractor_team:last-child').length ? destiny.find('#contractor_team:last-child').attr('data-index') : 0;
                var index = parseInt(lastIndex) + 1;
                destiny.append('<div class="row" id="contractor_team" data-index="' + index + '"> ' +
                    '<div class="col-md-4"> ' +
                    '<div class="form-group"> ' +
                    '<label class="control-label mb-10" for="">المهنة</label> ' +
                    '<div class="input-group"> ' +
                    '<div class="input-group-addon"><i class="fab fa-gg-circle fa-lg"></i></div> ' +
                    '<input class="form-control" name="contractor_team[' + index + '][position]"> ' +
                    '</div> ' +
                    '</div> ' +
                    '</div> ' +
                    '<div class="col-md-3"> ' +
                    '<div class="form-group"> ' +
                    '<label class="control-label mb-10" for="">العدد</label> ' +
                    '<div class="input-group"> ' +
                    '<div class="input-group-addon"><i class="fas fa-sort-numeric-up fa-lg"></i></div> ' +
                    '<input type="number" value="1" class="form-control" name="contractor_team[' + index + '][number]" required> ' +
                    '</div> ' +
                    '</div> ' +
                    '</div> ' +
                    '<div class="col-md-4"> ' +
                    '<div class="form-group"> ' +
                    '<label class="control-label mb-10" for="">الاسم</label> ' +
                    '<div class="input-group"> ' +
                    '<div class="input-group-addon"><i class="fas fa-male fa-lg"></i></div> ' +
                    '<input class="form-control" name="contractor_team[' + index + '][name]"> ' +
                    '</div> ' +
                    '</div> ' +
                    '</div> ' +
                    '<div class="col-md-1"> ' +
                    '<a href="#" id="removeRow" style="display: block; padding-top: 35px;"><i class="fas fa-minus-circle fa-2x text-danger"></i></a> ' +
                    '</div> ' +
                    '</div>');
                removeRow();
            });
            $('a#insertToolRow').click(function (event) {
                event.preventDefault();

                var destiny = $('#contractor_tools_container');
                var lastIndex = destiny.find('#contractor_tool:last-child').length ? destiny.find('#contractor_tool:last-child').attr('data-index') : 0;
                var index = parseInt(lastIndex) + 1;
                destiny.append('<div class="row" id="contractor_tool" data-index="' + index + '"> ' +
                    '<div class="col-md-4"> ' +
                    '<div class="form-group"> ' +
                    '<label class="control-label mb-10" for="">المعدة</label> ' +
                    '<div class="input-group"> ' +
                    '<div class="input-group-addon"><i class="fab fa-gg-circle fa-lg"></i></div> ' +
                    '<input class="form-control" name="contractor_tool[' + index + '][tool]"> ' +
                    '</div> ' +
                    '</div> ' +
                    '</div> ' +
                    '<div class="col-md-3"> ' +
                    '<div class="form-group"> ' +
                    '<label class="control-label mb-10" for="">العدد</label> ' +
                    '<div class="input-group"> ' +
                    '<div class="input-group-addon"><i class="fas fa-sort-numeric-up fa-lg"></i></div> ' +
                    '<input type="number" value="1" class="form-control" name="contractor_tool[' + index + '][number]" required> ' +
                    '</div> ' +
                    '</div> ' +
                    '</div> ' +
                    '<div class="col-md-4"> ' +
                    '<div class="form-group"> ' +
                    '<label class="control-label mb-10" for="">الملاحظات</label> ' +
                    '<div class="input-group"> ' +
                    '<div class="input-group-addon"><i class="fas fa-male fa-lg"></i></div> ' +
                    '<input class="form-control" name="contractor_tool[' + index + '][note]"> ' +
                    '</div> ' +
                    '</div> ' +
                    '</div> ' +
                    '<div class="col-md-1"> ' +
                    '<a href="#" id="removeRow" style="display: block; padding-top: 35px;"><i class="fas fa-minus-circle fa-2x text-danger"></i></a> ' +
                    '</div> ' +
                    '</div>');
                removeRow();
            });

            function removeRow() {
                $('a#removeRow').click(function (event) {
                    var row = $(this).closest('.row');
                    event.preventDefault();
                    row.remove();
                });
            }
        });
    </script>
    <script>
        $(function () {
            $("input[name='starting_date'], input[name='ending_date']").blur(function () {
                var dateFrom = $("input[name='starting_date']").val();
                var dateTo = $("input[name='ending_date']").val();
                if (Date.parse(dateFrom) && Date.parse(dateTo)) {
                    getTests(dateFrom, dateTo, $("#projectTestResult"));
                    getTests(dateFrom, dateTo, $("#projectRequestResult"));
                    getTests(dateFrom, dateTo, $("#projectSubmittalsResult"));
                    getTests(dateFrom, dateTo, $("#projectFileResult"));

                }

            });

            function getTests(dateFrom, dateTo, container) {
                // var container = $("#projectTestResult");
                var url = container.attr('data-ajax--url');
                var projectId = container.attr('data-parent');
                $.ajax({
                    type: "get",
                    url: url,
                    data: {dateFrom: dateFrom, dateTo: dateTo, projectId: projectId},
                    success: function (response) {
                        container.html(response);
                    }
                });
            }
        });
    </script>

@endsection