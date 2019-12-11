<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DailyReport extends Model
{

    protected $dates = ['reporting_time'];
   
    protected $fillable = [
        'title',
        'content',
        'reporting_time',
        'user_id'
    ];
    
    public function getByUserId($id)
    {
        return $this->where('user_id')->get();
    }

    public static function getDate($searchMonth)
    {
        $dailys = self::where('reporting_time', 'like', $searchMonth.'%')->get();
        return $dailys;
    }
}
