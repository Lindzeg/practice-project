<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Employer;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{

    Schema::create('job_posts', function (Blueprint $table) {
        $table->id();
        $table->foreignIdFor(Employer::class)->constrained()->onDelete('cascade');
        $table->string('title')->nullable();
        $table->string('author')->nullable();
        $table->string('description')->nullable();
        $table->decimal('salary', 8, 2)->nullable();
        $table->string('img_path')->nullable();
        $table->timestamps();
    });

}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
