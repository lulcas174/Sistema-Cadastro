<?php

use Illuminate\Database\Seeder;
//esse carbon está vindo de vendor>nesbot>bin>carbon
use Carbon\Carbon;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt_atual = Carbon::Now();
        DB::table('users')->insert(
            [
                'name'=> 'lucasAdmin',
                //bcrypt serve para encpritar a senha no banco
                'password'=> 'admin',
                'tipo_usuario' => 'administrador',
            ]
        );
    }
}
