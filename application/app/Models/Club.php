<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'city', 'description', 'image', 'member_count', 'status'];

    public function memberships()
    {
        return $this->hasMany(ClubMembership::class);
    }

    public function members()
    {
        return $this->belongsToMany(User::class, 'club_memberships')->wherePivot('is_active', 1);
    }
}
