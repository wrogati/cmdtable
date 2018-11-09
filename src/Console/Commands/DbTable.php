<?php

namespace Wrogati\CmdTable\Console\Commands;

use Illuminate\Support\Facades\Schema;
use Illuminate\Console\Command;
use DB;

class DbTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:change {table : Table name} {--op= : Options [d drop table | u create table]}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make changes on table';

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
        if ($this->option('op') == 'd') {
            Schema::dropIfExists($this->argument('table'));
        } else if ($this->option('op') == 'u') {
            // Schema::dropIfExists($this->argument('table'));
        }else if($this->option('op') == 't'){
            DB::table($this->argument('table'))->truncate();
        }
        
    }
}
