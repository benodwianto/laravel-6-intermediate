<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class LaravelCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Laravel:basic 
    {argument : ini adalah argument}
    {--o|opsi= : ini adalah option}
    ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ini adalah laravel command description';

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
        $this->info("ini adalah deskripsi info");
        $this->error("ini adalah deskripsi error");
        $this->line("ini adalah deskripsi display line");

        $this->line(print_r($this->options()) . ' ' . print_r($this->arguments()));
        $this->line(($this->option('opsi')) . ' ' . $this->argument('argument'));

        $name = $this->ask("What is your name?");
        $password = $this->secret("What is your password?");

        if ($this->confirm("Do you want to continue?")) {
            $this->line($name . ' ' . $password);
        }
    }
}
