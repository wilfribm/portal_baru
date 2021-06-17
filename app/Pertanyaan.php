<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    // Table Name
    protected $table = 'pertanyaans';

    // Primary Key
    public $primaryKey = 'pertanyaan_id';

    // Timestamps
    public $timestamps = true;

    // public function user(){
    //     return $this->belongsTo('App\Models\User');
    // }
}
