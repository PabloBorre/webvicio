<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'venue',
        'event_date',
        'label',
        'active',
    ];

    protected $casts = [
        'event_date' => 'date',
        'active'     => 'boolean',
    ];

    public function getVenueLabelAttribute(): string
    {
        return match ($this->venue) {
            'bro'        => 'Brø Málaga',
            'playa_aruba' => 'Playa Aruba',
            default      => $this->venue,
        };
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