@extends('employe.empnav')
@section('content')
<style type="text/css">
    body {
    color: #404E67;
    background: #F5F7FA;
    font-family: 'Open Sans', sans-serif;
    }
    .table-wrapper {
    width: auto;
    margin: auto;
    background: #fff;
    padding: 20px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    </style>
    <div  class="container" style="max-width:95%;">
    <div class="table-wrapper">

            <h5>CREATE MODULES</h5>
                <form method="POST" action="{{ route('modulecreate') }}" class="row g-3">
                    @csrf
                    <div class="col-md-6">
                        <label for="title">Module Title:</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="col-md-6">
                     <label for="project_id">Select Project:</label>
                        <select class="form-control" name="project_id" required>
                            @foreach($projects as $project)
                                <option value="{{ $project->name }}">{{ $project->name }}</option>
                            @endforeach
                        </select>
                        </div>
                    <div class="col-12">
                        <label for="description">Description:</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                    </div>

                    <div class="col-md-3">
                        <label for="employee">User:</label>
                        <select class="form-control" id="user_id" name="user_id" required>
                            @foreach($users as $user)
                                <option value="{{ $user->name }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="status">Status:</label>
                    <select class="form-control"  name="status" required>
                        <option class="dropdown-item" type="button" value="started">Started</option>
                        <option class="dropdown-item" type="button" value="Working">Working</option>
                        <option class="dropdown-item" type="button" value="Completed">Completed</option>
                    </select>
                    </div>

                    <div class="col-md-3">
                        <label for="assigned">Assigned date:</label>
                        <input type="date" class="form-control" id="title" name="assigned" required>
                    </div>
                    <div class="col-md-3">
                        <label for="submission">Submission date:</label>
                        <input type="date" class="form-control" id="title" name="submission" required>
                    </div>
                    <br>
                    <div class="col-md-9">
                    <button type="submit" style="width:240px;" class="btn btn-primary">Create Module</button>
                    </div>
                    <div class="col-md-3">
                    <a href="{{ route('moduleindex') }}"  style="width:240px; align:right;"class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        @endsection
