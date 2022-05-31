<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class JobOffer extends Model
{
    use HasFactory;

    protected $table = 'job_offers';

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
