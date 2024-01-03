@extends('employe.empnav')

@section('content')
    <div class="container" style="margin-left:30%;" >
        <h3>Edit Task</h3>

        <form method="POST" action="{{ route('update') }}">
            @csrf
            <div  style="max-width:40%;">
            <input type="text" name="id" value="{{$task->id}}" hidden>
            <div class="form-group input-group-sm">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ ( $task->Task_name) }}" placeholder="{{ ( $task->title) }}">
            </div>

            <div class="form-group input-group-sm">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" value="{{ ( $task->Description) }}"rows="3" >{{ ( $task->Description) }}</textarea>
            </div>
            
            <div class="form-group input-group-sm">
                <label for="title">Status:</label>
                <input type="text" class="form-control" id="title" name="status" value="{{ ( $task->Task_status) }}" >
            </div>

            <div class="form-group input-group-sm">
                <label for="employee">User:</label>
                <select class="form-control" id="user_id" name="user_id" >
                   
                @foreach($users as $user)
                    @if($user->id==$task->user_id){
                        <option style="background-color:green;" value="{{ $user->id }}" selected >{{ $user->name }}</option> 
                    }
                    @else{
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    }
                     @endif  
                @endforeach

                </select>
            </div>
            </div>
            <div  style="max-width:40%;">
            
            <br>
            
            

            <button type="submit" class="btn btn-primary">Update Task</button>
            <a href="{{ route('index') }}" class="btn btn-secondary">Cancel</a>
        </form>
       
    </div>
@endsection
