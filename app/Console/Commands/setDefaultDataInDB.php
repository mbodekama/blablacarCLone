<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Model\role;
use App\User;
use App\Model\user_has_roles;
use Illuminate\Support\Facades\Hash;

class setDefaultDataInDB extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'appStage:setDefaultDataInDB';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This commande help you to set default data needded to start fresh app';

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

        $user =  User::create([
            'name' => 'ADMIN WEB',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin@admin.com'),
            'dateEnregistrement' => date('d/m/Y'),
        ]);

        role::create(['libelle' => 'admin']);
        role::create(['libelle' => 'apprenant']);

        $role = role::where('libelle','=','admin')->first();
        user_has_roles::create([
            'user_id' =>$user->id,
            'role_id' =>$role->id,
                ]);
        $this->info('Default data set correctly');


        return 0;
    }
}
