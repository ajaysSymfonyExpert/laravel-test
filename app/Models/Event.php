<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\Models\Workshop;
class Event extends Model
{
    public function workshops()
    {
        return $this->hasMany(Workshop::class);
    }
    public function futureWorkshops()
    {
        return $this->hasMany(Workshop::class)->where('start', '>', Carbon::now()->format('Y-m-d'));
    }
}
