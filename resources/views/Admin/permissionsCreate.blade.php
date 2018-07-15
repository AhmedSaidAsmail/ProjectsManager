@extends('Admin.Layouts.Master')
@section('container')
    <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark arabic-fonts">اضافة الصلاحيات</h5>
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
                            <form method="post" action="{{route('permissions.store')}}">
                                {{csrf_field()}}
                                <div class="form-group{!! $errors->has('name')?" has-error":null !!}">
                                    <label class="control-label mb-10 text-left">اسم المجموعة</label>
                                    <input type="text" class="form-control" name="name" value="" placeholder="مثال : مهندسين كهرباء">
                                    @if($errors->has('type'))
                                        <span class="help-block">
                                            <strong class="text-danger">{{$errors->first('name')}}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="panel-group" id="permissions">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a href="#contracts" data-toggle="collapse" data-parent="#permissions">العقود</a>
                                        </div>
                                        <div id="contracts" class="panel-collapse collapse">
                                            <div class="panel-body" style="font-size: 12px;">
                                                <div class="row" style="margin: 0;">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10 text-left">معلومات المشروع</label>
                                                            <select name="contract[information]" class="form-control">
                                                                <option value="0">اختار صلاحية</option>
                                                                <option value="1">حذف</option>
                                                                <option value="2">تعديل</option>
                                                                <option value="4">عرض</option>
                                                                <option value="5">عرض و حزف</option>
                                                                <option value="6">تعديل و عرض</option>
                                                                <option value="7">تحكم كامل</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10 text-left">الجدول الزمني</label>
                                                            <select name="contract[schedule]" class="form-control">
                                                                <option value="0">اختار صلاحية</option>
                                                                <option value="1">حذف</option>
                                                                <option value="2">تعديل</option>
                                                                <option value="4">عرض</option>
                                                                <option value="5">عرض و حزف</option>
                                                                <option value="6">تعديل و عرض</option>
                                                                <option value="7">تحكم كامل</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10 text-left">الاعتمادات</label>
                                                            <select name="contract[submittals]" class="form-control">
                                                                <option value="0">اختار صلاحية</option>
                                                                <option value="1">حذف</option>
                                                                <option value="2">تعديل</option>
                                                                <option value="4">عرض</option>
                                                                <option value="5">عرض و حزف</option>
                                                                <option value="6">تعديل و عرض</option>
                                                                <option value="7">تحكم كامل</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" style="margin: 0;">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10 text-left">جداول الكميات</label>
                                                            <select name="contract[quantities]" class="form-control">
                                                                <option value="0">اختار صلاحية</option>
                                                                <option value="1">حذف</option>
                                                                <option value="2">تعديل</option>
                                                                <option value="4">عرض</option>
                                                                <option value="5">عرض و حزف</option>
                                                                <option value="6">تعديل و عرض</option>
                                                                <option value="7">تحكم كامل</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10 text-left">الطلبات</label>
                                                            <select name="contract[requests]" class="form-control">
                                                                <option value="0">اختار صلاحية</option>
                                                                <option value="1">حذف</option>
                                                                <option value="2">تعديل</option>
                                                                <option value="4">عرض</option>
                                                                <option value="5">عرض و حزف</option>
                                                                <option value="6">تعديل و عرض</option>
                                                                <option value="7">تحكم كامل</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10 text-left">اوامر التغيير</label>
                                                            <select name="contract[changing_orders]" class="form-control">
                                                                <option value="0">اختار صلاحية</option>
                                                                <option value="1">حذف</option>
                                                                <option value="2">تعديل</option>
                                                                <option value="4">عرض</option>
                                                                <option value="5">عرض و حزف</option>
                                                                <option value="6">تعديل و عرض</option>
                                                                <option value="7">تحكم كامل</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" style="margin: 0;">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10 text-left">المراسلات</label>
                                                            <select name="contract[correspondence]" class="form-control">
                                                                <option value="0">اختار صلاحية</option>
                                                                <option value="1">حذف</option>
                                                                <option value="2">تعديل</option>
                                                                <option value="4">عرض</option>
                                                                <option value="5">عرض و حزف</option>
                                                                <option value="6">تعديل و عرض</option>
                                                                <option value="7">تحكم كامل</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10 text-left">مخططات التندر</label>
                                                            <select name="contract[tenders_drawings]" class="form-control">
                                                                <option value="0">اختار صلاحية</option>
                                                                <option value="1">حذف</option>
                                                                <option value="2">تعديل</option>
                                                                <option value="4">عرض</option>
                                                                <option value="5">عرض و حزف</option>
                                                                <option value="6">تعديل و عرض</option>
                                                                <option value="7">تحكم كامل</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10 text-left">رسومات الورشة</label>
                                                            <select name="contract[shop_drawings]" class="form-control">
                                                                <option value="0">اختار صلاحية</option>
                                                                <option value="1">حذف</option>
                                                                <option value="2">تعديل</option>
                                                                <option value="4">عرض</option>
                                                                <option value="5">عرض و حزف</option>
                                                                <option value="6">تعديل و عرض</option>
                                                                <option value="7">تحكم كامل</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" style="margin: 0;">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10 text-left">مخططات السبليت</label>
                                                            <select name="contract[cordnation_drawings]" class="form-control">
                                                                <option value="0">اختار صلاحية</option>
                                                                <option value="1">حذف</option>
                                                                <option value="2">تعديل</option>
                                                                <option value="4">عرض</option>
                                                                <option value="5">عرض و حزف</option>
                                                                <option value="6">تعديل و عرض</option>
                                                                <option value="7">تحكم كامل</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10 text-left">العمال و المعدات</label>
                                                            <select name="contract[tools]" class="form-control">
                                                                <option value="0">اختار صلاحية</option>
                                                                <option value="1">حذف</option>
                                                                <option value="2">تعديل</option>
                                                                <option value="4">عرض</option>
                                                                <option value="5">عرض و حزف</option>
                                                                <option value="6">تعديل و عرض</option>
                                                                <option value="7">تحكم كامل</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10 text-left">الاختبارات</label>
                                                            <select name="contract[tests]" class="form-control">
                                                                <option value="0">اختار صلاحية</option>
                                                                <option value="1">حذف</option>
                                                                <option value="2">تعديل</option>
                                                                <option value="4">عرض</option>
                                                                <option value="5">عرض و حزف</option>
                                                                <option value="6">تعديل و عرض</option>
                                                                <option value="7">تحكم كامل</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" style="margin: 0;">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10 text-left">التقارير</label>
                                                            <select name="contract[reports]" class="form-control">
                                                                <option value="0">اختار صلاحية</option>
                                                                <option value="1">حذف</option>
                                                                <option value="2">تعديل</option>
                                                                <option value="4">عرض</option>
                                                                <option value="5">عرض و حزف</option>
                                                                <option value="6">تعديل و عرض</option>
                                                                <option value="7">تحكم كامل</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10 text-left">مراقبة الكاميرات</label>
                                                            <select name="contract[video]" class="form-control">
                                                                <option value="0">اختار صلاحية</option>
                                                                <option value="1">حذف</option>
                                                                <option value="2">تعديل</option>
                                                                <option value="4">عرض</option>
                                                                <option value="5">عرض و حزف</option>
                                                                <option value="6">تعديل و عرض</option>
                                                                <option value="7">تحكم كامل</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10 text-left">الخطابات</label>
                                                            <select name="contract[letters]" class="form-control">
                                                                <option value="0">اختار صلاحية</option>
                                                                <option value="1">حذف</option>
                                                                <option value="2">تعديل</option>
                                                                <option value="4">عرض</option>
                                                                <option value="5">عرض و حزف</option>
                                                                <option value="6">تعديل و عرض</option>
                                                                <option value="7">تحكم كامل</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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