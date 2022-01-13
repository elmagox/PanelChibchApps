<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = 'companies';
    protected $fillable = [
        'company_name',
        'company_detail',
        'company_image',
        'company_work_image',
        'bg_color',
        'client_id'
    ];
}
