<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Helper\CarTimerHelper;

class CarTimer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cartimer:getsum {min}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'To get sum of digits of the digital timer';

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
        $min = $this->argument('min');
        $timer = CarTimerHelper::carTimer($min);
        print_r (json_encode($timer));
        echo"\n";
    }
}
