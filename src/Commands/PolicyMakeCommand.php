<?php

namespace Behind\BLucidConsole\Commands;

use Behind\BLucidConsole\Generators\PolicyGenerator;
use Lucid\Console\Command;
use Lucid\Console\Filesystem;
use Lucid\Console\Finder;
use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Input\InputArgument;

/**
 * Class PolicyMakeCommand
 * @package Behind\BLucidConsole\Commands
 */
class PolicyMakeCommand extends SymfonyCommand
{
    use Finder;
    use Command;
    use Filesystem;

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:policy';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a Policy.';

    /**
     * The type of class being generated
     * @var string
     */
    protected $type = 'Policy';

    /**
     * Execute the console command.
     *
     * @return bool|null
     */
    public function fire()
    {
        $generator = new PolicyGenerator();

        $name = $this->argument('policy');

        try {
            $policy = $generator->generate($name);

            $this->info('Policy class created successfully.' .
                "\n" .
                "\n" .
                'Find it at <comment>' . $policy->relativePath . '</comment>' . "\n"
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
            ['policy', InputArgument::REQUIRED, 'The Policy\'s name.']
        ];
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    public function getStub()
    {
        return __DIR__ . '/../Generators/stubs/policy.stub';
    }
}