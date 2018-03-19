<div id="change_order_entry_tab" class="tab-pane fade" role="tabpanel">
    <!-- Row -->

    <div class="row">
        <d-iv class="col-md-12">
            <div class="panel panel-default card-view pa-0">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body pa-0">
                        <div class="">
                            <div class="col-lg-3 col-md-4 file-directory pa-10">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-content">
                                        <div class="file-manager">
                                            <div class="mt-20 mb-20 ml-15 mr-15">
                                                <div class="modal fade" id="uploud_new_change_order_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                <h5 class="modal-title" id="">رفع اوامر التغيير </h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{route('change-orders.store')}}" method="post" enctype="multipart/form-data">
                                                                    {{csrf_field()}}
                                                                    <input type="hidden" name="project_id" value="{{$project->id}}">
                                                                    <div class="form-group">
                                                                        <label class="control-label mb-10" for="">نوع امر التغيير</label>

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
                                                                        <input type="date" name="date" class="form-control" id="description">
                                                                        </textarea>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="message-text" class="control-label mb-10">السبب</label>
                                                                        <input type="text" name="reason" class="form-control" id="description">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="message-text" class="control-label mb-10">الوصف</label>
                                                                        <input name="description" type="text" class="form-control" id="description">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="fileupload btn btn-danger btn-rounded btn-anim btn-block"><i class="fa fa-upload"></i><span class="btn-text">Upload</span>
                                                                            <input name="document" class="upload" type="file">
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
                                                    <button class="btn btn-success btn-rounded btn-block btn-anim" data-toggle="modal" data-target="#uploud_new_change_order_model" data-whatever="@">
                                                        <i class="fa fa-pencil"></i>
                                                        <span class="btn-text">رفع امر تغيير جديد</span>
                                                    </button>
                                                </div>
                                            </div>

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
                                                    <table id="datable_1" class="table table-hover display  pb-30 custom-table" style="font-size: 12px;">
                                                        <thead>
                                                        <tr>
                                                            <th>م</th>
                                                            <th>النوع</th>
                                                            <th>التاريخ</th>
                                                            <th>السبب</th>
                                                            <th>الوصف</th>
                                                            <th>الملف</th>
                                                        </tr>
                                                        </thead>
                                                        <tfoot>
                                                        <tr>
                                                            <th>م</th>
                                                            <th>النوع</th>
                                                            <th>التاريخ</th>
                                                            <th>السبب</th>
                                                            <th>الوصف</th>
                                                            <th>الملف</th>
                                                        </tr>
                                                        </tfoot>
                                                        <tbody>
                                                        <?php $changeOrderArrangement = 1; ?>
                                                        @foreach($project->changeOrders as $changeOrder)
                                                            <tr>
                                                                <td>{{$changeOrderArrangement}}</td>
                                                                <td>{{$changeOrder->sort}}</td>
                                                                <td>{{date('d-m-Y',strtotime($changeOrder->date))}}</td>
                                                                <td>{{$changeOrder->reason}}</td>
                                                                <td>{{$changeOrder->description}}</td>
                                                                <td>
                                                                    <a href="{{asset('documents/projects/changeOrders/'.$changeOrder->document)}}">
                                                                        <i class="fas fa-cloud-download-alt"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <?php $changeOrderArrangement++; ?>
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
    <!-- /Row -->

</div>