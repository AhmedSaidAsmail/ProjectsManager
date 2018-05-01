<?php
namespace App\Src;


class FileType
{
    private static $extensions = [
        'pdf' => [
            'type'=>'pdf',
            'extensions' => ['pdf'],
            'icon' => 'fa-file-pdf',
            'color' => 'text-danger'
        ],
        'word' => [
            'type'=>'word',
            'extensions' => ['doc', 'docx'],
            'icon' => 'fa-file-word-o',
            'color' => 'text-success'
        ],
        'excel' => [
            'type'=>'excel',
            'extensions' => ['xls', 'xlsx'],
            'icon' => 'fa-file-excel',
            'color' => 'text-warning'
        ],
        'video' => [
            'type'=>'video',
            'extensions' => ['mp4', 'avi','3gp','wmv','flv'],
            'icon' => 'fa-file-video',
            'color' => 'text-warning'
        ],
        'picture' => [
            'type'=>'image',
            'extensions' => ['png', 'jpg','jpeg','gif'],
            'icon' => 'fa-file-image',
            'color' => 'text-info'
        ],
        'unknown' => [
            'type'=>'unknown',
            'extensions' => [],
            'icon' => 'fa-file',
            'color' => 'text-info'
        ]
    ];
    private $fileName;
    private $extension;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;
        $this->setExtension();
    }

    private function setExtension()
    {
        $pathInfo = pathinfo($this->fileName);
        if (isset($pathInfo['extension'])) {
            $this->extension = strtolower($pathInfo['extension']);
        }
    }

    private function checkExtensionExists()
    {
//        if (array_key_exists($this->extension, self::$extensions)) {
//            return self::$extensions[$this->extension];
//        }
        foreach (self::$extensions as $key => $val) {
            if (in_array($this->extension, $val['extensions'])) {
                return $val;
            }
        }
        return self::$extensions['unknown'];
    }

    public function getType()
    {
        return $this->checkExtensionExists();
    }

}