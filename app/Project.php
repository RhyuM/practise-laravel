<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = ['description','project_type', 'opening_date', 'approve_budget_cost','project_status'];
}
