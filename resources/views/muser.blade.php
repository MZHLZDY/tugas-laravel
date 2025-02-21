@extends('home')
@section('title')
@section('content-title')
@section('content')

<div class="col-md-10">
    <a class="btn btn-success" href=""><i class="bi bi-plus-square"></i></a>
<table class="table table-striped">
    <th>
        <td>No</td>
        <td>Username</td>        
        <td>Email</td>        
        <td>Action</td>
    </th>
    @forelse ($user as $pemakai)
    <tr>
        <td></td>
        <td>{{$loop->iteration}}</td>
        <td>{{$pemakai->username}}</td>
        <td>{{$pemakai->email}}</td>
        <td>
            <a class="btn btn-sm btn-warning" href=""><i class="bi bi-pencil-square"></i></a>
            <a class= "btn btn-sm btn-danger" href=""><i class="bi bi-trash-fill"></i></a>
        </td>
    </tr>
    @empty
        <div class="alert alert-danger">
            belum ada data
        </div>
    @endforelse
    
</table>
</div>
</div class="col-md-4">

@endsection