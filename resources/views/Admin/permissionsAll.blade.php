@extends('Admin.Layouts.Master')
@section('container')
    <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark arabic-fonts">عرض الصلاحيات</h5>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12 top-directory">
            <ul class="list-inline arabic-fonts">
                <li class="active"><span>الصلاحيات</span></li>
                <li><a href="#"><span><i class="fa fa-chevron-right" aria-hidden="true"></i> اعدادات</span></a></li>
                <li><a href="{{route('admin.welcome')}}">
                        <i class="fa fa-chevron-right" aria-hidden="true"></i> صفحة البداية</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('permissions.create')}}" class="btn btn-success arabic-fonts">اضافة صلاحيات
                <i class="fa fa-plus-square"></i>
            </a>
        </div>
    </div>
    <div class="row" style="margin-top: 15px;">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark arabic-fonts">الصلاحيات</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="table-wrap">
                            <div class="table-responsive">
                                <table id="datable_1" class="table table-hover display  pb-30 arabic-fonts"
                                       style="font-size: 12px;">
                                    <thead>
                                    <tr>
                                        <th>اسم المجموعة</th>
                                        <th>action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>اسم المجموعة</th>
                                        <th>action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($permissions as $permission)
                                        <tr>
                                            <td>{{$permission->name}}</td>
                                            <td>
                                                <a href="{{route('permissions.edit',['id'=>$permission->id])}}">
                                                    <i class="fa fa-pencil-square fa-2x text-warning"></i>
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