<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \DateTime;

class CalendarController extends Controller
{
  public function index()
  {
    //$cal_from_date = DateTime::createFromFormat("Y-m-d", date("Y-m-d"));
    //$cal_to_date = DateTime::createFromFormat("Y-m-d", date("Y-m-d", strtotime("+1 week")));
    $cal_from_date = new DateTime();
    //$cal_to_date = (new DateTime())->modify('+1 days');
    $attribute = [
      'cal_from_date' => $cal_from_date,
      //'cal_to_date' => $cal_to_date,
      'cal_days_range' => 7
      //'cal_from_date' => new DateTime(date("Y-m-d")),
      //'cal_to_date' => new DateTime(date("Y-m-d", strtotime("+1 week")))
    ];
    return view('calendar', $attribute);
  }
}
