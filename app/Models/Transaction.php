<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = "transactions";
    protected $primaryKey = "id";
    protected $fillable = ['type', 'description', 'amount', 'created_at', 'updated_at'];
}
