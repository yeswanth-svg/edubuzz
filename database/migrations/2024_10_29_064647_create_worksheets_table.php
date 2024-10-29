<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('worksheets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subtopic_id')->constrained()->onDelete('cascade'); // Foreign key to 'topics'
            $table->string('name'); // Name of the worksheet
            $table->string('slug'); // Name of the worksheet
            $table->text('description')->nullable(); // Description of the worksheet
            $table->string('thumbnail')->nullable(); // Path to the thumbnail image
            $table->string('file_path'); // Path to the stored PDF file
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('worksheets');
    }
};
