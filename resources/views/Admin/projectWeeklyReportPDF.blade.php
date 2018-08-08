<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>report</title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        body {
            text-align: right;
        }

        * {
            box-sizing: border-box;
        }

        div {
            -webkit-print-color-adjust: exact;

        }

        .contains {
            width: 595px;
            background-color: #FFFFFF;
            margin: 0px auto;
            border: 5px solid #000000;
            padding: 10px;
        }

        .page {
            width: 100%;
            min-height: 842px;
            overflow: hidden;
            position: relative;
        }

        .intro {
            background: url('{{asset('documents/projects/'.$project->image)}}') no-repeat left top;
            background-size: 100% auto;

        }

        .intro-footer {
            position: absolute;
            bottom: 0px;
            background-color: #333333;
            padding: 50px 20px;
            width: 100%;
            text-align: left;
        }

        .intro-title {
            text-align: center;
            background-color: #333333;
            color: #29a6d3;
            display: inline-block;
            padding: 25px 25px 25px 80px;
            margin-top: 100px;
            border-radius: 150px 0px 0px 0px;
        }

        .intro-title span {
            display: block;
            font-size: 18px;
        }

        .intro-title h2 {
            margin: 10px 0px;
        }

        h1 {
            color: #dd858c;
            font-size: 20px;
            text-decoration: underline;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        table.info {
            width: 100%;
            border-collapse: collapse;
            direction: rtl;

        }

        table.info td {
            border: 2px solid #ffffff;
            font-size: 18px;
            font-weight: bold;
            padding: 10px;
            width: 25%;

        }

        table.info td.special {
            background-color: #cdcdcb;
        }

        @media print {
            footer {
                position: fixed;
                bottom: 0;
            }

            .contains {
                width: 100%;
            }

            .page {
                width: 100%;
                min-height: 942px;
                overflow: hidden;
                position: relative;
            }

            .intro-title {
                background-color: #333333;
                -webkit-print-color-adjust: exact;
            }

            .print {
                display: none;
            }

        }

        .table-insider {
            text-align: right;
            width: 100%;
            direction: rtl;
            border-collapse: collapse;
            border: 1px solid #000000;
            font-size: 18px;
            margin-top: 20px;
        }

        .table-insider td {
            border: 1px solid #000000;
            padding: 5px 10px;
        }

        .img-container {
            width: 100%;
        }

        .img-container:after {
            display: block;
            clear: both;
            content: '';
        }

        .img-container > .img-item {
            width: 50%;
            float: left;
            display: inline;
        }

        .img-container img {
            width: 50%;
            float: left;
            display: inline;
        }

        .img-container > .img-item img {
            width: 100%;
        }
    </style>
</head>
<body>
<button class="print" type="button" onclick="window.print();">
    Print PDF
</button>

<div class="contains" id="printPdf">
    <div class="page intro">
        <div class="intro-title">
            <h2>مشروع: {{$project->name}}</h2>
            <span>التقرير الاسبوعي</span>
            <span>من {{$report->starting_date}} الي {{$report->ending_date}}</span>
        </div>
        <div class="intro-footer">
            <div class="logo-footer">
                <img src="{{asset('images/logo.png')}}" style="width: 30%;">
            </div>
        </div>

    </div>
    <div class="page">
        <h1>:. اولا التعريف بالمشروع</h1>
        <table class="info" border="1">
            <tr>
                <td class="special">اسم المشروع</td>
                <td>{{$project->name}}</td>
                <td class="special">رقم المنافسة</td>
                <td></td>
            </tr>
            <tr>
                <td class="special">اسم المالك</td>
                <td>{{$project->owner->name}}</td>
                <td class="special">اسم المقاول</td>
                <td>{{$project->contractor->name}}</td>
            </tr>
            <tr>
                <td class="special">قيمة عقد المشروع بعد اوامر الغيير</td>
                <td>{{number_format($project->contract_value, 2)}} ريال</td>
                <td class="special">موقع المشروع</td>
                <td>{{$project->city}}</td>
            </tr>
            <tr>
                <td class="special">تاريخ تسليم الموقع</td>
                <td>{{$project->contract_ending}}</td>
                <td class="special">تاريخ بداية العقد</td>
                <td>{{$project->contract_starting}}</td>
            </tr>
            <tr>
                <td class="special">مدة العقد</td>
                <td>{{dateDiff($project->contract_starting,$project->contract_ending)->days}} يوم</td>
                <td class="special">المدة المنقضية</td>
                <td>{{dateDiff($project->contract_starting,date('Y-m-d'))->days}} يوم</td>
            </tr>
            <tr>
                <td class="special">نسبة الانجاذ المالية</td>
                <td>{{$report->financial_achievement_ratio}}%</td>
                <td class="special">نسبة الانجاز الفعلية</td>
                <td>{{$report->actual_completion_rate}}%</td>
            </tr>
            <tr>
                <td class="special">نطاق العمل</td>
                <td colspan="3" class="special">{{$project->description}}</td>
            </tr>
        </table>
        <h1>وصف المشروع وبيان الاعمال</h1>

        <div>
            {{$report->project->description}}
        </div>
        <table class="table-insider">
            <tr>
                <td>البند</td>
                <td>الوصف</td>
            </tr>
            <tr>
                <td>الموقع</td>
                <td>{{$report->project->city}}</td>
            </tr>
            <tr>
                <td>عدد المبانى</td>
                <td>{{$report->project->quantity->buildings_num}}</td>
            </tr>

        </table>
        @if(count($report->project->consultantEngineers)>0)
            <h1>الهيكل التنظيمي لجهاز الاشراف</h1>
            <table class="table-insider">
                <tr>
                    <td>الاسم</td>
                    <td>المهنة</td>
                </tr>
                @foreach($report->project->consultantEngineers as $consultantEngineer)
                    <tr>
                        <td>{{$consultantEngineer->engineer->name}}</td>
                        <td>{{Lang::get('terms.'.$consultantEngineer->consultant_engineer_position)}}</td>
                    </tr>
                @endforeach
            </table>
        @endif
        @if(count($report->contractorTeam)>0)
            <h1>الهيكل التنظيمي لجهاز المقاول</h1>
            <table class="table-insider">
                <tr>
                    <td>المهنة</td>
                    <td>العدد</td>
                    <td>الاسم</td>
                </tr>
                @foreach($report->contractorTeam as $contractorTeam)
                    <tr>
                        <td>{{$contractorTeam->position}}</td>
                        <td>{{$contractorTeam->number}}</td>
                        <td>{{$contractorTeam->name}}</td>
                    </tr>
                @endforeach
            </table>
        @endif
        @if(count($report->tools)>0)
            <h1>معدات المقاول وأدوات بالموقع </h1>
            <table class="table-insider">
                <tr>
                    <td>المعدة</td>
                    <td>العدد</td>
                    <td>ملاحظات</td>
                </tr>
                @foreach($report->tools as $tool)
                    <tr>
                        <td>{{$tool->tool}}</td>
                        <td>{{$tool->number}}</td>
                        <td>{{$tool->note}}</td>
                    </tr>
                @endforeach
            </table>
        @endif
        @if(isset($report->schedule) && !is_null($report->schedule))
            <h1>البرنامج الزمنى</h1>

            <div class="additional-insider">
                <img src="{{asset('documents/projects/w_report/'.$report->schedule)}}">
            </div>
        @endif
        @if(isset($report->additionalInfo->done_working) && !is_null($report->additionalInfo->done_working))
            <h1>يان الاعمال المنفذه بالمشروع </h1>

            <div class="additional-insider">
                {!! $report->additionalInfo->done_working !!}
            </div>
        @endif
        @if(isset($report->additionalInfo->report_status) && !is_null($report->additionalInfo->report_status))
            <h1>بيان الحالة</h1>

            <div class="additional-insider">
                {!! $report->additionalInfo->report_status !!}
            </div>
        @endif
        @if(isset($report->additionalInfo->working_rate) && !is_null($report->additionalInfo->working_rate))
            <h1>معدل سير العمل</h1>

            <div class="additional-insider">
                {!! $report->additionalInfo->working_rate !!}
            </div>
        @endif
        @if(isset($report->additionalInfo->completion_Schedule) && !is_null($report->additionalInfo->completion_Schedule))
            <h1>جدول نسب الانجاز</h1>

            <div class="additional-insider">
                {!! $report->additionalInfo->completion_Schedule !!}
            </div>
        @endif
        @if(isset($report->additionalInfo->working_next_month) && !is_null($report->additionalInfo->working_next_month))
            <h1>وصف الاعمال المتوقع انجازها خلال الشهر القادم </h1>

            <div class="additional-insider">
                {!! $report->additionalInfo->working_next_month !!}
            </div>
        @endif
        @if(isset($report->additionalInfo->consultant_note) && !is_null($report->additionalInfo->consultant_note))
            <h1>ملاحظات الاستشارى على الاعمال بالموقع </h1>

            <div class="additional-insider">
                {!! $report->additionalInfo->consultant_note !!}
            </div>
        @endif
        @if(isset($report->additionalInfo->contractor_required) && !is_null($report->additionalInfo->contractor_required))
            <h1>المطلوب من المقاول </h1>

            <div class="additional-insider">
                {!! $report->additionalInfo->contractor_required !!}
            </div>
        @endif
        @if(isset($report->additionalInfo->owner_required) && !is_null($report->additionalInfo->owner_required))
            <h1>الالمطلوب من المالك </h1>

            <div class="additional-insider">
                {!! $report->additionalInfo->owner_required !!}
            </div>
        @endif
        @if(count($report->tests)>0)
            <h1>نتائج الاختبارات </h1>

            <div class="additional-insider">
                @foreach($report->tests->chunk(2) as $chunk)
                    <div class="img-container">
                        @foreach($chunk as $test)
                            <img src="{{asset('documents/projects/tests/'.$test->test->document)}}">
                        @endforeach
                    </div>
                @endforeach

            </div>
        @endif
        @if(count($report->requests)>0 || count($report->submittals)>0)
            <h1>المخاطبات ومحاضر الاجتماعات </h1>

            <div class="additional-insider">
                @foreach($report->requests->chunk(2) as $chunk)
                    <div class="img-container">
                        @foreach($chunk as $requests)
                            <img src="{{asset('documents/projects/requests/'.$requests->request->document)}}">
                        @endforeach
                    </div>
                @endforeach

            </div>
            <div class="additional-insider">
                @foreach($report->submittals->chunk(2) as $chunk)
                    <div class="img-container">
                        @foreach($chunk as $submittals)
                            <img src="{{asset('documents/projects/submittals/'.$submittals->submittal->document)}}">
                        @endforeach
                    </div>
                @endforeach

            </div>
        @endif
        @if(count($report->files)>0)
            <h1>الصور الفوتوغرافيه</h1>

            <div class="additional-insider">
                @foreach($report->files->chunk(2) as $chunk)
                    <div class="img-container">
                        @foreach($chunk as $file)
                            <div class="img-item">
                                <img src="{{asset('documents/projects/files/'.$file->file->document)}}">
                                <span style="display: block; text-align: center;">{{$file->file->description}}</span>
                            </div>
                        @endforeach
                    </div>
                @endforeach

            </div>
        @endif
        <h1>توصيات الاستشاري </h1>

        <div class="additional-insider">
            {!! $report->additionalInfo->consultant_recommendations !!}
        </div>
        {!! $report->text !!}
    </div>
</div>

</body>
</html>