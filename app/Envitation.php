<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Envitation extends Model
{
    //
    protected $fillable = ['description','category', 'opening_date', 'approve_budget_cost','project_status',];
}
