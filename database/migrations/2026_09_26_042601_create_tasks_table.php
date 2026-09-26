<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
        {
                Schema::create('tasks', function (Blueprint $path) {
                            $path->id();
                                        $path->string('task_name');
                                                    $path->text('description')->nullable();
                                                                $path->string('status')->default('Pending');
                                                                            $path->date('due_date')->nullable();
                                                                                        $path->timestamps();
                                                                                                });
                                                                                                    }

                                                                                                        public function down(): void
                                                                                                            {
                                                                                                                    Schema::dropIfExists('tasks');
                                                                                                                        }
                                                                                                                        };
                                                                                                                        