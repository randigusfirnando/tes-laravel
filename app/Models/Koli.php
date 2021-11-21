<?php

namespace App\Models;
use App\Models\User;
use App\Models\Koli;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koli extends Model
{
    use HasFactory;

    protected $table = 'koli';
    protected $guarded = ['id'];

    public function user()
    {
        belongsTo(User::class, 'user', 'user');
    }

}
