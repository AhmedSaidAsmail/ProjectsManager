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
    @foreach($tenders as $tender)
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