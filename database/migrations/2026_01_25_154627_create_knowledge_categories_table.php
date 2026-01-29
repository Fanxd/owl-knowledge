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
        Schema::create('knowledge_categories', function (Blueprint $table) {
            $table->id();

            $table->string('name', 50)
                ->comment('分类名称');

            $table->string('code', 50)
                ->unique()
                ->comment('分类标识');

            $table->unsignedInteger('priority')
                ->default(100)
                ->comment('优先级，数值越小权重越高');

            $table->boolean('status')
                ->default(1)
                ->comment('状态：1 启用 0 停用');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('knowledge_categories');
    }
};
