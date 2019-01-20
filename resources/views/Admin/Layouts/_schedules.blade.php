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
                            @foreach($project->project_schedules as $schedule)
                                <tr data-ajax--url="{{route('schedulesNew.update',['schedule'=>$schedule->id])}}"
                                    data-tokens="{{csrf_token()}}" data-project-id="{{$project->id}}">
                                    <?php
                                    $resolver = new \App\Http\Controllers\Admin\ScheduleResolver($schedule);
                                    $planed_st_date = isset($schedule->planed_starting_date)
                                        ? \Carbon\Carbon::parse($schedule->planed_starting_date)->format('d-M-y') : null;
                                    ?>
                                    <td class="en-label">{{ucfirst($schedule->activity_id)}}</td>
                                    <td class="en-label">{!! $schedule->related_to?ucfirst($schedule->related_to):"-" !!}</td>
                                    <td>{{Lang::get('terms.'.$schedule->sort)}}</td>
                                    <td>{{$schedule->activity_name}}</td>
                                    <td>{{$schedule->default_duration}}</td>
                                    <td class="en-label">{{$resolver->getPlanedStDate()}}</td>
                                    <td class="en-label">{{$resolver->getPlanedEndDate()}}</td>
                                    <td class="en-label update-on_click">
                                        <input name="actual_starting_date" id="date_picker"
                                               value="{{$schedule->actual_starting_date}}" disabled>

                                    </td>
                                    <td class="en-label update-on_click">
                                        <input name="actual_ending_date" id="date_picker"
                                               value="{{$schedule->actual_ending_date}}" disabled>
                                    </td>
                                    <td class="en-label">Status</td>
                                    <td class="en-label">Reason</td>
                                    <td class="en-label">Note</td>
                                    <td class="en-label">Completion Percentage</td>
                                    <td class="en-label">Delay Percentage</td>
                                    <td class="en-label">Delay Duration</td>
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
@section('additional-css')
    @parent
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700" rel="stylesheet">
    <link href="{{asset('date_picker/css/datepicker.min.css')}}" rel="stylesheet" type="text/css">
    <style>

        label.en-label {
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
        }

        .scroll-table {
            width: 98%;
            margin: 0 auto;
            overflow-x: scroll;
        }

        .scroll-table > table.table {
            width: 150%;
            max-width: 200%;
        }

        td.en-label {
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
            direction: ltr;
        }

        table.sp-table {
            border: 1px solid #eeeeee;
            text-align: center;
            margin-top: 20px;
            margin-bottom: 60px;
        }

        table.sp-table td {
            border: 1px solid #eeeeee;
        }

        td.update-on_click > span {

        }

        td.update-on_click > input {
            display: inline-block;
            width: 90px;
            text-align: center;
            border: none;
        }
    </style>
@endsection
@section('additional-js')
    @parent
    <script src="{{asset('date_picker/js/datepicker.min.js')}}"></script>
    <script src="{{asset('date_picker/js/i18n/datepicker.en.js')}}"></script>
    <script>
        $(function () {
//            $('#date_picker').data('datepicker');
            $('input#date_picker').datepicker({
                language: 'en',
                startDate: new Date(),
                dateFormat: 'dd-M-yy',
                autoClose: true,
                onSelect: function (data) {
                    $("table.table").attr('data-ready-to-update', 'true');

                }
            });
            $("td.update-on_click").dblclick(function () {
                var input = $(this).find('input');
                if (!input.is(":disabled")) {
                    input.prop('disabled', true);
                    return true;
                }
                input.prop('disabled', false);
            });
            $("td.update-on_click").focusout(function () {
                var ready = $("table.table").attr('data-ready-to-update');
                if (ready === "true") {
                    var value = $(this).find('input').val();
                    var link = $(this).closest('tr').attr('data-ajax--url');
                    var attribute = $(this).find('input').attr('name');
                    var token = $(this).closest('tr').attr('data-tokens');
                    var project_id = $(this).closest('tr').attr('data-project-id');
                    $.ajax({
                        url: link,
                        type: 'post',
                        data: {
                            project_id: project_id,
                            attribute: attribute,
                            value: value,
                            _token: token,
                            _method: "PUT"
                        },
                        success: function (response) {
                            console.log(response);
                            $("table.table").attr('data-ready-to-update','false');
                        }

                    });
                }

            });
        });
    </script>
@endsection