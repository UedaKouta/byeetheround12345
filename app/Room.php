<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'room';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'name','maximum_capacity'];


    public function read_all() {
      return $this->get();
    }

    public function read_by_pkey($id) {
      return $this->where('id', '=', $id)->get();
    }

    public function read_by_name($name) {
      return $this->where('name','=',$name)->get();
    }

}
