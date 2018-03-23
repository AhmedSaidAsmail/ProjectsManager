<table id="pro_list" class="table table-hover display  pb-30">
    <thead>
    <tr>
        <th>م</th>
        <th>التصنيف</th>
        <th>التاريخ</th>
        <th>النتيجه</th>
        <th>الوصف</th>
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
        <th>Action</th>
    </tr>
    </tfoot>
    <tbody>
    <?php $requestsArrangement = 1; ?>
    @foreach($requests as $request)
        <tr>
            <td>{{$requestsArrangement}}</td>
            <td>{{$request->sort}}</td>
            <td>{{date('d-m-Y',strtotime($request->date))}}</td>
            <td>{{ucfirst($request->code)}}</td>
            <td>{{$request->description}}</td>
            <td>
                <a href="{{asset('documents/projects/requests/'.$request->document)}}">
                    <i class="fas fa-download"></i>
                </a>
            </td>
        </tr>
        <?php $requestsArrangement++; ?>
    @endforeach
    </tbody>
</table>