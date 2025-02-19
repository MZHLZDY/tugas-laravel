@extends('home')
@section('title')
@section('content-title')
@section('content')

<div class="col-md-6">
    <a class="btn btn-success" href="">Add Data</a>
<table class="table table-striped">
    <th>
        <td>No</td>
        <td>Court Name</td>
        <td>Action</td>
    </th>
    @forelse ($type as $tipe)
    <tr>
        <td></td>
        <td>{{$loop->iteration}}</td>
        <td>{{$tipe->name}}</td>
        <td>
            <a class="btn btn-sm btn-warning" href="">Edit</a>
            <a class= "btn btn-sm btn-danger" href="">Delete</a>
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