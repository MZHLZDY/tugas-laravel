@extends('master')
@section('title', 'Master project')
@section('content title')
@section('content')
<div class="col-md-8">
    <a href="" class="btn btn-success">Add Data</a>
    <table class="table">
        <tr>
            <th>No</th>
            <th>Court Type</th>
            <th>Court Name</th>
            <th>Action</th>
        </tr>
        @forelse($court as $data )
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $data->type->name }}</td>
            <td>{{ $data->name }}</td>
            <td>
                <a href="" class="btn btn-warning">Edit</a>
                <a href="" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        @empty
        <div class="alert alert-danger">Data Kosong</div>
        @endforelse
    </table>
    </div>
    <div class="col-md-4">
        
    </div>
</div>
@endsection