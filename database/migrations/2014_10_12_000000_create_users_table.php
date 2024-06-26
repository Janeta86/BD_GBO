<?php
declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('family');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('comment');
            $table->string('password');
            $table->string('specialization');
            $table->boolean('Is_admin');
            $table->boolean('Is_master');

            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
