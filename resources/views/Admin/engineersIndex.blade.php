@extends('Admin.Layouts.Master')
@section('container')
    <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark arabic-fonts">عرض المهندسين</h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12 top-directory">
            <ul class="list-inline arabic-fonts">
                <li class="active"><span>المهندسين</span></li>
                <li><a href="#"><span><i class="fa fa-chevron-right" aria-hidden="true"></i> اعدادات</span></a></li>
                <li><a href="{{route('admin.welcome')}}">
                        <i class="fa fa-chevron-right" aria-hidden="true"></i> صفحة البداية</a></li>
            </ul>
        </div>
        <!-- /Breadcrumb -->
    </div>
    @if(session('success'))
        <div class="alert alert-success alert-dismissable">
            <a href="#" data-dismiss="alert" class="close" aria-label="close">&times;</a>
            <strong>{{session('success')}}</strong>
        </div>
    @endif
    @if(session('danger'))
        <div class="alert alert-danger alert-dismissable">
            <a href="#" data-dismiss="alert" class="close" aria-label="close">&times;</a>
            <strong>{{session('danger')}}</strong>
        </div>
    @endif

    <div class="row" style="margin-top: 15px;">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark arabic-fonts">المهندسين</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="table-wrap">
                            <div class="table-responsive">
                                <table id="datable_1" class="table table-hover display  pb-30 custom-table"
                                       style="font-size: 12px;">
                                    <thead>
                                    <tr>
                                        <th>الاسم</th>
                                        <th>الاميل</th>
                                        {!! isset($relatedTo)?'<th>الشركة</th>':null !!}
                                        <th>تاريخ الاضافة</th>
                                        <th>التليفون</th>
                                        <th>النوع</th>
                                        <th>action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>الاسم</th>
                                        <th>الاميل</th>
                                        {!! isset($relatedTo)?'<th>الشركة</th>':null !!}
                                        <th>تاريخ الاضافة</th>
                                        <th>التليفون</th>
                                        <th>النوع</th>
                                        <th>action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($engineers as $engineer)
                                        <tr>
                                            <td>{{$engineer->name}}</td>
                                            <td>{{$engineer->email}}</td>
                                            @if(isset($relatedTo))
                                                <td>
                                                    <?php
                                                    switch ($relatedTo) {
                                                        case "contractor":
                                                            echo $engineer->contractor->name;
                                                            break;
                                                        case "consultant":
                                                            echo $engineer->consultant->name;
                                                            break;
                                                        case "owner":
                                                            echo $engineer->owner->name;
                                                            break;
                                                    }
                                                    ?>
                                                </td>
                                            @endif
                                            <td>{{$engineer->created_at}}</td>
                                            <td>{{$engineer->information->phone}}</td>
                                            <td>{{$engineer->information->type}}</td>
                                            <td>
                                                <div>
                                                    <a href="{{route('engineers.show',['id'=>$engineer->id])}}">
                                                        <i class="fas fa-eye fa-lg text-success"></i>
                                                    </a>
                                                    <a href="{{route('engineers.edit',['id'=>$engineer->id])}}">
                                                        <i class="fas fa-edit fa-lg text-warning"></i>
                                                    </a>
                                                    <a href="{{route('engineers.password',['id'=>$engineer->id])}}">
                                                        <i class="fas fa-key fa-lg text-success"></i>
                                                    </a>
                                                    @if($engineer->active)
                                                        <a href="{{route('engineers.inactive',['id'=>$engineer->id])}}">
                                                            <i class="fas fa-lock fa-lg text-danger"></i>
                                                        </a>
                                                    @else
                                                        <a href="{{route('engineers.active',['id'=>$engineer->id])}}">
                                                            <i class="fas fa-unlock fa-lg text-warning"></i>
                                                        </a>
                                                    @endif
                                                    <form class="custom-form" method="post"
                                                          action="{{route('engineers.destroy',['id'=>$engineer->id])}}">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        {{csrf_field()}}
                                                        <button class="custom-button">
                                                            <i class="fas fa-trash-alt fa-lg text-danger"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection