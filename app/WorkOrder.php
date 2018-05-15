<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use LaravelEnso\CommentsManager\app\Traits\Commentable;
use LaravelEnso\AddressesManager\app\Traits\Addressable;
use LaravelEnso\DocumentsManager\app\Traits\Documentable;

class WorkOrder extends Model
{
    use Commentable, Documentable, Addressable;

    protected $fillable = ['name', 'description', 'is_active', 'user_id', 'category_id',
        'location_id', 'request_id', 'status_id', 'priority_id', 'started_at', 'completed_at',
        'subject', 'customer_id', 'contractor_id', 'scheduled', 'scheduled_quote', 'quote_prepared', 'contractor_quote',
        'customer_quote', 'commission_deductions'];

    protected $dates = ['started_at', 'completed_at', 'scheduled', 'scheduled_quote', 'quote_prepared'];

    protected $attributes = ['is_active' => false];

    protected $casts = ['is_active' => 'boolean'];

}