<?php

namespace App\Models;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    protected $fillable = [
        'username_cus',
        'pw_cus',
    ];
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->string('username_cus')->unique();
            $table->string('pw_cus');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('customer');
    }
}
