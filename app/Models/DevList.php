<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DevList extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function getDevList()
    {
        return DevList::all()->groupBy('level')->map(function ($items) {
            return $items->map(function ($item) {
                return ['name' => $item->name];
            })->values();
        })->toArray();
    }
}
