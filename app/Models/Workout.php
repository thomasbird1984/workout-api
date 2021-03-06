<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Workout extends Model {
    protected $fillable = [
        'user_id', 'title', 'slug', 'description', 'est_time', 'level'
    ];

    public function taggable() {
        return $this->morphTo();
    }

    public function exercises() {
        return $this->belongsToMany('App\Models\Exercise')->withPivot('id', 'reps', 'duration');
    }

//    public function budgets() {
//        return $this->morphedByMany('App\Http\Models\Budget', 'taggable');
//    }
//
//    public function transactions() {
//        return $this->morphedByMany('App\Http\Models\Transaction', 'taggable');
//    }
}