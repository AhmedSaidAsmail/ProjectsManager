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
        <div class="alert alert-success alert-dismissable">
            <a href="#" data-dismiss="alert" class="close" aria-label="close">&times;</a>
            <strong>{{session('success')}}</strong>
        </div>
    @endif
    @if(session('fail'))
        <div class="alert alert-danger alert-dismissable">
            <a href="#" data-dismiss="alert" class="close" aria-label="close">&times;</a>
            <strong>{{session('fail')}}</strong>
        </div>
    @endif
    <div class="row" style="margin-top: 15px;">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark arabic-fonts">المشروعات</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="table-wrap">
                            <div class="table-responsive">
                                <table id="datable_1" class="table table-hover display  pb-30 custom-table"
                                       style="font-size: 12px;">
                                    <thead>
                                    <tr>
                                        <th>اسم المشروع</th>
                                        <th>مقاول المشروع</th>
                                        <th>مالك المشروع</th>
                                        <th>المدينة</th>
                                        <th>التصنيف</th>
                                        <th class="english-fonts">action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>اسم المشروع</th>
                                        <th>مقاول المشروع</th>
                                        <th>مالك المشروع</th>
                                        <th>المدينة</th>
                                        <th>التصنيف</th>
                                        <th class="english-fonts">action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($projects as $project)
                                        <tr>
                                            <td>{{$project->name}}</td>
                                            <td>{{$project->contractor->name}}</td>
                                            <td>{{$project->owner->name}}</td>
                                            <td>{{$project->city}}</td>
                                            <td>{{$project->sort}}</td>
                                            <td>
                                                <a href="{{route('engineer-projects.show',['id'=>$project->id])}}">
                                                    <i class="fas fa-eye fa-2x text-success"></i>
                                                </a>
                                            </td>
                                        </tr>
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
@endsection