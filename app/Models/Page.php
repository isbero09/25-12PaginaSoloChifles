<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'slug',
        'title',
        'content',
        'cta_content',
        'value_1',
        'value_2',
        'value_3',
        'value_4',
        'product1_content',
        'product2_content',
        'schedules_content',
        'phone_content',
        'video_url',
        'product1_title',
        'product1_price',
        'product2_title',
        'product2_price',
        'sunday_hours',
        'monday_hours',
        'tuesday_hours',
        'wednesday_hours',
        'thursday_hours',
        'friday_hours',
        'saturday_hours',
    ];
}