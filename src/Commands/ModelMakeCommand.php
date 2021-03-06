<?php

namespace Behind\BLucidConsole\Commands;

use Behind\BLucidConsole\Generators\ModelGenerator;
use Lucid\Console\Command;
use Lucid\Console\Filesystem;
use Lucid\Console\Finder;
use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Input\InputArgument;

/**
 * Class ModelMakeCommand
 * @package Behind\BLucidConsole\Commands
 */
class ModelMakeCommand extends SymfonyCommand
{
    use Finder;
    use Command;
    use Filesystem;

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:model';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Eloquent Model.';

    /**
     * The type of class being generated
     * @var string
     */
    protected $type = 'Model';

    /**
     * Execute the console command.
     *
     * @return bool|null
     */
    public function fire()
    {
        $generator = new ModelGenerator();

        $name = $this->argument('model');

        try {
            $model = $generator->generate($name);

            $this->info('Model class created successfully.' .
                "\n" .
                "\n" .
                'Find it at <comment>' . $model->relativePath . '</comment>' . "\n"
            );
        } catch (Exception $e) {
            $this->error($e->getMessage());
        }
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    public function getArguments()
    {
        return [
            ['model', InputArgument::REQUIRED, 'The Model\'s name.']
        ];
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    public function getStub()
    {
        return __DIR__ . '/../Generators/stubs/model.stub';
    }
}