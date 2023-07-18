@extends('layouts.app')

@section('content')
<div class="container">
        
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong>
            LOGIN SUKSES
        </strong>
    </div>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Tambah
    </button>
<table class="table">
    <thead>
        <tr>
            <th>
                Nama
            </th>
    
            <th>
                Password
            </th>
            <th>
                Ctime
            </th>
            <th>
                Fungsi
            </th>
        </tr>
    </thead>

    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->username }}</td>
            <td>Xxxx</td>
            <td>{{ $user->created_at->format('d/m/Y') }}</td>
            <td>
        
                    <button class="btn btn-success" data-bs-target="#edit{{ $user->id }}" data-bs-toggle="modal">
    Edit
                    </button>
                <form action="{{ route('user.delete',$user->id) }}" method="POST">
                @method('delete')
                @csrf
                <button class="btn btn-danger">
                    Delete
                </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@include('forms')
</div>
@endsection
