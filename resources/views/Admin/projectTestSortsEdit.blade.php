@extends('Admin.Layouts.Master')
@section('container')
    <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark arabic-fonts">الاستشاريين</h5>
        </div>

        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12 top-directory">
            <ul class="list-inline arabic-fonts">
                <li class="active">
                    <span>انشاء اختبار</span>
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
                    <form method="post" action="{{route('test-sorts.update',['id'=>$sort->id])}}">
                        {{csrf_field()}}
                        <input type="hidden" value="PUT" name="_method">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group{!! $errors->has('name')?" has-error":null !!}">
                                    <label class="control-label mb-10" for="">اسم الاختبار</label>

                                    <div class="input-group">
                                        <div class="input-group-addon ">
                                            <i class="icon-user"></i></div>
                                        <input type="text" class="form-control" value="{{$sort->name}}" name="name"
                                               placeholder="اسم الاختبار">
                                    </div>
                                    @if($errors->has('name'))
                                        <span class="help-block">
                                            <strong class="text-danger">{{$errors->first('name')}}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label mb-10">تحت بند</label>
                                    <select name="related_to" class="form-control">
                                        <option value="">== اختر تصنيف ==</option>
                                        <option value="structural" {!! $sort->related_to=="structural"?'selected="selected"':null !!}>انشائي</option>
                                        <option value="architectural" {!! $sort->related_to=="architectural"?'selected="selected"':null !!}>معماري</option>
                                        <option value="electrically" {!! $sort->related_to=="electrically"?'selected="selected"':null !!}>كهرباء</option>
                                        <option value="mechanics" {!! $sort->related_to=="mechanics"?'selected="selected"':null !!}>ميكانيكا</option>
                                        <option value="general" {!! $sort->related_to=="general"?'selected="selected"':null !!}>موقع عام</option>
                                        <option value="other" {!! $sort->related_to=="other"?'selected="selected"':null !!}>اخري</option>
                                    </select>
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
