<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\roomReservation;


class TestController2 extends Controller
{
   public function getIndex()
   {
     $roomReservationModel = new roomReservation;
     $res = $roomReservationModel->read_by_roomname('会議室A');

     return view('test-blade', ['message' => 'Hello!!!!!', 'room_recs' => $res]);
      }
}
