<?php
use App\Room;
use App\RoomReservation;
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
        $this->call('roomReservationTableSeeder');

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

class roomReservationTableSeeder extends Seeder {

    public function run()
    {
        DB::table('roomReservation')->delete();

        roomReservation::create(array('roomname' => '会議室A', 'starttime' => '2017-05-26 20:00:00', 'endtime' =>  '2017-05-26 20:30:00','usernamekj' => '上田耕太','usernamekn' => 'ｳｴﾀﾞｺｳﾀ','Contents' => '春面談','membernum' => 3));
        roomReservation::create(array('roomname' => '会議室B', 'starttime' => '2018-01-30 19:00:00', 'endtime' =>  '2018-01-30 21:00:00','usernamekj' => '上田耕太','usernamekn' => 'ｳｴﾀﾞｺｳﾀ','Contents' => '発表会','membernum' => 11));
    }

}
