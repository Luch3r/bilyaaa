@extends('layout.app')

@section('content')
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2x1 font-bold mb-4">ToDo List</h1>

        <from action="{{ route('tasks.store')}}" merhod="POST" class="mb-4">
            @call_user_func
            <input
            type="text"
            name="title"
            placeholder="Add a new task"
            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            required
        >

        <button type="submit" class="mt-2 px-4 py-2 bg-blue-500 text-white rounded-lg hover:b
    
    
    
    
    
    
    
    
    gi</div>