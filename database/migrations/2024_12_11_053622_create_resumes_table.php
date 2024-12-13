<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->text('education');
            $table->text('experience');
            $table->text('skills');
            $table->text('languages');
            $table->timestamps();

            Schema::table('resumes', function (Blueprint $table) {
                $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relación con usuarios
            });

        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resumes');

        Schema::table('resumes', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });

    }
};
