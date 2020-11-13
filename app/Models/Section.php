<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    // use HasFactory;

    public $timestamps = false;
    protected $table = "sections";


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'order',
        'content',
        'anchor',
        'appointement_before',
        'type',
        'image_url'
    ];

    protected $casts = [
        'appointement_before' => 'boolean',
        'anchor' => 'boolean',
    ];
}
