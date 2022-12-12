<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Setting extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'data' => 'array'
    ];

    public function heroDescription(): ?string
    {
        return Arr::get($this->data, 'hero_description');
    }

    public function heroImgUrl()
    {
        return 'https://ui-avatars.com/api/?name=hero_image&color=7F9CF5&background=EBF4FF';
    }
}
