<?php


namespace Behind\BLucidConsole\Generators;

use Behind\BLucidConsole\BLucidFinder;
use Lucid\Console\Generators\Generator as LucidGenerator;

class Generator extends LucidGenerator
{
    use BLucidFinder;
}