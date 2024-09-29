@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Daftar Divisi</h1>
    <a href="{{ route('admin.divisi.create') }}" class="btn btn-primary mb-3">Tambah Divisi</a>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Divisi</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($divisi as $d)
            <tr>
                <td>{{ $d->id }}</td>
                <td>{{ $d->nama_divisi }}</td>
                <td>
                    <a href="{{ route('admin.divisi.show', $d->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('admin.divisi.edit', $d->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.divisi.destroy', $d->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Apakah Anda yakin?')" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
