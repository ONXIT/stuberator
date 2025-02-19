<?php

namespace Record\Stuberator\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeEnum extends GeneratorCommand
{
    protected $name = 'make:enum';
    protected $description = 'Create a new Enum class';
    protected $type = 'Enum';

    protected function getStub()
    {
        return __DIR__ . '/../../stubs/enum.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Enums';
    }
}
