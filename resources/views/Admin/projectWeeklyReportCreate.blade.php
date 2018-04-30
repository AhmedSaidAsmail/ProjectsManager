@extends('Admin.Layouts.Master')
@section('container')
    <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark arabic-fonts">اعداد تقرير اسبوعي</h5>
        </div>

        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12 top-directory">
            <ul class="list-inline arabic-fonts">
                <li class="active">
                    <span>اعداد تقرير اسبوعي</span>
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
                    <form method="post" action="{{route('weekly-report.store',['projectId'=>$project->id])}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label mb-10" for="">اسم المشروع</label>

                                    <div class="input-group">
                                        <div class="input-group-addon ">
                                            <i class="icon-user"></i></div>
                                        <input type="text" class="form-control" value="{{$project->name}}" name="name" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label mb-10">تاريخ بداية التقرير</label>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fas fa-calendar"></i></div>
                                        <input type="text" value="" class="form-control" name="starting_date" data-mask="9999-99-99" placeholder="" required>
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
                                        <input type="text" value="" class="form-control" name="ending_date" data-mask="9999-99-99" placeholder="" required>
                                    </div>
                                    <span class="text-muted">yyyy-mm-dd</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label mb-10" for="">نسبة الانجاز المالية</label>

                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fas fa-percent"></i></div>
                                        <input type="number" value="" class="form-control" name="financial_achievement_ratio" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label mb-10" for="">نسبة الانجاز الفعلية</label>

                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fas fa-percent"></i></div>
                                        <input type="number" value="" class="form-control" name="actual_completion_rate" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label mb-10" for="">نسبة الانجاز المطلوبة</label>

                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fas fa-percent"></i></div>
                                        <input type="number" value="" class="form-control" name="percentage_achievement_required" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5>الهيكل التنظيمي لجهاز المقاول</h5>

                        <div id="contractor_team_container">
                            <div class="row" id="contractor_team" data-index="0">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label mb-10" for="">المهنة</label>

                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fab fa-gg-circle fa-lg"></i></div>
                                            <input class="form-control" name="contractor_team[0][position]">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label mb-10" for="">العدد</label>

                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fas fa-sort-numeric-up fa-lg"></i></div>
                                            <input type="number" value="1" class="form-control" name="contractor_team[0][number]" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label mb-10" for="">الاسم</label>

                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fas fa-male fa-lg"></i></div>
                                            <input class="form-control" name="contractor_team[0][name]">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <a href="#" id="removeRow" style="display: block; padding-top: 35px;"><i class="fas fa-minus-circle fa-2x text-danger"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <a href="#" id="insertRow" class="btn btn-success">اضافة طاقم</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default card-view">
                                    <div class="panel-heading">
                                        <div class="pull-left">
                                            <h6 class="panel-title txt-dark">تفاصيل التقرير</h6>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="panel-wrapper collapse in">
                                        <div class="panel-body">
                                            <textarea class="tinymce" name="text"></textarea>
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
                destiny.append('<div class="row" id="contractor_team" data-index="0"> ' +
                        '<div class="col-md-4"> ' +
                        '<div class="form-group"> ' +
                        '<label class="control-label mb-10" for="">المهنة</label> ' +
                        '<div class="input-group"> ' +
                        '<div class="input-group-addon"><i class="fab fa-gg-circle fa-lg"></i></div> ' +
                        '<input class="form-control" name="contractor_team[0][position]"> ' +
                        '</div> ' +
                        '</div> ' +
                        '</div> ' +
                        '<div class="col-md-3"> ' +
                        '<div class="form-group"> ' +
                        '<label class="control-label mb-10" for="">العدد</label> ' +
                        '<div class="input-group"> ' +
                        '<div class="input-group-addon"><i class="fas fa-sort-numeric-up fa-lg"></i></div> ' +
                        '<input type="number" value="1" class="form-control" name="contractor_team[0][number]" required> ' +
                        '</div> ' +
                        '</div> ' +
                        '</div> ' +
                        '<div class="col-md-4"> ' +
                        '<div class="form-group"> ' +
                        '<label class="control-label mb-10" for="">الاسم</label> ' +
                        '<div class="input-group"> ' +
                        '<div class="input-group-addon"><i class="fas fa-male fa-lg"></i></div> ' +
                        '<input class="form-control" name="contractor_team[0][name]"> ' +
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
                    row.empty();
                });
            }
        });
    </script>

@endsection