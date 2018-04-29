<form action="{{route('requests.update',['id'=>$request->id])}}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="project_id" value="{{$request->project_id}}">
    <input type="hidden" name="_method" value="PUT">
    {{csrf_field()}}
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label mb-10">تصنيف الريكويست</label>

                <div class="input-group">
                    <div class="input-group-addon" style="background-color:#BDBDBD;">
                        <i class="icon-user"></i>
                    </div>
                    <select class="form-control" name="sort">
                        <option value="">== اختر تصنيف ==</option>
                        <option value="structural"{!! $request->sort=="structural"?" selected":null !!}>انشائي</option>
                        <option value="architectural"{!! $request->sort=="architectural"?" selected":null !!}>معماري</option>
                        <option value="electrically"{!! $request->sort=="electrically"?" selected":null !!}>كهرباء</option>
                        <option value="mechanics"{!! $request->sort=="mechanics"?" selected":null !!}>ميكانيكا</option>
                        <option value="general"{!! $request->sort=="general"?" selected":null !!}>موقع عام</option>
                        <option value="other"{!! $request->sort=="other"?" selected":null !!}>اخري</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="recipient-name" class="control-label mb-10">رقم الريكويست</label>
                <input type="text" name="number" value="{{$request->number}}" class="form-control" id="recipient-name1">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="recipient-name" class="control-label mb-10"> رقم البندالمرتبط</label>
                <input type="text" name="related_item" value="{{$request->related_item}}" class="form-control" id="" placeholder="رقم المبني + رقم البند">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="message-text" class="control-label mb-10">التاريخ</label>
                <input type="date" name="date" value="{{$request->date}}" class="form-control" id="">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label mb-10">الكود </label>

                <div class="radio-list">
                    <div class="col-md-2">
                        <div class="radio-inline pl-0">
                            <span class="radio radio-info">
                                <input name="code" id="testresultselection1" value="a" {!! $request->code=='a'?'checked':null !!} type="radio">
                                <label for="testresultselection1">ِA</label>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="radio-inline">
                            <span class="radio radio-info">
                                <input name="code" id="testresultselection2" value="b" {!! $request->code=='b'?'checked':null !!} type="radio">
                                <label for="testresultselection2">B</label>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="radio-inline">
                            <span class="radio radio-info">
                                <input name="code" id="testresultselection3" value="c" {!! $request->code=='c'?'checked':null !!} type="radio">
                                <label for="testresultselection3">C</label>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span class="help-block"> فضلا اختر نتيجه الريكويست </span>
    </div>
    <div class="form-group">
        <label for="message-text" class="control-label mb-10">الوصف</label>
        <input type="text" class="form-control" name="description" value="{{$request->description}}">
    </div>
    <div class="form-group">
        <div class="fileupload btn btn-danger btn-rounded btn-anim btn-block">
            <i class="fa fa-upload"></i>
            <span class="btn-text">Upload</span>
            <input class="upload" name="document" type="file" multiple>
        </div>
    </div>
    <div class="form-group">
        <div class="modal-footer">
            <input type="submit" value="حفظ" class="btn btn-success btn-rounded btn-block">
        </div>
    </div>
</form>