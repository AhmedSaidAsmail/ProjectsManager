<div id="project_data_show" class="tab-pane fade active in" role="tabpanel">
    @if(in_array(auth()->user()->permission->contractorPermissions->information,[4,5,6,7]) || auth()->guard('web')->check())
        <div class="row col-md-12">
            <!-- Project data view -->
            <!-- /.row -->
            <!--- collabs -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="panel-group accordion-struct" id="accordion_1" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading activestate" role="tab" id="heading_4">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_0" aria-expanded="true">بيانات اساسيه</a>
                                    </div>
                                    <div id="collapse_0" class="panel-collapse collapse in" role="tabpanel">
                                        <div class="panel-body pa-15">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10" for=""> اسم المشروع </label>

                                                        <div class="input-group">
                                                            <div class="input-group-addon  " style="background-color:#EEEEEE;"><i class="icon-user"></i></div>
                                                            <input type="text" style="background-color:#FFFFFF; font-weight:bold;" class="form-control text-muted" id="" value="{{$project->name}}" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10" for=""> اسم المالك </label>

                                                        <div class="input-group">
                                                            <div class="input-group-addon  " style="background-color:#EEEEEE;"><i class="icon-user"></i></div>
                                                            <input type="text" style="background-color:#FFFFFF; font-weight:bold;" class="form-control text-muted" id="" value="{{$project->owner->name}}" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10" for=""> اسم المقاول </label>

                                                        <div class="input-group">
                                                            <div class="input-group-addon  " style="background-color:#EEEEEE;"><i class="icon-user"></i></div>
                                                            <input type="text" style="background-color:#FFFFFF; font-weight:bold;" class="form-control text-muted" id="" value="{{$project->contractor->name}}" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.row -->
                                            <!-- row -->
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10" for=""> قيمه العقد الاصليه </label>

                                                        <div class="input-group">
                                                            <div class="input-group-addon  " style="background-color:#EEEEEE;"><i class="icon-user"></i></div>
                                                            <input type="text" style="background-color:#FFFFFF; font-weight:bold;" class="form-control text-muted" id="" value="{{$project->contract_value}}" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10" for="">مده العقد الاصليه </label>

                                                        <div class="input-group">
                                                            <div class="input-group-addon  " style="background-color:#EEEEEE;"><i class="icon-user"></i></div>
                                                            <input type="text" style="background-color:#FFFFFF; font-weight:bold;" class="form-control text-muted" id="" value="{{dateDiff($project->contract_starting,$project->contract_ending)->days}} يوم" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10" for=""> المدينه </label>

                                                        <div class="input-group">
                                                            <div class="input-group-addon  " style="background-color:#EEEEEE;"><i class="icon-user"></i></div>
                                                            <input type="text" style="background-color:#FFFFFF; font-weight:bold;" class="form-control text-muted" id="" value="{{$project->city}}" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.row -->
                                            <!-- row -->
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10" for=""> قيمه العقد الحاليه </label>

                                                        <div class="input-group">
                                                            <div class="input-group-addon  " style="background-color:#EEEEEE;"><i class="icon-user"></i></div>
                                                            <input type="text" style="background-color:#FFFFFF; font-weight:bold;" class="form-control text-muted" id="" value="قيمه العقد الحاليه" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10" for="">مده العقد الحاليه </label>

                                                        <div class="input-group">
                                                            <div class="input-group-addon  " style="background-color:#EEEEEE;"><i class="icon-user"></i></div>
                                                            <input type="text" style="background-color:#FFFFFF; font-weight:bold;" class="form-control text-muted" id="" value="مده العقد الحاليه " readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <!-- model test -->
                                                    <div class="panel-wrapper collapse in">
                                                        <!-- sample modal content -->
                                                        <div class="modal fade meum" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                        <h5 class="modal-title" id="">بيانات مدير المشروع</h5>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="form-group">
                                                                            <label for="recipient-name" class="control-label mb-10">الاسم</label>
                                                                            <input type="text" class="form-control" id="" value="{{$project->projectManager()->engineer->name}}" readonly>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="recipient-name" class="control-label mb-10">الايميل</label>
                                                                            <input type="text" class="form-control" id="" value="{{$project->projectManager()->engineer->email}}" readonly>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="message-text" class="control-label mb-10">تليفون 1</label>
                                                                            <input type="tel" class="form-control" id="" value="{{$project->projectManager()->engineer->information->phone}}" readonly>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="message-text" class="control-label mb-10">تليفون 2</label>
                                                                            <input type="tel" class="form-control" id="" value="{{$project->projectManager()->engineer->information->phone2}}" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">اغلاق</button>
                                                                    </div>
                                                                </div>
                                                                <!-- /.modal-content -->
                                                            </div>
                                                            <!-- /.modal-dialog -->
                                                        </div>
                                                        <!-- /.modal -->
                                                    </div>
                                                    <!-- model test -->
                                                    <div class="form-group">
                                                        <label class="control-label mb-10" for=""> مدير المشروع </label>

                                                        <div class="input-group">
                                                            <div class="input-group-addon" style="background-color:#EEEEEE;"><i class="icon-user"></i></div>
                                                            <input data-toggle="modal" data-target=".meum" type="text" style="background-color:#FFFFFF; font-weight:bold;" class="form-control text-muted" id="" value="{{$project->projectManager()->engineer->name}}"
                                                                   readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading_4">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_4" aria-expanded="false">بيانات اخري</a>
                                    </div>
                                    <div id="collapse_4" class="panel-collapse collapse" role="tabpanel">
                                        <div class="panel-body pa-15">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10" for=""> عدد المباني</label>

                                                        <div class="input-group">
                                                            <div class="input-group-addon  " style="background-color:#EEEEEE;"><i class="icon-user"></i></div>
                                                            <input type="text" style="background-color:#FFFFFF; font-weight:bold;" class="form-control text-muted" id="" value="{{$project->quantity->buildings_num}}" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10" for="">مراحل المشروع </label>

                                                        <div class="input-group">
                                                            <div class="input-group-addon  " style="background-color:#EEEEEE;"><i class="icon-user"></i></div>
                                                            <input type="text" style="background-color:#FFFFFF; font-weight:bold;" class="form-control text-muted" id="" value="{{$project->quantity->steps}}" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading " role="tab" id="heading_1">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_1" aria-expanded="false">مهندسي الاستشاري</a>
                                    </div>
                                    <div id="collapse_1" class="panel-collapse collapse" role="tabpanel">
                                        <div class="panel-body pa-15">

                                            <table class="table mb-0" id="data-destiny">
                                                <thead>
                                                <tr>
                                                    <th>المهمة</th>
                                                    <th>اسم المهندس</th>
                                                    <th class="action">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($project->consultantEngineers as $consultantEngineer)
                                                    <tr>
                                                        <td>{{$consultantEngineer->consultant_engineer_position}}</td>
                                                        <td>{{$consultantEngineer->engineer->name}}</td>
                                                        <td>
                                                            <a href="{{route('engineers.show',['id'=>$consultantEngineer->engineer->id])}}">
                                                                <i class="fas fa-eye fa-lg"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            <!-- /.row -->

                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading_2">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_2" aria-expanded="false">مهندسين المقاول </a>
                                    </div>
                                    <div id="collapse_2" class="panel-collapse collapse" role="tabpanel">
                                        <div class="panel-body pa-15">
                                            <table class="table mb-0" id="data-destiny">
                                                <thead>
                                                <tr>
                                                    <th>المهمة</th>
                                                    <th>اسم المهندس</th>
                                                    <th class="action">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($project->contractorEngineers as $contractorEngineer)
                                                    <tr>
                                                        <td>{{$contractorEngineer->contractor_engineer_position}}</td>
                                                        <td>{{$contractorEngineer->engineer->name}}</td>
                                                        <td>
                                                            <a href="{{route('engineers.show',['id'=>$contractorEngineer->engineer->id])}}">
                                                                <i class="fas fa-eye fa-lg"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading_3">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_3" aria-expanded="false">منسق المالك</a>
                                    </div>
                                    <div id="collapse_3" class="panel-collapse collapse" role="tabpanel">
                                        <div class="panel-body pa-15">
                                            <table class="table mb-0" id="data-destiny">
                                                <thead>
                                                <tr>
                                                    <th>المهمة</th>
                                                    <th>اسم المهندس</th>
                                                    <th class="action">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($project->ownerEngineers as $ownerEngineer)
                                                    <tr>
                                                        <td>{{$ownerEngineer->owner_engineer_position}}</td>
                                                        <td>{{$ownerEngineer->engineer->name}}</td>
                                                        <td>
                                                            <a href="{{route('engineers.show',['id'=>$ownerEngineer->engineer->id])}}">
                                                                <i class="fas fa-eye fa-lg"></i>
                                                            </a>
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
            </div>


            <!-- collabs --->
        </div>
    @else
        <div class="row">
            <div class="col-md-12">
                <h5 class="text-center text-danger"><i class="fas fa-exclamation-triangle"></i> غير مسموح لك بالدخول علي هذه البيانات</h5>
            </div>
        </div>
    @endif
</div>