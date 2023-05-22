<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Pricing extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'product_id_list', 'priceing', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
