@extends('Admin.Layouts.Master')
@section('container')
    <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark arabic-fonts">اضافة انواع المهندسين</h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12 top-directory">
            <ul class="list-inline arabic-fonts">
                <li class="active"><span>اضافة نوع مهندسين</span></li>
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
                        <h6 class="panel-title txt-dark">اضافة نوع مهندسين</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="form-wrap">
                            <form method="post" action="{{route('engineer-types.update',['id'=>$type->id])}}">
                                <input type="hidden" name="_method" value="PUT">
                                {{csrf_field()}}
                                <div class="form-group{!! $errors->has('type')?" has-error":null !!}">
                                    <label class="control-label mb-10 text-left">اسم المجموعة</label>
                                    <input type="text" class="form-control" name="type" value="{{$type->type}}"
                                           placeholder="مثال : مهندسين كهرباء">
                                    @if($errors->has('type'))
                                        <span class="help-block">
                                            <strong class="text-danger">{{$errors->first('type')}}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group mb-30">
                                    <label class="control-label mb-10 text-left">الصلاحيات</label>

                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox1" type="checkbox" value="1" name="add" {{$type->roles->add?'checked="checked"':null}}>
                                        <label for="checkbox1">
                                            اضافة
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox2" type="checkbox" value="1" name="edit" {{$type->roles->edit?'checked="checked"':null}}>
                                        <label for="checkbox2">
                                            تعديل
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox3" type="checkbox" value="1" name="delete" {{$type->roles->delete?'checked="checked"':null}}>
                                        <label for="checkbox3">
                                            حذف
                                        </label>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <button class="btn btn-primary"><i class="fa fa-plus-square-o"></i> اضافة مجموعة
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