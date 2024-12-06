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
        return __DIR__ . '/../stubs/action.stub'; // Dopasuj ścieżkę do stubów w paczce
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Actions';
    }

    public function handle()
    {
        $this->ensureInterfaceExists();

        parent::handle();
    }

    protected function ensureInterfaceExists()
    {
        $interfacePath = base_path('app/Actions/ActionInterface.php');

        if (File::exists($interfacePath)) {
            $this->info('ActionInterface already exists.');
            return;
        }

        File::ensureDirectoryExists(base_path('app/Actions'));

        $interfaceStub = <<<PHP
<?php

namespace App\Actions;

interface ActionInterface
{
    /**
     * Execute the action with the given parameters.
     *
     * @param mixed ...\$params
     * @return mixed
     */
    public function execute(...\$params);
}

PHP;

        // Zapisz plik interfejsu
        File::put($interfacePath, $interfaceStub);

        $this->info('ActionInterface created successfully.');
    }
}
