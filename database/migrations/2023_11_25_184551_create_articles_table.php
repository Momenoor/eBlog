<?php

use App\Models\Categories;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('body');
            $table->unsignedBigInteger('author_id');;
            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignIdFor(Categories::class);
            $table->integer('status')->default(0);
            $table->boolean('is_pinned')->default(false);
            $table->timestamp('submitted_at')->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamp('declined_at')->nullable();
            $table->unsignedBigInteger('hero_image_id')->nullable();
            $table->foreign('hero_image_id')->references('id')->on('media')->onDelete('set null');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
