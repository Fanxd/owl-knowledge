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
        Schema::create('knowledge_scenes', function (Blueprint $table) {
            $table->id();

            // 所属公司/租户
            $table->foreignId('company_id')
                ->nullable()
                ->comment('所属公司/租户 ID');

            // 创建者（作者）ID
            $table->foreignId('author_id')
                ->nullable()
                ->comment('创建者/作者 用户 ID');

            // 唯一编码，例如 first_chat、objection 等
            $table->string('code', 64)
                ->unique()
                ->comment('唯一编码');

            // 场景名称
            $table->string('name', 128)->comment('场景显示名称');

            // 备注/说明
            $table->string('description', 255)
                ->nullable()
                ->comment('场景描述/备注');

            // 启用状态
            $table->tinyInteger('status')
                ->default(1)
                ->comment('启用状态 (1=启用,0=停用)');

            // 排序优先级
            $table->integer('priority')
                ->default(100)
                ->comment('排序优先级');

            // 扩展字段 JSON
            $table->json('extra')
                ->nullable()
                ->comment('扩展 JSON 配置');

            // 时间戳：创建/更新时间
            $table->timestamps();

            // 软删除字段
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('knowledge_scenes');
    }
};
