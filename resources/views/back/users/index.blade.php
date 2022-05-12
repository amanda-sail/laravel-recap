@extends('back.layouts.app')

@section('content')
    <div class="container pt-4 pb-4">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <table class="table table-striped table-hover caption-top">
            <caption>Users</caption>
            <thead>
                <tr class="align-middle">
                    <th>ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="align-middle">
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role->role }}</td>
                        <td>
                            <a type="button" class="btn btn-success" href="{{ route('users.edit', $user) }}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
