<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('ContactTableSeeder');
    $this->command->info('Contacts table seeded!');
	}

}

class ContactTableSeeder extends Seeder {

    public function run()
    {
        DB::table('contacts')->delete();

        Contact::create(array(
                'first_name' => 'Benjamin',
                'last_name'  => 'Fenton',
                'email_address'      => 'benfenton@gmail.com',
                'description'=> 'my self',
                'created_at' => new DateTime,
                'updated_at' => new DateTime 
            ));
        Contact::create(array(
                'first_name' => 'David',
                'last_name'  => 'Fenton',
                'email_address'      => 'davidfenton@gmail.com',
                'description'=> 'my dad',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ));
        Contact::create(array(
                'first_name' => 'Matt',
                'last_name'  => 'Carlone',
                'email_address'      => 'matthewcarlone@gmail.com',
                'description'=> 'my bf',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ));

    }

}