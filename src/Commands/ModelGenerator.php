<?php

namespace Ajtarragona\CrudGenerator\Commands;

use Illuminate\Support\Str;
use Illuminate\Console\Command;
use \Artisan;

/**
 * Class CrudGenerator.
 *
 * @author  Awais <asargodha@gmail.com>
 */
class ModelGenerator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crud:model
                            {name : Table name} ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Model from table';

    /**
     * Execute the console command.
     *
     * @return bool|null
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     *
     */
    public function handle()
    {
        $tablename=$this->argument('name');

        $this->info('Generating model from table '.$tablename.' ...');

        // php artisan code:models --table=users

        Artisan::call('code:models',['--table'=> $tablename]);

        return true;
    }

}
