@extends('Admin.Layouts.Master')
@section('container')
    <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark arabic-fonts">تعديل مهندس</h5>
        </div>

        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12 top-directory">
            <ul class="list-inline arabic-fonts">
                <li class="active">
                    <span>تعديل مهندس</span>
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
                    <form method="post" action="{{route('engineers.update',['id'=>$engineer->id])}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="PUT">

                        <div class="row">
                            <div class="col-md-2">
                                <div class="pull-left">
                                    <h6 class="panel-title txt-dark">نوع المهندس</h6>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-10 mb-20">
                                <div class="form-group" data-ajax--url="{{route('engineers.getBelongs')}}">
                                    <div class="radio-list">
                                        <div class="radio-inline pl-0">
                                            <span class="radio radio-info">
                                                <input type="radio" name="chooseBelongsTo[]" id="radio_5" value="consultant" {!! !is_null($engineer->consultant_id)?"checked":null !!}>
                                                <label for="radio_5">استشاري</label>
                                            </span>
                                        </div>
                                        <div class="radio-inline">
                                            <span class="radio radio-info">
                                                <input type="radio" name="chooseBelongsTo[]" id="radio_6" value="contractor" {!! !is_null($engineer->contractor_id)?"checked":null !!}>
                                                <label for="radio_6">مقاول </label>
                                            </span>
                                        </div>
                                        <div class="radio-inline">
                                            <span class="radio radio-info">
                                                <input type="radio" name="chooseBelongsTo[]" id="radio_7" value="owner" {!! !is_null($engineer->owner_id)?"checked":null !!}>
                                                <label for="radio_7">مالك </label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group{!! $errors->has('name')?" has-error":null !!}">
                                    <label class="control-label mb-10" for="">اسم المهندس</label>

                                    <div class="input-group">
                                        <div class="input-group-addon ">
                                            <i class="icon-user"></i></div>
                                        <input type="text" class="form-control" value="{{$engineer->name}}" name="name"
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
                                        <input type="email" value="{{$engineer->email}}" class="form-control" name="email"
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
                                <div class="form-group">
                                    <label class="control-label mb-10" for="">اختر الشركه التابع لها</label>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fas fa-building"></i>
                                        </div>
                                        <select id="belongTo" class="form-control" disabled>
                                            <option value="">{{$engineer->follow()->name}}</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label mb-10" for="">صفه المهندس</label>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fas fa-suitcase"></i>
                                        </div>
                                        <select class="form-control" name="type" tabindex="1">
                                            <option value="civil" {!! $engineer->information->type=="civil"?"selected":null !!}>مدني</option>
                                            <option value="architect" {!! $engineer->information->type=="architect"?"selected":null !!}>معماري</option>
                                            <option value="electrical" {!! $engineer->information->type=="electrical"?"selected":null !!}>كهرباء</option>
                                            <option value="mechanical" {!! $engineer->information->type=="mechanical"?"selected":null !!}>ميكانيكا</option>
                                            <option value="structural" {!! $engineer->information->type=="structural"?"selected":null !!}>انشائي</option>
                                            <option value="monitor" {!! $engineer->information->type=="monitor"?"selected":null !!}>مراقب</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group {!! $errors->has('phone')?" has-error":null !!}">
                                    <label class="control-label mb-10" for="">رقم الهاتف</label>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-mobile fa-lg"></i></div>
                                        <input type="text" value="{{$engineer->information->phone}}" class="form-control" name="phone"
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
                                            <i class="fa fa-mobile fa-lg"></i></div>
                                        <input type="text" value="{{$engineer->information->phone2}}" class="form-control" name="phone2"
                                               placeholder="رقم الهاتف">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label mb-10">الصلاحيات</label>
                                    <select name="permission_id" class="form-control" required>
                                        <option value="">اختار مجموعة صلاحيات</option>
                                        @foreach(getAllPermissions() as $permission)
                                            <option value="{{$permission->id}}"{!! $permission->id==$engineer->permission_id?' selected':null !!}>{{$permission->name}}</option>
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
                                            <i class="fa fa-file-text"></i>
                                        </div>
                                        <select class="form-control" id="selectDocuments">
                                            <option value="" selected>اختار ملف</option>
                                            <option value="اوراق الاعتماد">اوراق الاعتماد</option>
                                            <option value="السيره الذاتيه">السيره الذاتيه</option>
                                            <option value="العقد">العقد</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="documents">
                            <?php $sortOrder = 0; ?>
                            <ul class="list-inline document-files">
                                @foreach($engineer->documents as $document)
                                    <?php
                                    $fileType = getFileType($document->document_file);
                                    ?>
                                    <li>
                                        <input type="hidden" name="document_id[{{$sortOrder}}]"
                                               value="{{$document->id}}">
                                        <input type="hidden" name="document_type[{{$sortOrder}}]"
                                               value="{{$document->document_type}}">
                                        <input type="hidden" name="document_file[{{$sortOrder}}]"
                                               value="{{$document->document_file}}">
                                        <i class="fas {{$fileType['icon']}} fa-4x {{$fileType['color']}}"></i>
                                        <span>{{$document->document_type}}</span>
                                        <a href="#" class="removeFile" title="delete"><i
                                                    class="fas fa-minus-square fa-lg text-danger"></i></a>
                                    </li>

                                    <?php $sortOrder++; ?>
                                @endforeach
                            </ul>

                        </div>
                        <button type="submit" class="btn btn-success mr-10">
                            <i class="fas fa-bolt"></i>
                            تعديل
                        </button>
                        <button type="submit" class="btn btn-default">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="documentsInputs" style="display: none">
        <div class="row" data-sort-order="{{$sortOrder}}">
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
                var startingIndex = htmlContains.find('.row').attr('data-sort-order');
                var inputType = htmlContains.find("input[name^='document_type']");
                var inputFile = htmlContains.find("input[name^='document_file']");
                var index = getIndex(inputDistention, startingIndex);
                htmlContains.find('.row').attr('data-sort-order', index);
                inputType.attr('value', inputValue);
                inputType.attr('name', "document_type[" + index + "]");
                inputFile.attr('name', "document_file[" + index + "]");
            }

            function getIndex(inputDistention, index) {
                var lastRow = inputDistention.find("div.row:last-of-type");
                var index = parseInt(index);
                if (lastRow.length) {
                    index = parseInt(lastRow.attr('data-sort-order')) + 1;
                }
                return index;

            }

            $("a.removeFile").click(function (event) {
                event.preventDefault();
                var li = $(this).closest('li');
                li.remove();
            });
            $("input[name='chooseBelongsTo[]']").click(function () {
                var value = $(this).val();
                var targetInput = $("#belongTo");
                var url = $(this).closest('.form-group').attr('data-ajax--url');
                targetInput.attr('name', value + "_id");
                targetInput.prop('disabled', false);
                $.ajax({
                    url: url,
                    type: "get",
                    data: {belongsTo: value},
                    success: function (response) {
                        targetInput.html(response);
                    }
                });
            });
        });
    </script>
@endsection