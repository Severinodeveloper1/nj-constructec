<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use OwenIt\Auditing\Auditable as AuditableTrait;

class Complaint extends Model implements Auditable
{
    use HasFactory, AuditableTrait;

    protected $fillable = [
        'claim_number',
        'full_name',
        'document_type',
        'document_number',
        'email',
        'phone',
        'address',
        'department',
        'province',
        'district',
        'client_type',
        'claim_type',
        'good_type',
        'good_description',
        'claimed_amount',
        'incident_description',
        'request',
        'status',
        'response',
        'responded_at',
    ];

    protected function casts(): array
    {
        return [
            'claimed_amount' => 'decimal:2',
            'responded_at' => 'datetime',
        ];
    }
}
