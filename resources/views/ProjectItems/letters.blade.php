<form action="{{route('letters.update',['id'=>$letter->id])}}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="project_id" value="{{$letter->project->id}}">
    <input type="hidden" name="_method" value="PUT">
    {{csrf_field()}}
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label mb-10">تصنيف الخطاب</label>

                <div class="input-group">
                    <div class="input-group-addon" style="background-color:#BDBDBD;">
                        <i class="icon-user"></i>
                    </div>
                    <select class="form-control" name="sort">
                        <option value="">== اختر تصنيف ==</option>
                        <option value="structural"{!! $letter->sort=="structural"?" selected":null !!}>انشائي</option>
                        <option value="architectural"{!! $letter->sort=="architectural"?" selected":null !!}>معماري</option>
                        <option value="electrically"{!! $letter->sort=="electrically"?" selected":null !!}>كهرباء</option>
                        <option value="mechanics"{!! $letter->sort=="mechanics"?" selected":null !!}>ميكانيكا</option>
                        <option value="general"{!! $letter->sort=="general"?" selected":null !!}>موقع عام</option>
                        <option value="other"{!! $letter->sort=="other"?" selected":null !!}>اخري</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label mb-10">نوع الخطاب</label>

                <div class="input-group">
                    <div class="input-group-addon" style="background-color:#BDBDBD;">
                        <i class="icon-user"></i>
                    </div>
                    <select class="form-control" name="specific">
                        <option value="">== اختر تصنيف ==</option>
                        <option value="exported" {!! $letter->specific=="exported"?" selected":null !!}>صادر</option>
                        <option value="imported"{!! $letter->specific=="imported"?" selected":null !!}>وارد</option>
                        <option value="meeting"{!! $letter->specific=="meeting"?" selected":null !!}>محضر اجتماع</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label mb-10">الجهه</label>

                <div class="input-group">
                    <div class="input-group-addon" style="background-color:#BDBDBD;">
                        <i class="icon-user"></i>
                    </div>
                    <select class="form-control" name="receiver">
                        <option value="">== اختر الجهه ==</option>
                        <option value="location" {!! $letter->receiver=="location"?" selected":null !!}>الموقع</option>
                        <option value="office" {!! $letter->receiver=="office"?" selected":null !!}>المكتب</option>
                        <option value="owner" {!! $letter->receiver=="owner"?" selected":null !!}>المالك</option>
                        <option value="contractor" {!! $letter->receiver=="contractor"?" selected":null !!}>المقاول</option>

                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="recipient-name" class="control-label mb-10">رقم الخطاب</label>
                <input type="text" value="{{$letter->number}}" name="number" class="form-control" id="recipient-name1">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="recipient-name" class="control-label mb-10"> رقم البندالمرتبط</label>
                <input type="text" name="related_item" value="{{$letter->related_item}}" class="form-control" id="" placeholder="رقم المبني + رقم البند">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="message-text" class="control-label mb-10">التاريخ</label>
                <input type="date" value="{{$letter->date}}" name="date" class="form-control" id="">
            </div>
        </div>
        <div class="col-md-6">

        </div>
        <span class="help-block">  </span>
    </div>
    <div class="form-group">
        <label for="message-text" class="control-label mb-10">الوصف</label>
        <input type="text" value="{{$letter->description}}" class="form-control" name="description">
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