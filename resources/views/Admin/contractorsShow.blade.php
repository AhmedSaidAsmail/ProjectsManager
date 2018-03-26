@extends('Admin.Layouts.Master')
@section('container')
    <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark arabic-fonts">{{$contractor->name}}</h5>
        </div>

        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12 top-directory">
            <ul class="list-inline arabic-fonts">
                <li class="active">
                    <span>عرض المقاولين</span>
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
                <div class="row">
                    <div class="col-md-3">الاسم</div>
                    <div class="col-md-3">{{$contractor->name}}</div>
                    <div class="col-md-3">الاميل</div>
                    <div class="col-md-3">{{$contractor->email}}</div>
                </div>
                <div class="row">
                    <div class="col-md-3">عنوان المراسلات</div>
                    <div class="col-md-3">{{$contractor->information->address}}</div>
                    <div class="col-md-3">رقم الهاتف</div>
                    <div class="col-md-3">{{$contractor->information->phone}}</div>
                </div>
                <div class="row">
                    <div class="col-md-3">الموقع</div>
                    <div class="col-md-3">{{$contractor->information->location}}</div>
                    <div class="col-md-3">الموقع الالكتروني</div>
                    <div class="col-md-3">{{$contractor->information->website}}</div>
                </div>
            </div>
        </div>
    </div>
    <div id="documents" class="arabic-fonts">
        <ul class="list-inline document-files">
            @foreach($contractor->documents as $document)
                <?php
                $fileType = getFileType($document->document_file);
                ?>
                <li>
                    <i class="fas {{$fileType['icon']}} fa-4x {{$fileType['color']}}"></i>
                    <span>{{$document->document_type}}</span>
                    <a href="{{asset('/documents/contractors/'.$document->document_file)}}" class="removeFile" title="download">
                        <i class="fas fa-download fa-lg text-danger"></i></a>
                </li>
            @endforeach
        </ul>

    </div>
@endsection
