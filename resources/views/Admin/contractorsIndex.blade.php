@extends('Admin.Layouts.Master')
@section('container')
    <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark arabic-fonts">عرض المقاولين</h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12 top-directory">
            <ul class="list-inline arabic-fonts">
                <li class="active"><span>المقاولين</span></li>
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
    @if(session('danger'))
        <div class="alert alert-danger alert-dismissable">
            <a href="#" data-dismiss="alert" class="close" aria-label="close">&times;</a>
            <strong>{{session('danger')}}</strong>
        </div>
    @endif

    <div class="row" style="margin-top: 15px;">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark arabic-fonts">المقاولين</h6>
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
                                        <th>الاسم</th>
                                        <th>الاميل</th>
                                        <th>تاريخ الاضافة</th>
                                        <th>التليفون</th>
                                        <th>تليفون الطوارئ</th>
                                        <th>action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>الاسم</th>
                                        <th>الاميل</th>
                                        <th>تاريخ الاضافة</th>
                                        <th>التليفون</th>
                                        <th>تليفون الطوارئ</th>
                                        <th>action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($contractors as $contractor)
                                        <tr>
                                            <td>{{$contractor->name}}</td>
                                            <td>{{$contractor->email}}</td>
                                            <td>{{$contractor->created_at}}</td>
                                            <td>{{$contractor->information->phone}}</td>
                                            <td>{{$contractor->information->emergency_phone}}</td>
                                            <td>
                                                <div>
                                                    <a href="{{route('contractors.show',['id'=>$contractor->id])}}">
                                                        <i class="fas fa-eye fa-2x text-success"></i>
                                                    </a>
                                                    <a href="{{route('contractors.edit',['id'=>$contractor->id])}}">
                                                        <i class="fas fa-edit fa-2x text-warning"></i>
                                                    </a>
                                                    <a href="{{route('contractors.password',['id'=>$contractor->id])}}">
                                                        <i class="fas fa-key fa-2x text-success"></i>
                                                    </a>
                                                    @if($contractor->active)
                                                        <a href="{{route('contractors.inactive',['id'=>$contractor->id])}}">
                                                            <i class="fas fa-lock fa-2x text-danger"></i>
                                                        </a>
                                                    @else
                                                        <a href="{{route('contractors.active',['id'=>$contractor->id])}}">
                                                            <i class="fas fa-unlock fa-2x text-warning"></i>
                                                        </a>
                                                    @endif
                                                    <form class="custom-form" method="post"
                                                          action="{{route('contractors.destroy',['id'=>$contractor->id])}}">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        {{csrf_field()}}
                                                        <button class="custom-button">
                                                            <i class="fas fa-trash fa-2x text-danger"></i>
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