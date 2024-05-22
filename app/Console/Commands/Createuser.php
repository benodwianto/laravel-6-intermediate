<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class Createuser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laravel:adduser';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create new User';

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
        $name = $this->ask("input Your name!");
        $email = $this->ask("input Your email!");
        $password = $this->secret("input Your password!");

        $this->line("User : {$name} <{$email}>");
        if ($this->confirm("Do you want to continue?")) {
            $user = new User();
            $user->name = $name;
            $user->email = $email;
            $user->password = Hash::make($password);

            $user->save();
            $this->line("User Created!");
        } else {
            $this->line("Canceled!");
        }

        $this->line("Done!");
    }
}
