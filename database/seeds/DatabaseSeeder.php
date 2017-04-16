<?php
use App\Room;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        $this->call('RoomTableSeeder');

        Model::reguard();
    }
}

class RoomTableSeeder extends Seeder {

    public function run()
    {
        DB::table('room')->delete();

        Room::create(array('name' => 'A room', 'maximum_capacity' => 10));
        Room::create(array('name' => 'B room', 'maximum_capacity' => 7));
        Room::create(array('name' => 'C room', 'maximum_capacity' => 4));
    }

}
