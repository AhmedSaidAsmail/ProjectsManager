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
    <?php $shopsArrangement = 1; ?>
    @foreach($shopDrawings as $shop)
        <tr>
            <td>{{$shopsArrangement}}</td>
            <td>{{$shop->sort}}</td>
            <td>{{date('d-m-Y',strtotime($shop->date))}}</td>
            <td>{{$shop->description}}</td>
            <td>
                <a href="{{asset('documents/projects/shops/'.$shop->document)}}">
                    <i class="fas fa-cloud-download-alt"></i>
                </a>
            </td>
        </tr>
        <?php $shopsArrangement++; ?>
    @endforeach
    </tbody>

</table>