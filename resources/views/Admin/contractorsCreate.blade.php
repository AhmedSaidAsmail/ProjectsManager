@extends('Admin.Layouts.Master')
@section('container')
    <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark arabic-fonts">عرض المقاولين</h5>
        </div>

        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12 top-directory">
            <ul class="list-inline arabic-fonts">
                <li class="active">
                    <span>انشاء مقاول جديد</span>
                </li>
                <li>
                    <a href="#">
                        <span><i class="fa fa-chevron-right" aria-hidden="true"></i> اعدادات</span>
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
                    <form method="" action="">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label mb-10" for="">اسم المقاول</label>

                                    <div class="input-group">
                                        <div class="input-group-addon ">
                                            <i class="icon-user"></i></div>
                                        <input type="text" class="form-control" id="" placeholder="Username">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label mb-10">البريد الالكتروني</label>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="icon-envelope-open"></i></div>
                                        <input type="email" class="form-control" id="" placeholder="Enter email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label mb-10" for="">عنوان المراسلات</label>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="icon-lock"></i></div>
                                        <input type="text" class="form-control" id="" placeholder="عنوان المراسلات">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label mb-10" for="">رقم الهاتف</label>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="icon-user"></i></div>
                                        <input type="text" class="form-control" id="" placeholder="رقم الهاتف">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label mb-10" for="">رقم الهاتف</label>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="icon-user"></i></div>
                                        <input type="number" class="form-control" id="" placeholder="رقم الهاتف">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label mb-10" for="">هاتف الطوارئ</label>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="icon-user"></i></div>
                                        <input type="number" class="form-control" id="" placeholder="رقم الهاتف">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label mb-10" for="">الاوراق </label>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="icon-user"></i>
                                        </div>
                                        <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                            <option value="" selected>اختار ملف</option>
                                            <option value="Category 4">شهاده التامينات الاجتماعيه</option>
                                            <option value="Category 4">الغرفه التجاريه</option>
                                            <option value="Category 4">شهاده السعوده</option>
                                            <option value="Category 4">شهاده التصنيف</option>
                                            <option value="Category 4">شهادة الزكاة</option>
                                            <option value="Category 4">شهادة الدخل</option>
                                            <option value="Category 4">سبقه الاعمال</option>


                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-30">
                                    <label class="control-label mb-10">نوع المستند</label>
                                    <input type="text" class="form-control" value="" name="document_type[]" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-30">
                                    <label class="control-label mb-10">المستند</label>

                                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                        <div class="form-control" data-trigger="fileinput">
                                            <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                            <span class="fileinput-filename"></span>
                                        </div>
														<span class="input-group-addon fileupload btn btn-info btn-anim btn-file">
                                                            <i class="fa fa-upload"></i>
                                                            <span class="fileinput-new btn-text">اختار ملف</span>
                                                            <span class="fileinput-exists btn-text">تغيير</span>
														<input type="file" name="...">
														</span>
                                        <a href="#" class="input-group-addon btn btn-danger btn-anim fileinput-exists"
                                           data-dismiss="fileinput">
                                            <i class="fa fa-trash"></i>
                                            <span class="btn-text"> ازالة</span>
                                        </a>
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
@endsection