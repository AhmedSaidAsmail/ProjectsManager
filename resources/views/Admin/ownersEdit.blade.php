@extends('Admin.Layouts.Master')
@section('container')
    <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark arabic-fonts">تعديل مالك</h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12 top-directory">
            <ul class="list-inline arabic-fonts">
                <li class="active"><span>تعديل المالك</span></li>
                <li><a href="#"><span><i class="fa fa-chevron-right" aria-hidden="true"></i> اعدادات</span></a></li>
                <li><a href="{{route('admin.welcome')}}"><i class="fa fa-chevron-right" aria-hidden="true"></i> صفحة
                        البداية</a></li>
            </ul>
        </div>
        <!-- /Breadcrumb -->
    </div>
    <div class="row arabic-fonts">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">اضافة مالك</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="form-wrap">
                            <form method="post" action="{{route('owners.update',['id'=>$owner->id])}}">
                                <input type="hidden" name="_method" value="PUT">
                                {{csrf_field()}}
                                <div class="form-group{!! $errors->has('name')?" has-error":null !!}">
                                    <label class="control-label mb-10 text-left">اسم المالك</label>
                                    <input type="text" class="form-control" name="name" value="{{$owner->name}}">
                                    @if($errors->has('name'))
                                        <span class="help-block">
                                            <strong class="text-danger">{{$errors->first('name')}}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{!! $errors->has('email')?" has-error":null !!}">
                                    <label class="control-label mb-10 text-left">البريد الاكتروني</label>
                                    <input type="text" class="form-control" name="email" value="{{$owner->email}}">
                                    @if($errors->has('email'))
                                        <span class="help-block">
                                            <strong class="text-danger">{{$errors->first('email')}}</strong>
                                        </span>
                                    @endif
                                </div>
                                    <div class="form-group">
                                        <label class="control-label mb-10 text-left">الصلاحيات</label>
                                        <select name="permission_id" class="form-control" required>
                                            <option value="">اختار مجموعة صلاحيات</option>
                                            @foreach(getAllPermissions() as $permission)
                                                <option value="{{$permission->id}}"{!! $permission->id==$owner->permission_id?' selected':null !!}>{{$permission->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>



                                <div class="form-group">
                                    <button class="btn btn-primary"><i class="fa fa-plus-square-o"></i> تعديل المالك
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection