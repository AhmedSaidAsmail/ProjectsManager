<?php
namespace App\Src;

use Illuminate\Http\UploadedFile;

class UploadFiles
{
    private $_uploadFile;
    private $_path;
    private $_fileName;

    public function __construct(UploadedFile $file, $path)
    {
        $this->setFile($file)
            ->setPath($path)
            ->makeDir()
            ->setFileName($file);

    }

    private function setFile(UploadedFile $file)
    {
        $this->_uploadFile = $file;
        return $this;
    }

    private function setPath($path)
    {
        $this->_path = public_path() . $path;
        return $this;
    }

    private function makeDir()
    {
        if (!is_dir($this->_path)) {
            try {
                mkdir($this->_path, 0777);
            } catch (\Exception $e) {
                throw new \Exception($e->getMessage());
            }
        }
        return $this;
    }

    private function setFileName(UploadedFile $file)
    {
        $this->_fileName = md5(uniqid(mt_rand())) . "." . $file->getClientOriginalExtension();
        return $this;
    }

    private function getFileName()
    {
        return $this->_fileName;
    }

    private function moveFile()
    {
        $this->_uploadFile->move($this->_path, $this->_fileName);
        return $this;
    }

    public function upload()
    {
        return $this->moveFile()
            ->getFileName();
    }

}