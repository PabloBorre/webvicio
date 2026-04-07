<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    protected $fillable = [
        'venue_id',
        'event_date',
        'label',
        'active',
    ];

    protected $casts = [
        'event_date' => 'date',
        'active'     => 'boolean',
    ];

    public function venue(): BelongsTo
    {
        return $this->belongsTo(Venue::class);
    }

    public function scopeActive($query)
    {
        return $query->where('active', true);
    }

    public function scopeUpcoming($query)
    {
        return $query->where('event_date', '>=', today())->orderBy('event_date');
    }
}