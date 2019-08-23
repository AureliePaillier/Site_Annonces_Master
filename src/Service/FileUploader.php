<?php
namespace App\Service;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileUploader
{
    /** @var string */
    private $targetDirectory;

    /** @param string $targetDirectory */
    public function  __construct(string $targetDirectory)
    {
        $this->targetDirectory=$targetDirectory;
    }

     /** @return string */
    public function  getTargetDirectory(): string
    {
        return $this->targetDirectory;
    }

    /**
     * @param UploadedFile $filr
     *
     * @return string
     */
    public function  uploaded(UploadedFile $file):string{
        $fileName=md5(uniqid()).'.'.$file->guessExtension();
        $file->move($this->targetDirectory, $fileName);
        return $fileName;
    }
}
