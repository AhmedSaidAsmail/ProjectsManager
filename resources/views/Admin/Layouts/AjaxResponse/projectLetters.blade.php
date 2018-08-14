<table id="pro_list" class="table table-hover display  pb-30">
    <thead>
    <tr>
        <th>م</th>
        <th>التصنيف</th>
        <th>التاريخ</th>
        <th>النوع</th>
        <th>الجهه</th>
        <th>Action</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <th>م</th>
        <th>التصنيف</th>
        <th>التاريخ</th>
        <th>النوع</th>
        <th>الجهه</th>
        <th>Action</th>
    </tr>
    </tfoot>
    <tbody>
    <?php $arrangement = 1; ?>
    @foreach($letters as $letter)
        <tr>
            <td>{{$arrangement}}</td>
            <td>{{Lang::get('terms.'.$letter->sort)}}</td>
            <td>{{date('d-m-Y',strtotime($letter->date))}}</td>
            <td>{{$letter->specific}}</td>
            <td>{{$letter->receiver}}</td>
            <td style=" padding: 0px; text-align: left;">
                @if(in_array(auth()->user()->permission->contractorPermissions->letters,[4,5,6,7]) || auth()->guard('web')->check())
                    <a href="{{asset('documents/projects/letters/'.$letter->document)}}" style="display: inline;">
                        <i class="fas fa-download"></i>
                    </a>
                @endif
                @if(in_array(auth()->user()->permission->contractorPermissions->letters,[2,6,7]) || auth()->guard('web')->check())
                    <a href="{{route('letters.edit',['id'=>$letter->id])}}" id="project-item-edit" style="display: inline;">
                        <i class="far fa-edit"></i>
                    </a>
                @endif
                @if(in_array(auth()->user()->permission->contractorPermissions->letters,[1,5,7]) || auth()->guard('web')->check())
                    <form method="post" action="{{route('letters.destroy',['id'=>$letter->id])}}" style="display: inline;">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                        <button style=" border: 0; padding: 0; background-color: transparent;"><i class="far fa-trash-alt"></i></button>
                    </form>
                @endif
            </td>
        </tr>
        <?php $arrangement++; ?>
    @endforeach
    </tbody>
</table>