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
        'about_history',
        'about_mission',
        'about_vision',
        'about_values',
        'brochure_path',
        'contact_email_receiver',
        'pilar_1_title',
        'pilar_1_desc',
        'pilar_2_title',
        'pilar_2_desc',
        'pilar_3_title',
        'pilar_3_desc',
        'about_banner_path',
        'about_banner_badge',
        'about_banner_title',
        'about_metric_1_value',
        'about_metric_1_label',
        'about_metric_2_value',
        'about_metric_2_label',
        'about_metric_3_value',
        'about_metric_3_label',
        'about_metric_4_value',
        'about_metric_4_label',
    ];

    protected $casts = [
        'about_values' => 'array',
    ];
}
