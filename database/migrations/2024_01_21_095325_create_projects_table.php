<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('project_name');
            $table->string('project_slug');
            $table->string('project_header_image');
            $table->string('project_image');
            $table->string('project_author');
            $table->text('project_description');
            $table->string('project_location');
            $table->date('project_date');
            $table->string('project_start_time');
            $table->date('project_registration_deadline');
            $table->boolean('is_done')->default(false);
            $table->string('contact_person_name');
            $table->string('contact_person_phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
