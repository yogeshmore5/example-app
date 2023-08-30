<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'country', 'state', 'best_month_to_visit',
        'best_season_to_visit', 'photo_name', 'is_active',
    ];

    // Accessor to get the full URL for the photo_name attribute
    public function getPhotoNameAttribute()
    {
        if ($this->attributes['photo_name']) {
            return url('storage/places/' . $this->attributes['photo_name']);
        }
        return null;
    }
}
