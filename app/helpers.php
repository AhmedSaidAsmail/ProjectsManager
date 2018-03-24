<?php
use App\Src\CollectData\CollectFactory;
use App\Src\UploadFiles;
use App\Src\SyncData;
use Illuminate\Database\Eloquent\Model;
use App\Src\FileType;

if (!function_exists('collectData')) {

    function collectData(array $details, $type = 'multiple')
    {
        $factory = new CollectFactory($details, $type);
        return $factory->build()->collect();
    }

}
if (!function_exists('uploadFile')) {

    function uploadFile(array $fileDetails)
    {
        $uploadFile = new UploadFiles($fileDetails['file'], $fileDetails['path']);
        return $uploadFile->upload();
    }

}
if (!function_exists('sync')) {

    function sync(Model $model, $related, array $data)
    {
        SyncData::sync($model, $related, $data);
    }

}
if (!function_exists('getFileType')) {
    function getFileType($fileName)
    {
        $file = new FileType($fileName);
        return $file->getType();
    }
}
if (!function_exists('dateDiff')) {
    function dateDiff($date1, $date2)
    {
        $date1=new DateTime($date1);
        $date2=new DateTime($date2);
        $diff=$date1->diff($date2);
        return $diff;

    }
}