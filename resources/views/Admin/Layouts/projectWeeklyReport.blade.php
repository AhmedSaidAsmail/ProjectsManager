<div id="dropdown_13" class="tab-pane fade " role="tabpanel">
    @if(in_array(auth()->user()->permission->contractorPermissions->reports,[4,5,6,7]) || auth()->guard('web')->check())
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    @if(in_array(auth()->user()->permission->contractorPermissions->reports,[7]) || auth()->guard('web')->check())
                        <a class="btn btn-success btn-rounded btn-block btn-anim" href="{{route('weekly-report.create',['projectId'=>$project->id])}}">
                            <i class="fa fa-pencil"></i><span class="btn-text">عمل تقرير جديد</span>
                        </a>
                    @endif

                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">

                            <div class="col-lg-12 col-md-12 file-sec pt-20">
                                <div class="table-wrap">
                                    <div class="table-responsive" id="project-submittals">
                                        <table id="pro_list" class="table table-hover display  pb-30">
                                            <thead>
                                            <tr>
                                                <th>م</th>
                                                <th>تاريخ بداية التقرير</th>
                                                <th>تاريخ نهاية التقرير</th>
                                                <th>عرض التقرير</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>م</th>
                                                <th>تاريخ بداية التقرير</th>
                                                <th>تاريخ نهاية التقرير</th>
                                                <th>عرض التقرير</th>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                            <?php $weeklyReportArrangement = 1; ?>
                                            @foreach($project->weeklyReports as $weeklyReport)
                                                <tr>
                                                    <td>{{$weeklyReportArrangement}}</td>
                                                    <td>{{$weeklyReport->starting_date}}</td>
                                                    <td>{{$weeklyReport->ending_date}}</td>
                                                    <td>
                                                        <a href="{{route('weekly-report.show',['projectId'=>$project->id,'id'=>$weeklyReport->id])}}" target="_blank">
                                                            <i class="fas fa-print fa-2x text-warning"></i>
                                                        </a>
                                                        <a href="{{route('weekly-report.edit',['projectId'=>$project->id,'id'=>$weeklyReport->id])}}" target="_blank">
                                                            <i class="fas fa-pen-square fa-2x text-success"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php $weeklyReportArrangement++; ?>
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
    @else
        <div class="row">
            <div class="col-md-12">
                <h5 class="text-center text-danger"><i class="fas fa-exclamation-triangle"></i> غير مسموح لك بالدخول علي هذه البيانات</h5>
            </div>
        </div>
    @endif
</div>