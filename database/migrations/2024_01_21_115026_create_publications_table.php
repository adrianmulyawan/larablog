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
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('publication_category_id');
            $table->foreign('publication_category_id')->references('id')->on('publication_categories')->onDelete('cascade');
            $table->string('publication_name');
            $table->string('publication_slug');
            $table->text('publication_body');
            $table->string('publication_header_image');
            $table->string('publication_image');
            $table->string('publication_author');
            $table->string('publication_uploader');
            $table->string('publication_url_download');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
