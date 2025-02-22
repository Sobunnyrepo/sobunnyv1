<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageBuilder extends Model
{
    use HasFactory;

    protected $table = 'page_builders';
    protected $fillable = [
        'addon_name',
        'addon_type',
        'addon_location',
        'addon_order',
        'addon_page_id',
        'addon_page_type',
        'addon_settings',
        'addon_namespace',
    ];
}
