<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'kd_pengaduan';
    protected $table = 'pengaduan';
    protected $fillable = [
        'username_cus',
        'keluhan',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */

    /**
     * Indicates that the primary key is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;
}
