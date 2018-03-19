<div id="planning_tab" class="tab-pane fade" role="tabpanel">
    <!-- Row -->

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default card-view pa-0">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body pa-0">
                        <div class="">
                            <div class="col-lg-3 col-md-4 file-directory pa-0">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-content">
                                        <div class="file-manager">
                                            <div class="mt-20 mb-20 ml-15 mr-15">
                                                <div class="modal fade" id="uploud_new_tenderplan_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                <h5 class="modal-title" id="">رفع مخططات التندر</h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{route('tenders.store')}}" method="post" enctype="multipart/form-data">
                                                                    <input type="hidden" name="project_id" value="{{$project->id}}">
                                                                    {{csrf_field()}}
                                                                    <div class="form-group">
                                                                        <label class="control-label mb-10" for="">نوع المخطط</label>

                                                                        <div class="input-group">
                                                                            <div class="input-group-addon" style="background-color:#BDBDBD;"><i class="icon-user"></i></div>
                                                                            <select name="sort" class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                                                <option value="">== اختر تصنيف ==</option>
                                                                                <option value="structural">انشائي</option>
                                                                                <option value="architectural">معماري</option>
                                                                                <option value="electrically">كهرباء</option>
                                                                                <option value="mechanics">ميكانيكا</option>
                                                                                <option value="general">موقع عام</option>
                                                                                <option value="other">اخري</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="message-text" class="control-label mb-10">التاريخ</label>
                                                                        <input name="date" type="date" class="form-control" id="description">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="message-text" class="control-label mb-10">الوصف</label>
                                                                        <input name="description" type="text" class="form-control" id="description">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="fileupload btn btn-danger btn-rounded btn-anim btn-block"><i class="fa fa-upload"></i><span class="btn-text">Upload</span>
                                                                            <input name="document" class="upload" type="file" multiple>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="modal-footer">
                                                                            <input type="submit" value="حفظ" class="btn btn-success btn-rounded btn-block">
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button class="btn btn-success btn-rounded btn-block btn-anim" data-toggle="modal" data-target="#uploud_new_tenderplan_model" data-whatever="@"><i class="fa fa-pencil"></i><span
                                                                class="btn-text">رفع مخطط تندر جديد</span>
                                                    </button>
                                                </div>

                                            </div>
                                            <div class="pl-15 mb-30"><a href="#" class="file-control active">المعماري</a> <a href="#" class="file-control">الانشائي</a> <a href="#" class="file-control">الميكانيكا</a> <a href="#" class="file-control">الكهرباء</a> <a
                                                        href="#" class="file-control">الموقع العام</a></div>
                                            <h6 class="pl-15 mb-10">بحث</h6>
                                            <ul class="tag-list pl-15 pr-15">
                                                <form action="" method="">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10" for="">نوع المخطط</label>

                                                        <div class="input-group">
                                                            <div class="input-group-addon" style="background-color:#BDBDBD;"><i class="icon-user"></i></div>
                                                            <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                                <option value="">اختر واحد</option>
                                                                <option value="Category 2">مساحي</option>
                                                                <option value="Category 1">انشائي</option>
                                                                <option value="Category 2">معماري</option>
                                                                <option value="Category 2">ميكانيكا</option>
                                                                <option value="Category 2">كهرباء</option>
                                                                <option value="Category 2">موقع عام</option>
                                                                <option value="Category 2">اخري</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="message-text" class="control-label mb-10">من التاريخ</label>
                                                        <input type="date" class="form-control" id="description">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="message-text" class="control-label mb-10">الي التاريخ</label>
                                                        <input type="date" class="form-control" id="description">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="modal-footer">

                                                            <button type="button" class="btn btn-success btn-rounded btn-block">بحث<i class="fa fa-search"></i></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-8 file-sec pt-20">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="table-wrap">
                                                <div class="table-responsive">
                                                    <table id="pro_list" class="table table-hover display  pb-30">
                                                        <thead>
                                                        <tr>
                                                            <th>م</th>
                                                            <th>النوع</th>
                                                            <th>التاريخ</th>
                                                            <th>الوصف</th>
                                                            <th>الملف</th>
                                                        </tr>
                                                        </thead>
                                                        <tfoot>
                                                        <tr>
                                                            <th>م</th>
                                                            <th>النوع</th>
                                                            <th>التاريخ</th>
                                                            <th>الوصف</th>
                                                            <th>الملف</th>
                                                        </tr>
                                                        </tfoot>
                                                        <tbody>
                                                        <?php $tendersArrangement = 1; ?>
                                                        @foreach($project->tenders as $tender)
                                                            <tr>
                                                                <td>{{$tendersArrangement}}</td>
                                                                <td>{{$tender->sort}}</td>
                                                                <td>{{date('d-m-Y',strtotime($tender->date))}}</td>
                                                                <td>{{$tender->description}}</td>
                                                                <td>
                                                                    <a href="{{asset('documents/projects/tenders/'.$tender->document)}}">
                                                                        <i class="fas fa-cloud-download-alt"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <?php $tendersArrangement++; ?>
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
                </div>
            </div>
        </div>
    </div>
    <!-- /Row -->

</div>