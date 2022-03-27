<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_paths', function (Blueprint $table) {
            $table->id();
            $table->string('fileSize',30)->nullable();
            $table->string('fileTitle',30)->nullable();
            $table->char('fileType',6)->nullable();
            $table->enum('videoType',['0','1'])->default('0');
            $table->string('videoEmbedHref')->nullable();
            $table->tinyInteger('encryptionType')->default(0);
            $table->string('encryptionText');
            $table->enum('active',['0','1'])->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('file_paths');
    }
};
