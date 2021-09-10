<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class record extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['reference_code','account_origin','origin_balance','account_destination','destination_balance','amounts',];
}
