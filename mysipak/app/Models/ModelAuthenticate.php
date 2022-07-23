<?php

namespace App\Models;
  
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ModelAuthenticate extends Authenticatable
{
    protected $keyType = 'string';

    public static function boot()
    {
        parent::boot();
        
        static::creating(function($item) {
            $item->id = (string) Str::orderedUuid();
        });

    }

    public function scopeHasRole($query, $value)
    {
        return $this->role()->whereHas('module', function ($query) use ($value) {
            return $query->where('tag', $value);
        })->count() > 0;
    }
}