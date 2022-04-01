<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('tb_user')->insert([
    		'nama' => 'Mayanda',
    		'username' => 'admin',
    		'password' => bcrypt('admin123'),
    		'role' => 'admin'
    	]);

        DB::table('tb_user')->insert([
            'nama' => 'Levi Arc',
            'username' => 'owner',
            'password' => bcrypt('owner123'),
            'role' => 'owner'
        ]);

        DB::table('tb_user')->insert([
            'nama' => 'Eren Yeager',
            'username' => 'kasir',
            'password' => bcrypt('kasir123'),
            'role' => 'kasir'
        ]);
    }
}
