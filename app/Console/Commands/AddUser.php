<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Faker\Factory as Faker;
use Hash;

class AddUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'add 10 random users';

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
        // data faker indonesia
        $faker = Faker::create('en_EN');

        // membuat data dummy sebanyak 10 record
        for($x = 1; $x <= 10; $x++){

            // insert data dummy pegawai dengan faker
            $user = User::create([
                'name' => $faker->name,
                'email' => $faker->unique->safeEmail,
                'password' => Hash::make($faker->password),
            ]);

        $this->info('Data added successfully');
        }
    }
}
