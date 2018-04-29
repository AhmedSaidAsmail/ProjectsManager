<form action="{{route('submittals.update',['id'=>$submittal->id])}}" method="post" enctype="multipart/form-data">
    <input type="hidden" value="PUT" name="_method">
    <input type="hidden" name="project_id" value="{{$submittal->project_id}}">
    {{csrf_field()}}
    <div class="form-group">
        <label class="control-label mb-10" for="">نوع الصبميتال</label>

        <div class="input-group">
            <div class="input-group-addon" style="background-color:#BDBDBD;"><i class="icon-user"></i></div>
            <select name="sort" class="form-control" data-placeholder="اختر واحده" tabindex="1">
                <option value="">== اختر واحدا ==</option>
                <option value="sample approval" {!! $submittal->sort=="sample approval"?" selected":null !!}>اعتماد عينه</option>
                <option value="supplier approval" {!! $submittal->sort=="supplier approval"?" selected":null !!}>اعتماد مخططات الورشه</option>
                <option value="shop drawing approval " {!! $submittal->sort=="shop drawing approval "?" selected":null !!}>اعتماد موردين</option>
                <option value="subcontractor approval"{!! $submittal->sort=="subcontractor approval"?" selected":null !!}>اعتماد مقاول باطن</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="recipient-name" class="control-label mb-10">رقم الصبميتال</label>

        <div class="input-group">
            <div class="input-group-addon" style="background-color:#BDBDBD;">
                <i class="icon-user"></i></div>
            <input type="number" value="{{$submittal->number}}" name="number" class="form-control" id="recipient-name1">
        </div>
    </div>
    <div class="form-group">
        <label for="recipient-name" class="control-label mb-10"> رقم البندالمرتبط</label>

        <div class="input-group">
            <div class="input-group-addon" style="background-color:#BDBDBD;"><i class="icon-user"></i></div>
            <input type="text" value="{{$submittal->related_item}}" name="related_item" class="form-control" id="recipient-name1">
        </div>
    </div>
    <div class="form-group">
        <label for="message-text" class="control-label mb-10">التاريخ</label>

        <div class="input-group">
            <div class="input-group-addon" style="background-color:#BDBDBD;"><i class="icon-user"></i></div>
            <input type="date" name="date" value="{{$submittal->date}}" class="form-control" id="description">
        </div>
    </div>
    <div class="form-group">
        <label for="message-text" class="control-label mb-10">الوصف</label>

        <div class="input-group">
            <div class="input-group-addon" style="background-color:#BDBDBD;"><i class="icon-user"></i></div>
            <input type="text" name="description" value="{{$submittal->description}}" class="form-control" id="description">
        </div>
    </div>
    <div class="form-group">
        <div class="fileupload btn btn-danger btn-rounded btn-anim btn-block">
            <i class="fa fa-upload"></i><span class="btn-text">Upload</span>
            <input class="upload" name="document" type="file" multiple>
        </div>
    </div>
    <div class="modal-footer">
        <div class="form-group">
            <input type="submit" value="حفظ" class="btn btn-success btn-rounded btn-block">
        </div>
    </div>
</form>