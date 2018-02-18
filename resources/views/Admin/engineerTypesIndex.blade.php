@extends('Admin.Layouts.Master')
@section('container')
    <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark arabic-fonts">عرض انواع المهندسين</h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12 top-directory">
            <ul class="list-inline arabic-fonts">
                <li class="active"><span>عرض انواع المهندسين</span></li>
                <li><a href="#"><span><i class="fa fa-chevron-right" aria-hidden="true"></i> اعدادات</span></a></li>
                <li><a href="{{route('admin.welcome')}}"><i class="fa fa-chevron-right" aria-hidden="true"></i> صفحة
                        البداية</a></li>
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
    @if(session('danger'))
        <div class="alert alert-danger alert-dismissable">
            <a href="#" data-dismiss="alert" class="close" aria-label="close">&times;</a>
            <strong>{{session('danger')}}</strong>
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('engineer-types.create')}}" class="btn btn-success arabic-fonts">اضافة نوع مهندسين <i
                        class="fa fa-plus-square"></i> </a>
        </div>
    </div>
    <div class="row" style="margin-top: 15px;">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark arabic-fonts">مجموعات المهندسين</h6>
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
                                        <th>اضافة</th>
                                        <th>تعديل</th>
                                        <th>حذف</th>
                                        <th>action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>اسم المجموعة</th>
                                        <th>اضافة</th>
                                        <th>تعديل</th>
                                        <th>حذف</th>
                                        <th>action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($types as $type)
                                        <tr>
                                            <td>{{$type->type}}</td>
                                            <td>
                                                <i class="fa  fa-2x {!! $type->roles->add?'fa-check-square text-success':'fa-times-circle text-danger' !!}"></i>
                                            </td>
                                            <td>
                                                <i class="fa  fa-2x {!! $type->roles->edit?'fa-check-square text-success':'fa-times-circle text-danger' !!}"></i>
                                            </td>
                                            <td>
                                                <i class="fa  fa-2x {!! $type->roles->delete?'fa-check-square text-success':'fa-times-circle text-danger' !!}"></i>
                                            </td>
                                            <td>
                                                <div>
                                                    <a href="{{route('engineer-types.edit',['id'=>$type->id])}}">
                                                        <i class="fa fa-pencil-square fa-2x text-warning"></i>
                                                    </a>

                                                        <form class="custom-form" method="post" action="{{route('engineer-types.destroy',['id'=>$type->id])}}">
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            {{csrf_field()}}
                                                            <button class="custom-button"><i
                                                                        class="fa fa-trash fa-2x text-danger"></i>
                                                            </button>
                                                        </form>
                                                </div>

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