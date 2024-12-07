<?php

namespace Record\Stuberator\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Facades\File;

class MakeAction extends GeneratorCommand
{
    protected $name = 'make:action';
    protected $description = 'Create a new Action class';
    protected $type = 'Action';

    protected function getStub()
    {
        return __DIR__ . '/../../stubs/action.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Actions';
    }
}
