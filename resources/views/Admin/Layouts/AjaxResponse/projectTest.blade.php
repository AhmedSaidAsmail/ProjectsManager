<table id="pro_list" class="table table-hover display  pb-30">
    <thead>
    <tr>
        <th>م</th>
        <th>التصنيف</th>
        <th>التاريخ</th>
        <th>النتيجه</th>
        <th>الوصف</th>
        <th>المكان</th>
        <th>Action</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <th>م</th>
        <th>التصنيف</th>
        <th>التاريخ</th>
        <th>النتيجه</th>
        <th>الوصف</th>
        <th>المكان</th>
        <th>Action</th>
    </tr>
    </tfoot>
    <tbody>
    <?php $testsArrangement = 1; ?>
    @foreach($tests as $test)
        <tr>
            <td>{{$testsArrangement}}</td>
            <td>{{Lang::get('terms.'.$test->sort)}}</td>
            <td>{{date('d-m-Y',strtotime($test->date))}}</td>
            <td><i class="fa fa-circle fa-lg {!! $test->result?'text-success':'text-danger' !!}"></i></td>
            <td>{{$test->description}}</td>
            <td>{{Lang::get('terms.'.$test->location)}}</td>
            <td>
                <a href="{{asset('documents/projects/tests/'.$test->document)}}">
                    <i class="fas fa-download"></i>
                </a>
            </td>
        </tr>
        <?php $testsArrangement++; ?>
    @endforeach
    </tbody>
</table>
