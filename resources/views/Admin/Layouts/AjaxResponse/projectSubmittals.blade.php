<table id="pro_list" class="table table-hover display  pb-30">
    <thead>
    <tr>
        <th>م</th>
        <th>الرقم</th>
        <th>البند</th>
        <th>التاريخ</th>
        <th>النوع</th>
        <th>التصنيف</th>
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
        <th>التصنيف</th>
        <th>الوصف</th>
        <th>الملف</th>
    </tr>
    </tfoot>
    <tbody>
    <?php $arrangement = 1; ?>
    @foreach($submittals as $submittal)
        <tr>
            <td>{{$arrangement}}</td>
            <td>{{$submittal->number}}</td>
            <td>{{$submittal->related_item}}</td>
            <td>{{date('d-m-Y',strtotime($submittal->date))}}</td>
            <td>{{Lang::get('terms.'.$submittal->sort)}}</td>
            <td>{{Lang::get('terms.'.$submittal->category)}}</td>
            <td>{{$submittal->description}}</td>
            <td><a href="{{asset('documents/projects/submittals/'.$submittal->document)}}">
                    <i class="fas fa-download"></i>
                </a></td>
        </tr>
        <?php $arrangement++; ?>
    @endforeach
    </tbody>
</table>