<?php

declare(strict_types=1);

namespace App\Helper;

use Rubricate\Resource\DirectoryPathResource;
use Rubricate\Resource\FileResource;
use Rubricate\Resource\BufferResource;

class ViewHelper
{
    public function __construct(?string $path = null)
    {
        $dir    = (is_null($path))? PATH_VIEW: $path;
        $path   = new DirectoryPathResource($dir);
        $file   = new FileResource($path);
        $buffer = new BufferResource($file);

        $this->file   = $file;
        $this->buffer = $buffer;
    }

    public function render(string $view, array $data = []): void
    {
       $this->file->incorporate($view, $data);
    } 

    public function str(string $view, array $data = []): string
    {
       return $this->buffer->incorporate($view, $data);
    } 
}    

