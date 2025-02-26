<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('documents_sections')) {
            Schema::create('documents_sections', function (Blueprint $table) {
                $table->id();
                $table->foreignId('brand_id')->nullable()->constrained()->onDelete('set null');
                $table->unsignedBigInteger('product_id');
                $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
                $table->foreignId('category_id')->constrained()->onDelete('cascade');
                $table->string('type');
                // $table->string('title')->nullable(); // Document title
                $table->text('description')->nullable(); // Optional description
                $table->string('file_path');
                $table->string('document_name'); // New field
                $table->string('document_type'); // New field
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('documents_sections')) {
            Schema::dropIfExists('documents_sections');
        }
    }
}
