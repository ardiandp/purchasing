@extends('layouts.headga')

@section('content')
<div class="container">
    <h1>Approval Permintaan Barang</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Divisi</th>
                <th>Barang</th>
                <th>Jumlah</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($requests as $request)
            <tr>
                <td>{{ $request->id }}</td>
                <td>{{ $request->divisi->nama_divisi }}</td>
                <td>{{ $request->barang->nama_barang }}</td>
                <td>{{ $request->jumlah }}</td>
                <td>{{ ucfirst($request->status) }}</td>
                <td>
                    <form action="{{ route('head-ga.approval.approve', $request->id) }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-success btn-sm">Approve</button>
                    </form>
                    <form action="{{ route('head-ga.approval.reject', $request->id) }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Reject</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
