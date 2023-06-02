<?php

namespace Modules\Shared\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class MakeRepositoryContractCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'module:make-repository-contract {name} {module} {--contract}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'generate a repository contract class with contract';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->makeRepository();

        if ($this->option('contract')){
            Artisan::call('php artisan module:make-repository-contract' ,
                [$this->argument('name') , $this->argument('module')]);
        }
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['name', InputArgument::REQUIRED, 'name of the repo and contract class'],
            ['module', InputArgument::REQUIRED, 'name of module'],
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['contract', true, InputOption::VALUE_NEGATABLE, 'An example option.', null],
        ];
    }

    public function getSingularClassName(): string
    {
        return ucwords(Str::singular($this->argument('name')));
    }

    public function getSingularModuleName(): string
    {
        return ucwords(Str::singular($this->argument('module')));
    }

    private function getSourceFile(): string
    {
        return base_path('Modules\\' . $this->getSingularModuleName() . '\\Repositories\\' . $this->getSingularClassName() . 'Repo.php');
    }

    private function makeRepository()
    {
        $path = $this->getSourceFile();

        if (!File::exists(dirname($path))) {
            File::makeDirectory(dirname($path));
        }

        $contents = base_path('stubs\\amir-ys-stubs\\repository.stub');

        $stubFile = file_get_contents($contents);
        $stubVariables = [
            '$NAMESPACE$' => 'Modules\\' . $this->getSingularModuleName() . '\\Repositories',
            '$CLASS$' => $this->getSingularClassName(),
        ];

        foreach ($stubVariables as $key => $value){
            $stubFile = str_replace($key , $value , $stubFile );
        }

        File::put($path , $stubFile);
    }
}
