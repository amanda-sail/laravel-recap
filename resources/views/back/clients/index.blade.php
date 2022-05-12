@extends('back.layouts.app')

@section('content')
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <table class="table table-striped table-hover caption-top">
        <caption>Client Testimonials</caption>
        <thead>
            <tr class="align-middle">
                <th>ID</th>
                <th scope="col">Photo</th>
                <th scope="col">Name</th>
                <th scope="col">Occupation</th>
                <th scope="col">Date</th>
                <th scope="col">Category</th>
                <th scope="col">Rating</th>
                <th scope="col">Comment</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr class="align-middle">
                    <th scope="row">{{ $client->id }}</th>
                    <td><img src="{{ asset($client->profile_pic) }}" alt="" style="width: 50px"></td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->position }}</td>
                    <td>{{ $client->date }}</td>
                    <td>{{ $client->category }}</td>
                    <td>{{ $client->rating }}</td>
                    <td>{{ $client->comment }}</td>
                    <td>
                        <form action="{{ route('clients.edit', $client) }}" method="GET">
                            @csrf
                            <input hidden type="text" name="_verif" value="{{ encrypt($client->id) }}">

                            <button type="submit" class="btn btn-primary mb-2">Edit</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('clients.destroy', $client) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input hidden type="text" name="_verif" value="{{ encrypt($client->id) }}">

                            <button type="submit" class="btn btn-danger mb-2">Delete</button>
                        </form>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="w-100 text-center">
        <a type="button" class="btn btn-success mb-2" href="{{ route ('clients.create', $client) }}">Create Client Testimonial</a>
    </div>
@endsection
