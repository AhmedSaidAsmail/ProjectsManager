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
    <?php $cordnationsArrangement = 1; ?>
    @foreach($cordnationDrawings as $cordnation)
        <tr>
            <td>{{$cordnationsArrangement}}</td>
            <td>{{$cordnation->sort}}</td>
            <td>{{date('d-m-Y',strtotime($cordnation->date))}}</td>
            <td>{{$cordnation->description}}</td>
            <td>
                <a href="{{asset('documents/projects/cordnations/'.$cordnation->document)}}">
                    <i class="fas fa-cloud-download-alt"></i>
                </a>
            </td>
        </tr>
        <?php $cordnationsArrangement++; ?>
    @endforeach
    </tbody>

</table>