<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			User::create([
                'name' => 'Adam',
                'username' => 'adam',
                'email' => 'adam@yourdomain.com',
                'password' => 'password',
                'dob' => '1991-01-01'
			]);
            User::create([
                'name' => 'Ben',
                'username' => 'ben',
                'email' => 'ben@yourdomain.com',
                'password' => 'password',
                'dob' => '1992-02-02'
            ]);
            User::create([
                'name' => 'Charlie',
                'username' => 'charlie',
                'email' => 'charlie@yourdomain.com',
                'password' => 'password',
                'dob' => '1993-03-03'
            ]);
            User::create([
                'name' => 'Dave',
                'username' => 'dave',
                'email' => 'dave@yourdomain.com',
                'password' => 'password',
                'dob' => '1994-04-04'
            ]);
            User::create([
                'name' => 'Eric',
                'username' => 'eric',
                'email' => 'eric@yourdomain.com',
                'password' => 'password',
                'dob' => '1995-05-05'
            ]);
            User::create([
                'name' => 'Fred',
                'username' => 'fred',
                'email' => 'fred@yourdomain.com',
                'password' => 'password',
                'dob' => '1996-06-06'
            ]);
            User::create([
                'name' => 'George',
                'username' => 'george',
                'email' => 'george@yourdomain.com',
                'password' => 'password',
                'dob' => '1997-07-07'
            ]);
		}
	}

}