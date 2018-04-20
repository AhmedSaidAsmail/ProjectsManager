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
                    <form method="post" action="{{route('contractors.store')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group{!! $errors->has('name')?" has-error":null !!}">
                                    <label class="control-label mb-10" for="">اسم المقاول</label>

                                    <div class="input-group">
                                        <div class="input-group-addon ">
                                            <i class="icon-user"></i></div>
                                        <input type="text" class="form-control" value="{{old('name')}}" name="name"
                                               placeholder="Username">
                                    </div>
                                    @if($errors->has('name'))
                                        <span class="help-block">
                                            <strong class="text-danger">{{$errors->first('name')}}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group{!! $errors->has('email')?" has-error":null !!}">
                                    <label class="control-label mb-10">البريد الالكتروني</label>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="icon-envelope-open"></i></div>
                                        <input type="email" value="{{old('email')}}" class="form-control" name="email"
                                               placeholder="Enter email">
                                    </div>
                                    @if($errors->has('email'))
                                        <span class="help-block">
                                            <strong class="text-danger">{{$errors->first('email')}}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group{!! $errors->has('address')?" has-error":null !!}">
                                    <label class="control-label mb-10" for="">عنوان المراسلات</label>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="icon-lock"></i></div>
                                        <input type="text" value="{{old('address')}}" class="form-control"
                                               name="address" placeholder="عنوان المراسلات">
                                    </div>
                                    @if($errors->has('address'))
                                        <span class="help-block">
                                            <strong class="text-danger">{{$errors->first('address')}}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group {!! $errors->has('phone')?" has-error":null !!}">
                                    <label class="control-label mb-10" for="">رقم الهاتف</label>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="icon-user"></i></div>
                                        <input type="text" value="{{old('phone')}}" class="form-control" name="phone"
                                               placeholder="رقم الهاتف">
                                    </div>
                                    @if($errors->has('phone'))
                                        <span class="help-block">
                                            <strong class="text-danger">{{$errors->first('phone')}}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label mb-10" for="">رقم الهاتف</label>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="icon-user"></i></div>
                                        <input type="text" class="form-control" name="phone2"
                                               placeholder="رقم الهاتف">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group{!! $errors->has('emergency-phone')?" has-error":null !!}">
                                    <label class="control-label mb-10" for="">هاتف الطوارئ</label>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="icon-user"></i></div>
                                        <input type="number" value="{{old('emergency_phone')}}" class="form-control"
                                               name="emergency_phone" placeholder="رقم الهاتف">
                                    </div>
                                    @if($errors->has('emergency_phone'))
                                        <span class="help-block">
                                            <strong class="text-danger">{{$errors->first('emergency_phone')}}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>الصلاحيات</label>
                                    <select name="permission_id" class="form-control" required>
                                        <option value="">اختار مجموعة صلاحيات</option>
                                        @foreach(getAllPermissions() as $permission)
                                            <option value="{{$permission->id}}">{{$permission->name}}</option>
                                        @endforeach
                                    </select>
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
                                        <select class="form-control" id="selectDocuments">
                                            <option value="" selected>اختار ملف</option>
                                            <option value="شهاده التامينات الاجتماعيه">شهاده التامينات الاجتماعيه
                                            </option>
                                            <option value="الغرفه التجاريه">الغرفه التجاريه</option>
                                            <option value="شهاده السعوده">شهاده السعوده</option>
                                            <option value="شهاده التصنيف">شهاده التصنيف</option>
                                            <option value="شهادة الزكاة">شهادة الزكاة</option>
                                            <option value="شهادة الدخل">شهادة الدخل</option>
                                            <option value="سبقه الاعمال">سبقه الاعمال</option>


                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="documents">
                            <!-- documents rows -->
                        </div>

                        <button type="submit" class="btn btn-success mr-10">Submit</button>
                        <button type="submit" class="btn btn-default">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="documentsInputs" style="display: none">
        <div class="row" data-sort-order="0">
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
                        <span class="input-group-addon fileupload btn btn-success btn-anim btn-file">
                            <i class="fa fa-upload"></i>
                            <span class="fileinput-new btn-text">اختار ملف</span>
                            <span class="fileinput-exists btn-text">تغيير</span>
                            <input type="file" name="document_file[]">
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
    </div>
@endsection
@section('additional-css')
    <link href="{{asset('template/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css')}}"
          rel="stylesheet" type="text/css"/>
@endsection
@section('additional-js')
    <script src="{{asset('template/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js')}}"></script>
    <script>
        $(function () {
            $("select#selectDocuments").change(function () {
                var value = $(this).val();
                var inputHtml = $("#documentsInputs");
                var inputDistention = $("#documents");
                sortInputsArray(inputHtml, value, inputDistention);
                inputDistention.append(inputHtml.html());
                var removeRow = $("a.fileinput-exists");
                removeRow.click(function (event) {
                    var linkRow = $(this).closest('.row');
                    linkRow.empty();
                });

            });
            function sortInputsArray(htmlContains, inputValue, inputDistention) {
                var inputType = htmlContains.find("input[name^='document_type']");
                var inputFile = htmlContains.find("input[name^='document_file']");
                var index = getIndex(inputDistention);
                htmlContains.find('.row').attr('data-sort-order', index);
                inputType.attr('value', inputValue);
                inputType.attr('name', "document_type[" + index + "]");
                inputFile.attr('name', "document_file[" + index + "]");
            }

            function getIndex(inputDistention) {
                var lastRow = inputDistention.find("div.row:last-of-type");
                var index = 0
                if (lastRow.length) {
                    index = parseInt(lastRow.attr('data-sort-order')) + 1;
                }
                return index;

            }

        });
    </script>
@endsection