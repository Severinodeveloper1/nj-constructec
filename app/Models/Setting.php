<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use OwenIt\Auditing\Auditable as AuditableTrait;

class Setting extends Model implements Auditable
{
    use HasFactory, AuditableTrait;

    protected $fillable = [
        'name',
        'logo_path',
        'phone',
        'whatsapp_phone',
        'email',
        'address',
        'maps_iframe',
        'facebook_url',
        'instagram_url',
        'tiktok_url',
        'youtube_url',
    ];
}
