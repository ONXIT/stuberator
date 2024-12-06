<?php

namespace Record\Stuberator\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeService extends GeneratorCommand
{
    protected $name = 'make:service';
    protected $description = 'Create a new Service class';
    protected $type = 'Service';

    protected function getStub()
    {
        return base_path('stubs/service.stub');
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Services';
    }
}
