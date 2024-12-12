@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Makanan</h1>
        <a href="{{ route('foods.create') }}" class="btn btn-primary">Tambah Makanan</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($foods as $food)
                    <tr>
                        <td>{{ $food->name }}</td>
                        <td>{{ $food->description }}</td>
                        <td>{{ $food->price }}</td>
                        <td>
                            <a href="{{ route('foods.edit', $food->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('foods.destroy', $food->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
