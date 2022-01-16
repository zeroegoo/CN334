<x-app-layout>
    <x-slot name="header">
        <h2 style="font-family: 'Courier New', monospace;
        margin-top: 10px;
        margin-left: 10px;
        font-weight: 600;
        font-size:36px;
        ">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <div class="flex">
                    <div style="font-family: 'Courier New', monospace;
                        margin-top: 5px;
                        margin-left: 10px;
                        margin-bottom:10px;
                        font-weight: 1000;
                        font-size:28px;
                        ">Tasks List</div>
                    
                    <div class="flex-auto text-right mt-2">
                        <a href="/task" style="
                        background:#FFEEAD;
                        color:#D9534F;
                        border-radius:10px;
                        margin-top: 20px;
                        margin-left:10px;
                        margin-bottom:10px;

                        font-family: 'Courier New', monospace;
                        padding-left:10px;
                        padding-right:10px;
                        padding-top: 5px;
                        padding-bottom:5px;
                        
                        font-weight: 600;
                        font-size:20px;
                        text-shadow: 1px 1px 1px #FFFFFF;
                        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);">Add new Task</a>
                        
                    </div>
                </div>
                <table class="w-full text-md rounded mb-4">
                    <thead>
                    <tr class="border-b">
                        <th class="text-left p-3 px-5">Task</th>
                        <th class="text-left p-3 px-5">Actions</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(auth()->user()->tasks as $task)
                        <tr class="border-b hover:bg-orange-100">
                            <td class="p-3 px-5">
                                {{$task->description}}
                            </td>
                            <td class="p-3 px-5">
                                
                                <a href="/task/{{$task->id}}" name="edit" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</a>
                                <form action="/task/{{$task->id}}" class="inline-block">
                                    <button type="submit" name="delete" formmethod="POST" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                                    {{ csrf_field() }}
                                </form>
                            </td>
                        </tr>
                        

                    @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</x-app-layout>
