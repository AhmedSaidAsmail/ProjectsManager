<form action="{{route('tests.update',['id'=>$test->id])}}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="project_id" value="{{$test->project_id}}">
    <input type="hidden" name="_method" value="PUT">
    {{csrf_field()}}
    <div class="form-group">
        <label class="control-label mb-10">تصنيف الاختبار</label>

        <div class="input-group">
            <div class="input-group-addon" style="background-color:#BDBDBD;"><i class="icon-user"></i></div>
            <select class="form-control" name="sort" id="test_sort">
                <option value="">== اختر تصنيف ==</option>
                <option value="structural"{!! $test->sort=="structural"?" selected":null !!}>انشائي</option>
                <option value="architectural"{!! $test->sort=="architectural"?" selected":null !!}>معماري</option>
                <option value="electrically"{!! $test->sort=="electrically"?" selected":null !!}>كهرباء</option>
                <option value="mechanics"{!! $test->sort=="mechanics"?" selected":null !!}>ميكانيكا</option>
                <option value="general"{!! $test->sort=="general"?" selected":null !!}>موقع عام</option>
                <option value="other"{!! $test->sort=="other"?" selected":null !!}>اخري</option>
            </select>
        </div>
    </div>

    <!-- /Row -->
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label mb-10">اختر الاختبار</label>

                <div class="input-group">
                    <div class="input-group-addon" style="background-color:#BDBDBD;"><i class="icon-user"></i></div>
                    <select class="form-control" name="project_test_sort_id" id="related_sort" data-ajax--url="{{route('test-sorts.getRelated')}}">
                        <option value="">== اختر نوع الاختبار ==</option>
                        <option value="{{$test->project_test_sort_id}}" selected>{{$test->relatedSort($test->project_test_sort_id)->name}}</option>
                    </select>
                </div>
                <span class="help-block"> فضلا اختر نوع الاختبار طبقا لتصنيف اختيارك </span></div>
        </div>
        <!--/span-->
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label mb-10">تاريخ الاختبار</label>

                <div class="input-group">
                    <div class="input-group-addon" style="background-color:#BDBDBD;"><i class="icon-user"></i></div>
                    <input type="date" name="date" value="{{$test->date}}" class="form-control" id="">
                </div>
                <span class="help-block"> فضلا اختر تاريخ الاختبار </span></div>
        </div>
        <!--/span-->
    </div>
    <!-- /Row -->
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label mb-10">مكان الاختبار</label>

                <div class="radio-list">
                    <div class="radio-inline pl-0">
                        <span class="radio radio-info">
                            <input name="location" id="testplaceradio1" value="location"{!! $test->location=="location"?" checked":null !!} type="radio">
                            <label for="testplaceradio1">موقع</label>
                        </span>
                    </div>
                    <div class="radio-inline">
                        <span class="radio radio-info">
                            <input name="location" id="testplaceradio2" value="lap" {!! $test->location=="lap"?" checked":null !!} type="radio">
                            <label for="testplaceradio2">مختبر</label>
                        </span>
                    </div>
                </div>
                <span class="help-block"> فضلا اختر مكان الاختبار </span></div>
        </div>
        <!--/span-->
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label mb-10">نتيجه الاختبار</label>

                <div class="radio-list">
                    <div class="radio-inline pl-0">
                        <span class="radio radio-info">
                            <input name="result" id="result1" value="1" {!! $test->result?" checked":null !!} type="radio">
                            <label for="result1">ناجح</label>
                        </span>
                    </div>
                    <div class="radio-inline">
                        <span class="radio radio-info">
                            <input name="result" id="result2" value="0" {!! !$test->result?" checked":null !!} type="radio">
                            <label for="result2">فاشل</label>
                        </span>
                    </div>
                </div>
                <span class="help-block"> فضلا اختر نتيجه الاختبار </span></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="message-text" class="control-label mb-10">الوصف</label>
                <input type="text" class="form-control" value="{{$test->description}}" name="description">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="fileupload btn btn-danger btn-rounded btn-anim btn-block"><i class="fa fa-upload"></i><span class="btn-text">Upload</span>
            <input class="upload" name="document" type="file" multiple>
        </div>
    </div>
    <div class="form-group">
        <div class="modal-footer">
            <button class="btn btn-success btn-rounded btn-block">حفظ</button>
        </div>
    </div>
</form>
