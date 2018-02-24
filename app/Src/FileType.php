<?php
namespace App\Src;


class FileType
{
    private static $extensions = [
        'pdf' => [
            'icon' => 'fa-file-pdf',
            'color' => 'text-danger'
        ],
        'doc' => [
            'icon' => 'fa-file-word-o',
            'color' => 'text-success'
        ],
        'docx' => [
            'icon' => 'fa-file-word-o',
            'color' => 'text-success'
        ],
        'xls' => [
            'icon' => 'fa-file-excel',
            'color' => 'text-warning'
        ],
        'xlsx' => [
            'icon' => 'fa-file-excel',
            'color' => 'text-warning'
        ],
        'unknown' => [
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
            $this->extension = $pathInfo['extension'];
        }
    }

    private function checkExtensionExists()
    {
        if (array_key_exists($this->extension, self::$extensions)) {
            return self::$extensions[$this->extension];
        }
        return self::$extensions['unknown'];
    }

    public function getType()
    {
        return $this->checkExtensionExists();
    }

}