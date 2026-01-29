<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKnowledgeTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('knowledge', function (Blueprint $table) {
            $table->id();

            $table->string('title', 100)->comment('知识标题');
            $table->string('category_code', 50)->comment('分类 code');
            $table->string('scene', 50)->nullable()->comment('使用场景，如 sales / support');
            $table->text('content')->comment('知识内容');

            $table->json('metadata')->nullable()->comment('扩展元数据（标签 / 来源 / 备注）');

            $table->integer('priority')->default(100)->comment('优先级，越小越优先');
            $table->tinyInteger('status')->default(1)->comment('状态 1启用 0停用');

            $table->timestamps();
            $table->softDeletes();

            $table->index(['category_code', 'scene', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('knowledge');
    }
}
