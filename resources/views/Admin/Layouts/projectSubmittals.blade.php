<div id="Submetal_tab" class="tab-pane fade" role="tabpanel">
    <!-- Row -->

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="modal fade" id="add_new_submetal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h5 class="modal-title" id="">انشاء صبميتال جديد</h5>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('submittals.store')}}" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="project_id" value="{{$project->id}}">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label class="control-label mb-10" for="">نوع الصبميتال</label>

                                        <div class="input-group">
                                            <div class="input-group-addon" style="background-color:#BDBDBD;"><i class="icon-user"></i></div>
                                            <select name="sort" class="form-control" data-placeholder="اختر واحده" tabindex="1">
                                                <option value="">== اختر واحدا ==</option>
                                                <option value="sample approval">اعتماد عينه</option>
                                                <option value="supplier approval">اعتماد مخططات الورشه</option>
                                                <option value="shop drawing approval ">اعتماد موردين</option>
                                                <option value="subcontractor approval">اعتماد مقاول باطن</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label mb-10">رقم الصبميتال</label>

                                        <div class="input-group">
                                            <div class="input-group-addon" style="background-color:#BDBDBD;">
                                                <i class="icon-user"></i></div>
                                            <input type="number" name="number" class="form-control" id="recipient-name1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label mb-10"> رقم البندالمرتبط</label>

                                        <div class="input-group">
                                            <div class="input-group-addon" style="background-color:#BDBDBD;"><i class="icon-user"></i></div>
                                            <input type="text" name="related_item" class="form-control" id="recipient-name1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="control-label mb-10">التاريخ</label>

                                        <div class="input-group">
                                            <div class="input-group-addon" style="background-color:#BDBDBD;"><i class="icon-user"></i></div>
                                            <input type="date" name="date" class="form-control" id="description">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="control-label mb-10">الوصف</label>

                                        <div class="input-group">
                                            <div class="input-group-addon" style="background-color:#BDBDBD;"><i class="icon-user"></i></div>
                                            <input type="text" name="description" class="form-control" id="description">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="fileupload btn btn-danger btn-rounded btn-anim btn-block">
                                            <i class="fa fa-upload"></i><span class="btn-text">Upload</span>
                                            <input class="upload" name="document" type="file" multiple>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="form-group">
                                            <input type="submit" value="حفظ" class="btn btn-success btn-rounded btn-block">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-success btn-rounded btn-block btn-anim" data-toggle="modal" data-target="#add_new_submetal" data-whatever="@"><i class="fa fa-pencil"></i><span class="btn-text">ارفاق صبميتال جديد</span></button>
                <div class="pa-10">
                    <button class="btn btn-primary btn-rounded btn-block btn-anim"><i class="fa fa-search"></i><span class="btn-text">بحث</span></button>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="table-wrap">
                            <div class="table-responsive">
                                <table id="pro_list" class="table table-hover display  pb-30">
                                    <thead>
                                    <tr>
                                        <th>م</th>
                                        <th>الرقم</th>
                                        <th>البند</th>
                                        <th>التاريخ</th>
                                        <th>النوع</th>
                                        <th>الوصف</th>
                                        <th>الملف</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>م</th>
                                        <th>الرقم</th>
                                        <th>البند</th>
                                        <th>التاريخ</th>
                                        <th>النوع</th>
                                        <th>الوصف</th>
                                        <th>الملف</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php $arrangement = 1; ?>
                                    @foreach($project->submittals as $submittal)
                                        <tr>
                                            <td>{{$arrangement}}</td>
                                            <td>{{$submittal->number}}</td>
                                            <td>{{$submittal->related_item}}</td>
                                            <td>{{date('d-m-Y',strtotime($submittal->date))}}</td>
                                            <td>{{Lang::get('terms.'.$submittal->sort)}}</td>
                                            <td>{{$submittal->description}}</td>
                                            <td><a href="_singlepro.php?pronum=3">
                                                    <button class="btn btn-info"></button>
                                                </a></td>
                                        </tr>
                                        <?php $arrangement++; ?>
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
    <!-- /Row -->
</div>