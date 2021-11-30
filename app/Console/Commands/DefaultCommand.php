<?php

namespace App\Console\Commands;

use App\Models\Flight;
use Illuminate\Console\Command;

class DefaultCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        $flight = Flight::find(1);
        $flight->name = "def";
        $flight->save();
        return Command::SUCCESS;
    }
}
