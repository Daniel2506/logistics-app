<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CheckPhpExtensions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:extensions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Verifica extensiones';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $required = ['zip', 'xml', 'gd', 'mbstring', 'fileinfo','xx'];

        foreach ($required as $value) {
            # code...
            $this->info("Extension {$value}: ". (extension_loaded($value) ? 'Cargada' : 'No Cargada') );
        }
    }
}
