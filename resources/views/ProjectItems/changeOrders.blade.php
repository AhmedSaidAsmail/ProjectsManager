<form action="{{route('change-orders.update',['id'=>$changeOrders->id])}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="hidden" name="project_id" value="{{$changeOrders->project_id}}">
    <input type="hidden" name="_method" value="PUT">

    <div class="form-group">
        <label class="control-label mb-10" for="">نوع امر التغيير</label>

        <div class="input-group">
            <div class="input-group-addon" style="background-color:#BDBDBD;"><i class="icon-user"></i></div>
            <select name="sort" class="form-control" data-placeholder="Choose a Category" tabindex="1">
                <option value="">== اختر تصنيف ==</option>
                <option value="structural"{!! $changeOrders->sort=="structural"?" selected":null !!}>انشائي</option>
                <option value="architectural"{!! $changeOrders->sort=="architectural"?" selected":null !!}>معماري</option>
                <option value="electrically"{!! $changeOrders->sort=="electrically"?" selected":null !!}>كهرباء</option>
                <option value="mechanics"{!! $changeOrders->sort=="mechanics"?" selected":null !!}>ميكانيكا</option>
                <option value="general"{!! $changeOrders->sort=="general"?" selected":null !!}>موقع عام</option>
                <option value="other"{!! $changeOrders->sort=="other"?" selected":null !!}>اخري</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="message-text" class="control-label mb-10">التاريخ</label>
        <input type="date" name="date" value="{{$changeOrders->date}}" class="form-control" id="description">
        </textarea>
    </div>
    <div class="form-group">
        <label for="message-text" class="control-label mb-10">السبب</label>
        <input type="text" name="reason" value="{{$changeOrders->reason}}" class="form-control" id="description">
    </div>
    <div class="form-group">
        <label for="message-text" class="control-label mb-10">الوصف</label>
        <input name="description" value="{{$changeOrders->description}}" type="text" class="form-control" id="description">
    </div>
    <div class="form-group">
        <div class="fileupload btn btn-danger btn-rounded btn-anim btn-block"><i class="fa fa-upload"></i><span class="btn-text">Upload</span>
            <input name="document" class="upload" type="file">
        </div>
    </div>
    <div class="form-group">
        <div class="modal-footer">
            <input type="submit" value="حفظ" class="btn btn-success btn-rounded btn-block">
        </div>
    </div>
</form>