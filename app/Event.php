<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Event extends Model
{

protected $fillable= ['id','name','title','location','startdate','enddate','description','vacancy','active'];

    public static $create_validation_rules = [
        'id' => 'required',
        'name' => 'required',
        'description' => 'required',
        'location' => 'required',
        'subject' => 'required',
        'calendar' => 'required',
        'start' => 'required',
        'end' => 'required',
    ];
    public static function getEvents(){
        return
            DB::table('events')->get();
    }
}