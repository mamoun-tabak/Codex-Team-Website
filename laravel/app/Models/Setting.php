<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'logo', 'favicon', 'facebook', 'instagram', 'linkedin', 'twitter', 'phone', 'email', 'created_at', 'updated_at', 'deleted_at'];

    public static function checkSettings(){

        $settings = Self::all();
        if (count($settings) < 1) {
            $data = [
                'id' => 1,
            ];
            Self::create($data);
        }

        return Self::first();
    }
}
