@extends('home')
@section('title')
@section('content-title')
@section('content')

<div class="col-md-10">
    <a class="btn btn-success" href=""><i class="bi bi-plus-square"></i></a>
<table class="table table-striped">
    <thead>
        <tr>
            <th class="th">No.</th>
            <th class="th">User ID</th>
            <th class="th">Name</th>
            <th class="th">Address</th>
            <th class="th">Phone</th>
            <th class="th">Date</th>
            <th class="th">Court ID</th>
            <th class="th">Starttime</th>
            <th class="th">Endtime</th>
            <th class="th">Paytotal</th>
            <th class="th">Action</th>
        </tr>
    </thead>
    @forelse($transaction as $transaksi)
    <tbody>
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $transaksi->user->id }}</td> <!--Menampilkan Foreign key User-ID-->
            <td>{{ $transaksi->name }}</td>
            <td>{{ $transaksi->address }}</td>
            <td>{{ $transaksi->phone }}</td>
            <td>{{ $transaksi->date}}</td>
            <td>{{ $transaksi->court->id}}</td> <!--Menampilkan Foreign key Court-ID-->
            <td>{{ $transaksi->starttime }}</td>
            <td>{{ $transaksi->endtime }}</td>
            <td>Rp. {{ $transaksi->paytotal }}</td>
            <td>
                <a class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                <a class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
            </td>
        </tr>
    </tbody>
    @empty
    @endforelse
    
</table>
</div>
</div class="col-md-4">

@endsection