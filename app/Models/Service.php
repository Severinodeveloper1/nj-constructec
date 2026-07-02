<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use OwenIt\Auditing\Auditable as AuditableTrait;

class Service extends Model implements Auditable
{
    use HasFactory, AuditableTrait;

    protected $fillable = [
        'name',
        'slug',
        'icon',
        'short_description',
        'description',
        'technical_specs',
        'gallery',
        'attachments',
        'is_active',
        'order',
    ];

    protected $casts = [
        'gallery' => 'array',
        'attachments' => 'array',
        'is_active' => 'boolean',
        'order' => 'integer',
    ];
}
