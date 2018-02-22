<?php
use App\Src\CollectData\CollectFactory;
use App\Src\UploadFiles;

if (!function_exists('collectData')) {

    function collectData(array $details, $type = 'multiple')
    {
        $factory = new CollectFactory($details, $type);
        return $factory->build()->collect();
    }

}
if (!function_exists('uploadImage')) {

    function uploadImage(array $fileDetails)
    {
        $uploadFile=new UploadFiles($fileDetails['file'],$fileDetails['path']);
        return $uploadFile->upload();
    }

}