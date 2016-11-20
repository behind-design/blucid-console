<?php


namespace Behind\BLucidConsole\Components;


use Lucid\Console\Components\Component;

class Policy extends Component
{
    public function __construct($title, $namespace, $file, $path, $relativePath, $content)
    {
        $this->setAttributes([
            'policy' => $title,
            'namespace' => $namespace,
            'file' => $file,
            'path' => $path,
            'relativePath' => $relativePath,
            'content' => $content,
        ]);
    }
}