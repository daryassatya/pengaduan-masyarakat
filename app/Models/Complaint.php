<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id']; // Selain ini maka BOLEH diisi/diubah

    protected $with = ['complaintCategory', 'user']; // Eager load, agar tidak perlu loop berulang2

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }

    public function complaintCategory()
    {
        return $this->belongsTo(ComplaintCategory::class);

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
