<?php


namespace Behind\BLucidConsole\Components;


use Lucid\Console\Components\Component;

class Request extends Component
{
    public function __construct($title, $service, $namespace, $file, $path, $relativePath, $content)
    {
        $this->setAttributes([
            'request' => $title,
            'service' => $service,
            'namespace' => $namespace,
            'file' => $file,
            'path' => $path,
            'relativePath' => $relativePath,
            'content' => $content,
        ]);
    }
}