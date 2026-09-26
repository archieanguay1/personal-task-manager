<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
        {
                $tasks = Task::all();
                        return view('tasks.index', compact('tasks'));
                            }

                                public function store(Request $request)
                                    {
                                            $request->validate([
                                                        'task_name' => 'required|string|max:255',
                                                                    'due_date' => 'nullable|date',
                                                                                'description' => 'nullable|string',
                                                                                        ]);

                                                                                                Task::create([
                                                                                                            'task_name' => $request->task_name,
                                                                                                                        'due_date' => $request->due_date,
                                                                                                                                    'description' => $request->description,
                                                                                                                                                'status' => 'Pending',
                                                                                                                                                        ]);

                                                                                                                                                                return redirect('https://super-tribble-xrpxx4jqjg79f5gg-8001.app.github.dev/tasks');
                                                                                                                                                                    }

                                                                                                                                                                        public function edit(Task $task)
                                                                                                                                                                            {
                                                                                                                                                                                    return view('tasks.edit', compact('task'));
                                                                                                                                                                                        }

                                                                                                                                                                                            public function update(Request $request, Task $task)
                                                                                                                                                                                                {
                                                                                                                                                                                                        $request->validate([
                                                                                                                                                                                                                    'task_name' => 'required|string|max:255',
                                                                                                                                                                                                                                'due_date' => 'nullable|date',
                                                                                                                                                                                                                                            'description' => 'nullable|string',
                                                                                                                                                                                                                                                    ]);

                                                                                                                                                                                                                                                            $task->update([
                                                                                                                                                                                                                                                                        'task_name' => $request->task_name,
                                                                                                                                                                                                                                                                                    'due_date' => $request->due_date,
                                                                                                                                                                                                                                                                                                'description' => $request->description,
                                                                                                                                                                                                                                                                                                            'status' => $request->status ?? $task->status,
                                                                                                                                                                                                                                                                                                                    ]);

                                                                                                                                                                                                                                                                                                                            return redirect('https://super-tribble-xrpxx4jqjg79f5gg-8001.app.github.dev/tasks');
                                                                                                                                                                                                                                                                                                                                }

                                                                                                                                                                                                                                                                                                                                    public function destroy(Task $task)
                                                                                                                                                                                                                                                                                                                                        {
                                                                                                                                                                                                                                                                                                                                                $task->delete();
                                                                                                                                                                                                                                                                                                                                                        return redirect('https://super-tribble-xrpxx4jqjg79f5gg-8001.app.github.dev/tasks');
                                                                                                                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                                                                                                                            }