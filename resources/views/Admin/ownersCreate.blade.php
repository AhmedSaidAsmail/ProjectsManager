@extends('Admin.Layouts.Master')
@section('container')
    <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark arabic-fonts">عرض الملاك</h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12 top-directory">
            <ul class="list-inline arabic-fonts">
                <li class="active"><span>عرض الملاك</span></li>
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
                            <form method="post" action="{{route('owners.store')}}">
                                {{csrf_field()}}
                                <div class="form-group{!! $errors->has('name')?" has-error":null !!}">
                                    <label class="control-label mb-10 text-left">اسم المالك</label>
                                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                                    @if($errors->has('name'))
                                        <span class="help-block">
                                            <strong class="text-danger">{{$errors->first('name')}}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{!! $errors->has('email')?" has-error":null !!}">
                                    <label class="control-label mb-10 text-left">البريد الاكتروني</label>
                                    <input type="text" class="form-control" name="email" value="{{old('email')}}"
                                           placeholder="مثال : admin@admin.com">
                                    @if($errors->has('email'))
                                        <span class="help-block">
                                            <strong class="text-danger">{{$errors->first('email')}}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label mb-10 text-left">الصلاحيات</label>
                                            <select name="permission_id" class="form-control" required>
                                                <option value="">اختار مجموعة صلاحيات</option>
                                                @foreach(getAllPermissions() as $permission)
                                                    <option value="{{$permission->id}}">{{$permission->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group{!! $errors->has('password')?" has-error":null !!}">
                                            <label class="control-label mb-10 text-left">الرقم السري</label>
                                            <input class="form-control" name="password" type="password">
                                            @if($errors->has('password'))
                                                <span class="help-block">
                                            <strong class="text-danger">{{$errors->first('password')}}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label mb-10 text-left">تاكيد الرقم السري</label>
                                            <input class="form-control" name="password_confirmation" type="password">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-primary"><i class="fa fa-plus-square-o"></i> اضافة مالك
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