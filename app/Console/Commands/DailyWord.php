<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class DailyWord extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily.word';

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
     * @return mixed
     */
    public function handle()
    {
        $words = [
            'asynchronous' => 'asynchronous is the function in which the function is executed in the background',
            'synchronous' => 'synchronous is the function in which the function is executed in the foreground',
            'hello' => 'hello world my brother',
            'goodbye' => 'goodbye my brother'
        ];

        $users = User::all();
        foreach ($users as $user) {
            $key = array_rand($words);
            $value = $words[$key];

            Mail::raw("{$key} -> {$value}", function ($mail) use ($user) {
                $mail->to($user->email)->subject('Word of the Day');
            });

            // Optional: Sleep to avoid hitting rate limits (if necessary)
            sleep(3);
        }
    }
}
