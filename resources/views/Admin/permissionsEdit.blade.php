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
                        <h6 class="panel-title txt-dark">تعديل الصلاحيات</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="form-wrap">
                            <form method="post" action="{{route('permissions.update',['id'=>$permission->id])}}">
                                {{csrf_field()}}
                                <input type="hidden" value="PUT" name="_method">

                                <div class="form-group{!! $errors->has('name')?" has-error":null !!}">
                                    <label class="control-label mb-10 text-left">اسم المجموعة</label>
                                    <input type="text" class="form-control" name="name" value="{{$permission->name}}" placeholder="مثال : مهندسين كهرباء">
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
                                                                <option value="1" {!! $permission->contractorPermissions->information==1?"selected":null !!}>حذف</option>
                                                                <option value="2" {!! $permission->contractorPermissions->information==2?"selected":null !!}>تعديل</option>
                                                                <option value="4" {!! $permission->contractorPermissions->information==4?"selected":null !!}>عرض</option>
                                                                <option value="5" {!! $permission->contractorPermissions->information==5?"selected":null !!}>عرض و حزف</option>
                                                                <option value="6" {!! $permission->contractorPermissions->information==6?"selected":null !!}>تعديل و عرض</option>
                                                                <option value="7" {!! $permission->contractorPermissions->information==7?"selected":null !!}>تحكم كامل</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10 text-left">الجدول الزمني</label>
                                                            <select name="contract[schedule]" class="form-control">
                                                                <option value="0">اختار صلاحية</option>
                                                                <option value="1" {!! $permission->contractorPermissions->schedule==1?"selected":null !!}>حذف</option>
                                                                <option value="2" {!! $permission->contractorPermissions->schedule==2?"selected":null !!}>تعديل</option>
                                                                <option value="4" {!! $permission->contractorPermissions->schedule==4?"selected":null !!}>عرض</option>
                                                                <option value="5" {!! $permission->contractorPermissions->schedule==5?"selected":null !!}>عرض و حزف</option>
                                                                <option value="6" {!! $permission->contractorPermissions->schedule==6?"selected":null !!}>تعديل و عرض</option>
                                                                <option value="7" {!! $permission->contractorPermissions->schedule==7?"selected":null !!}>تحكم كامل</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10 text-left">الاعتمادات</label>
                                                            <select name="contract[submittals]" class="form-control">
                                                                <option value="0">اختار صلاحية</option>
                                                                <option value="1" {!! $permission->contractorPermissions->submittals==1?"selected":null !!}>حذف</option>
                                                                <option value="2" {!! $permission->contractorPermissions->submittals==2?"selected":null !!}>تعديل</option>
                                                                <option value="4" {!! $permission->contractorPermissions->submittals==4?"selected":null !!}>عرض</option>
                                                                <option value="5" {!! $permission->contractorPermissions->submittals==5?"selected":null !!}>عرض و حزف</option>
                                                                <option value="6" {!! $permission->contractorPermissions->submittals==6?"selected":null !!}>تعديل و عرض</option>
                                                                <option value="7" {!! $permission->contractorPermissions->submittals==7?"selected":null !!}>تحكم كامل</option>
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
                                                                <option value="1" {!! $permission->contractorPermissions->quantities==1?"selected":null !!}>حذف</option>
                                                                <option value="2" {!! $permission->contractorPermissions->quantities==2?"selected":null !!}>تعديل</option>
                                                                <option value="4" {!! $permission->contractorPermissions->quantities==4?"selected":null !!}>عرض</option>
                                                                <option value="5" {!! $permission->contractorPermissions->quantities==5?"selected":null !!}>عرض و حزف</option>
                                                                <option value="6" {!! $permission->contractorPermissions->quantities==6?"selected":null !!}>تعديل و عرض</option>
                                                                <option value="7" {!! $permission->contractorPermissions->quantities==7?"selected":null !!}>تحكم كامل</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10 text-left">الطلبات</label>
                                                            <select name="contract[requests]" class="form-control">
                                                                <option value="0">اختار صلاحية</option>
                                                                <option value="1" {!! $permission->contractorPermissions->requests==1?"selected":null !!}>حذف</option>
                                                                <option value="2" {!! $permission->contractorPermissions->requests==2?"selected":null !!}>تعديل</option>
                                                                <option value="4" {!! $permission->contractorPermissions->requests==4?"selected":null !!}>عرض</option>
                                                                <option value="5" {!! $permission->contractorPermissions->requests==5?"selected":null !!}>عرض و حزف</option>
                                                                <option value="6" {!! $permission->contractorPermissions->requests==6?"selected":null !!}>تعديل و عرض</option>
                                                                <option value="7" {!! $permission->contractorPermissions->requests==7?"selected":null !!}>تحكم كامل</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10 text-left">اوامر التغيير</label>
                                                            <select name="contract[changing_orders]" class="form-control">
                                                                <option value="0">اختار صلاحية</option>
                                                                <option value="1" {!! $permission->contractorPermissions->changing_orders==1?"selected":null !!}>حذف</option>
                                                                <option value="2" {!! $permission->contractorPermissions->changing_orders==2?"selected":null !!}>تعديل</option>
                                                                <option value="4" {!! $permission->contractorPermissions->changing_orders==4?"selected":null !!}>عرض</option>
                                                                <option value="5" {!! $permission->contractorPermissions->changing_orders==5?"selected":null !!}>عرض و حزف</option>
                                                                <option value="6" {!! $permission->contractorPermissions->changing_orders==6?"selected":null !!}>تعديل و عرض</option>
                                                                <option value="7" {!! $permission->contractorPermissions->changing_orders==7?"selected":null !!}>تحكم كامل</option>
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
                                                                <option value="1" {!! $permission->contractorPermissions->correspondence==1?"selected":null !!}>حذف</option>
                                                                <option value="2" {!! $permission->contractorPermissions->correspondence==2?"selected":null !!}>تعديل</option>
                                                                <option value="4" {!! $permission->contractorPermissions->correspondence==4?"selected":null !!}>عرض</option>
                                                                <option value="5" {!! $permission->contractorPermissions->correspondence==5?"selected":null !!}>عرض و حزف</option>
                                                                <option value="6" {!! $permission->contractorPermissions->correspondence==6?"selected":null !!}>تعديل و عرض</option>
                                                                <option value="7" {!! $permission->contractorPermissions->correspondence==7?"selected":null !!}>تحكم كامل</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10 text-left">مخططات التندر</label>
                                                            <select name="contract[tenders_drawings]" class="form-control">
                                                                <option value="0">اختار صلاحية</option>
                                                                <option value="1" {!! $permission->contractorPermissions->tenders_drawings==1?"selected":null !!}>حذف</option>
                                                                <option value="2" {!! $permission->contractorPermissions->tenders_drawings==2?"selected":null !!}>تعديل</option>
                                                                <option value="4" {!! $permission->contractorPermissions->tenders_drawings==4?"selected":null !!}>عرض</option>
                                                                <option value="5" {!! $permission->contractorPermissions->tenders_drawings==5?"selected":null !!}>عرض و حزف</option>
                                                                <option value="6" {!! $permission->contractorPermissions->tenders_drawings==6?"selected":null !!}>تعديل و عرض</option>
                                                                <option value="7" {!! $permission->contractorPermissions->tenders_drawings==7?"selected":null !!}>تحكم كامل</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10 text-left">رسومات الورشة</label>
                                                            <select name="contract[shop_drawings]" class="form-control">
                                                                <option value="0">اختار صلاحية</option>
                                                                <option value="1" {!! $permission->contractorPermissions->shop_drawings==1?"selected":null !!}>حذف</option>
                                                                <option value="2" {!! $permission->contractorPermissions->shop_drawings==2?"selected":null !!}>تعديل</option>
                                                                <option value="4" {!! $permission->contractorPermissions->shop_drawings==4?"selected":null !!}>عرض</option>
                                                                <option value="5" {!! $permission->contractorPermissions->shop_drawings==5?"selected":null !!}>عرض و حزف</option>
                                                                <option value="6" {!! $permission->contractorPermissions->shop_drawings==6?"selected":null !!}>تعديل و عرض</option>
                                                                <option value="7" {!! $permission->contractorPermissions->shop_drawings==7?"selected":null !!}>تحكم كامل</option>
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
                                                                <option value="1" {!! $permission->contractorPermissions->cordnation_drawings==1?"selected":null !!}>حذف</option>
                                                                <option value="2" {!! $permission->contractorPermissions->cordnation_drawings==2?"selected":null !!}>تعديل</option>
                                                                <option value="4" {!! $permission->contractorPermissions->cordnation_drawings==4?"selected":null !!}>عرض</option>
                                                                <option value="5" {!! $permission->contractorPermissions->cordnation_drawings==5?"selected":null !!}>عرض و حزف</option>
                                                                <option value="6" {!! $permission->contractorPermissions->cordnation_drawings==6?"selected":null !!}>تعديل و عرض</option>
                                                                <option value="7" {!! $permission->contractorPermissions->cordnation_drawings==7?"selected":null !!}>تحكم كامل</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10 text-left">العمال و المعدات</label>
                                                            <select name="contract[tools]" class="form-control">
                                                                <option value="0">اختار صلاحية</option>
                                                                <option value="1" {!! $permission->contractorPermissions->tools==1?"selected":null !!}>حذف</option>
                                                                <option value="2" {!! $permission->contractorPermissions->tools==2?"selected":null !!}>تعديل</option>
                                                                <option value="4" {!! $permission->contractorPermissions->tools==4?"selected":null !!}>عرض</option>
                                                                <option value="5" {!! $permission->contractorPermissions->tools==5?"selected":null !!}>عرض و حزف</option>
                                                                <option value="6" {!! $permission->contractorPermissions->tools==6?"selected":null !!}>تعديل و عرض</option>
                                                                <option value="7" {!! $permission->contractorPermissions->tools==7?"selected":null !!}>تحكم كامل</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10 text-left">الاختبارات</label>
                                                            <select name="contract[tests]" class="form-control">
                                                                <option value="0">اختار صلاحية</option>
                                                                <option value="1" {!! $permission->contractorPermissions->tests==1?"selected":null !!}>حذف</option>
                                                                <option value="2" {!! $permission->contractorPermissions->tests==2?"selected":null !!}>تعديل</option>
                                                                <option value="4" {!! $permission->contractorPermissions->tests==4?"selected":null !!}>عرض</option>
                                                                <option value="5" {!! $permission->contractorPermissions->tests==5?"selected":null !!}>عرض و حزف</option>
                                                                <option value="6" {!! $permission->contractorPermissions->tests==6?"selected":null !!}>تعديل و عرض</option>
                                                                <option value="7" {!! $permission->contractorPermissions->tests==7?"selected":null !!}>تحكم كامل</option>
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
                                                                <option value="1" {!! $permission->contractorPermissions->reports==1?"selected":null !!}>حذف</option>
                                                                <option value="2" {!! $permission->contractorPermissions->reports==2?"selected":null !!}>تعديل</option>
                                                                <option value="4" {!! $permission->contractorPermissions->reports==4?"selected":null !!}>عرض</option>
                                                                <option value="5" {!! $permission->contractorPermissions->reports==5?"selected":null !!}>عرض و حزف</option>
                                                                <option value="6" {!! $permission->contractorPermissions->reports==6?"selected":null !!}>تعديل و عرض</option>
                                                                <option value="7" {!! $permission->contractorPermissions->reports==7?"selected":null !!}>تحكم كامل</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10 text-left">مراقبة الكاميرات</label>
                                                            <select name="contract[video]" class="form-control">
                                                                <option value="0">اختار صلاحية</option>
                                                                <option value="1" {!! $permission->contractorPermissions->video==1?"selected":null !!}>حذف</option>
                                                                <option value="2" {!! $permission->contractorPermissions->video==2?"selected":null !!}>تعديل</option>
                                                                <option value="4" {!! $permission->contractorPermissions->video==4?"selected":null !!}>عرض</option>
                                                                <option value="5" {!! $permission->contractorPermissions->video==5?"selected":null !!}>عرض و حزف</option>
                                                                <option value="6" {!! $permission->contractorPermissions->video==6?"selected":null !!}>تعديل و عرض</option>
                                                                <option value="7" {!! $permission->contractorPermissions->video==7?"selected":null !!}>تحكم كامل</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10 text-left">الخطابات</label>
                                                            <select name="contract[letters]" class="form-control">
                                                                <option value="0">اختار صلاحية</option>
                                                                <option value="1" {!! $permission->contractorPermissions->letters==1?"selected":null !!}>حذف</option>
                                                                <option value="2" {!! $permission->contractorPermissions->letters==2?"selected":null !!}>تعديل</option>
                                                                <option value="4" {!! $permission->contractorPermissions->letters==4?"selected":null !!}>عرض</option>
                                                                <option value="5" {!! $permission->contractorPermissions->letters==5?"selected":null !!}>عرض و حزف</option>
                                                                <option value="6" {!! $permission->contractorPermissions->letters==6?"selected":null !!}>تعديل و عرض</option>
                                                                <option value="7" {!! $permission->contractorPermissions->letters==7?"selected":null !!}>تحكم كامل</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <button class="btn btn-primary"><i class="fa fa-plus-square-o"></i> تعديل
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