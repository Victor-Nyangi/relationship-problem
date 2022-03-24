<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class department extends Model
{
    use HasFactory;

    protected $table = 'departments';
    protected $fillable = ['dpname'];
     
    public function User()
    {
        return $this->belongsTo(User::class);
    }  
}
