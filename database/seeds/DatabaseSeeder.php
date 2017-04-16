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

        Room::create(array('name' => '会議室A', 'maximum_capacity' => 10));
        Room::create(array('name' => '会議室B', 'maximum_capacity' => 5));
        Room::create(array('name' => '会議室C', 'maximum_capacity' => 3));
        Room::create(array('name' => '会議室D', 'maximum_capacity' => 2));
        Room::create(array('name' => '会議室E', 'maximum_capacity' => 1));
    }

}
