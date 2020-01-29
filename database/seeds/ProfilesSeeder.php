<?php

use Illuminate\Database\Seeder;
use App\Profile;

class ProfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $profile = new Profile();

        $profile->name = 'hukum';
        $profile->gender = 'male';
        $profile->phone = '9847980223';
        $profile->email = 'basnethukum789@gmail.com';
        $profile->address = 'manpur';
        $profile->nationality = 'nepali';
        $profile->dateofbirth = '90/5/70';
        $profile->education = 'bacholar';
        $profile->contact = 'kathmandu';

        $profile->save();   



        
    }
}
