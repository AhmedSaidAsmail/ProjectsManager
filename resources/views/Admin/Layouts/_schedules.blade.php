<div id="quntty_tab" class="tab-pane fade" role="tabpanel">
    <div class="row">
        <div class="col-md-12">
            {{-- add new schedule --}}
            <div class="modal fade" id="add_new_schedule" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalLabel1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h5 class="modal-title" id="">انشاء جدول ذمني<i class="fas fa-clock"></i></h5>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{route('schedulesNew.store')}}" id="schedule_form">
                                <input type="hidden" name="project_id" value="{{$project->id}}">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="en-label">Activity Id</label>
                                            <input name="activity_id" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>ارتباط البند</label>
                                            <select name="related_to" class="form-control">
                                                <option value="">اختار البند المرتبط</option>
                                                @foreach($project->project_schedules as $schedule)
                                                    <option value="{{$schedule->activity_id}}">{{$schedule->activity_id}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>التصنيف</label>
                                            <select class="form-control" name="sort" required>
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
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="en-label">Default Duration</label>
                                            <input class="form-control" name="default_duration" type="number" min="1"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="en-label">Starting Date</label>
                                            <?php
                                            $disabled_date = null;
                                            if (count($project->project_schedules) > 0) {
                                                $disabled_date = "disabled";
                                            }
                                            ?>
                                            <input class="form-control" name="planed_starting_date"
                                                   type="date" {{$disabled_date}}>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="en-label">Activity Name</label>
                                            <input class="form-control" name="activity_name" required>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-warning" form="schedule_form">
                                انشاء جدول زمني جديد
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- add new schedule --}}
            <button class="btn btn-warning btn-block" data-toggle="modal"
                    data-target="#add_new_schedule" data-whatever="@">
                <i class="fas fa-clock"></i> <span class="btn-text">انشاء جدول ذمني</span>
            </button>
        </div>

    </div>
    <div class="row">
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap">
                    <div class="scroll-table">
                        <table class="table table-hover sp-table" data-ready-to-update="false">
                            <thead>
                            <tr>
                                <td class="en-label">Activity ID</td>
                                <td>نوع الارتباط</td>
                                <td>النوع</td>
                                <td class="en-label">Activity Name</td>
                                <td class="en-label">Default Duration</td>
                                <td class="en-label">Start Date</td>
                                <td class="en-label">Finish Date</td>
                                <td class="en-label">Start Date</td>
                                <td class="en-label">Finish Date</td>
                                <td class="en-label">Status</td>
                                <td class="en-label">Reason</td>
                                <td class="en-label">Note</td>
                                <td class="en-label">Completion Percentage</td>
                                <td class="en-label">Delay Percentage</td>
                                <td class="en-label">Delay Duration</td>
                            </tr>
                            </thead>
                            <tbody>
                            @include('Admin.Layouts._schedule_table')
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
