<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roomReservation extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'roomReservation';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','roomname','starttime','endtime','usernamekj','usernamekn','Contents','membernum'];



    public function read_by_pkey($id) {
      return $this->where('id', '=', $id)->get();
    }

    public function read_by_roomname($roomname) {
      return $this->where('roomname','=',$roomname)->get();
    }

    public function update_by_time($starttime) {
      return $this->where('starttime','=',$starttime)->update(['starttime' => '2999-12-31 19:00:00']);;
    }

    public function insert_table($indatas) {
      return $this->insertGetId(
    ['roomname'=>$indatas[0],'starttime'=>$indatas[1],'endtime'=>$indatas[2],'usernamekj'=>$indatas[3],'usernamekn'=>$indatas[4],'Contents'=>$indatas[5],'membernum'=>10]);
    }
    
    public function read_date_range($from, $to) {
      return $this->whereBetween('starttime', [$from, $to])->get();
    }
}
