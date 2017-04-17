<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Room;


class TestController extends Controller
{
   public function getIndex()
   {
     $RoomModel = new Room;
     $res = $RoomModel->read_by_name('会議室A');

     return view('test-blade', ['message' => 'Hello!!!!!', 'room_recs' => $res]);
   }
}
