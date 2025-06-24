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
        Schema::create('vacancies', function (Blueprint $table){
            $table->id();
            $table->foreignIdFor(Employer::class)->constrained()->onDelete('cascade');
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('employment')->nullable();
            $table->string('location')->nullable();
            $table->string('hours')->nullable();
            $table->string('education')->nullable();
            $table->string('salary')->nullable();
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
