@extends('layouts.app')
@section('title', 'Create | User')
@section('content')
<div class="col-md-12">
    <div class="col-md-12 row">
        <div class=" form-group">
            <a href="{{url('user-create')}}"><button type="button" class="btn btn-primary" id="create">Create</button></a>
        </div>
    </div>
    <div class="card">
      <div class="card-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Full Name</th>
              <th scope="col">Email</th>
              <th scope="col">Role</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $key=>$user)
                <tr>
                  <th scope="row">{{++$key}}</th>
                  <td>{{$user->first_name}} {{$user->last_name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->getRole->name}}</td>
                </tr>
            @endforeach
            </tr>
          </tbody>
        </table>
      </div>
    </div>
@endsection