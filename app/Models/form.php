<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'form'; // Add this line to specify the table name
    protected $fillable = [
        'productName', 'quantity', 'category', 'imageUpload', 'price', 'description', 'phoneNumber'
    ];

    
}
