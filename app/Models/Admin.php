<?php

namespace App\Models;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';
    protected $fillable = [
        'username_admin',
        'pw_admin',
        'fullname_admin',
        'pertanyaan',
        'jawaban',
    ];
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->string('username_admin')->unique();
            $table->string('pw_admin');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('admin');
    }
}
