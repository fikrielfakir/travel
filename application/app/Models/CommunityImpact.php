<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommunityImpact extends Model
{
    use HasFactory;

    protected $table = 'community_impact';
    
    protected $fillable = ['metric_name', 'display_name', 'count', 'icon', 'description', 'status'];

    protected $casts = [
        'count' => 'integer',
        'status' => 'boolean',
    ];

    public static function getFootprint()
    {
        return self::where('status', 1)->orderBy('count', 'desc')->get();
    }
}
