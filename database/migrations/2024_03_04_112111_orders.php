<?php
declare(strict_types=1);
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table){
            $table->id();
            $table->date('date');
            $table->time('time');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->string('car', 100);
            $table->integer('status');
            $table->bigInteger('id_executer');
            $table->foreign('id_executer')->references('id')->on('users');

            $table->softDeletes();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
