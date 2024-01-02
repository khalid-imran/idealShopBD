<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;
    protected $table = 'website_settings';
    protected $appends = [
        'full_path',
    ];
    public function getFullPathAttribute()
    {
        if ($this->logo != null) {
            return asset('storage/uploads/'.$this->logo);
        }
    }
}