<?php

use Illuminate\Database\Seeder;

class UserSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $user = new \App\User();
            $user->email = $faker->email;
            $user->name = $faker->name;
            $user->password = md5('password');
            if ($user->save()) {
                if ($user->user_detail == null) {
                    $userDetail = new \App\UserDetail();
                    $userDetail->cover_pic = $faker->imageUrl();
                    $userDetail->profile_pic = $faker->imageUrl();
                    $userDetail->about_me = $faker->text(1000);
                    $userDetail->phone = $faker->phoneNumber;
                    $userDetail->whatsapp = $faker->phoneNumber;

                    $user->user_detail()->save($userDetail);
                };
                if ($user->store == null) {
                    $store = new \App\Store();
                    $store->address = $faker->address;
                    $store->lat = 12.9416 + random_int(0.0014, 0.0087);
                    $store->lng = 78.8597 + random_int(0.0014, 0.0087);
                    $store->images = $faker->imageUrl();
                    $user->store()->save($store);
                }
            }


        }
    }
}
