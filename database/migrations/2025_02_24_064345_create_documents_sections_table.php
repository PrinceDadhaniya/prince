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
                $table->string('document_name'); // New field
                $table->string('document_type'); // New field
                $table->string('document_category');
                $table->string('document_brand');
                $table->text('description')->nullable(); // Optional description
                $table->string('file_path');
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
