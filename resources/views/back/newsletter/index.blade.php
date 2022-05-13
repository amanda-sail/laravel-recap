@extends('back.layouts.app')

@section('content')
    <div class="container pt-4 pb-4">
        {{-- Success Message --}}
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        {{-- Table --}}
        <table class="table table-striped table-hover caption-top">
            <caption>Newsletter Subscribers</caption>
            <thead>
                <tr class="align-middle">
                    <th>ID</th>
                    <th scope="col">Email Address</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subscribes as $subscribe)
                    <tr class="align-middle">
                        <th scope="row">{{ $subscribe->id }}</th>
                        <td>{{ $subscribe->email_address }}</td>

                        {{-- Edit Button --}}
                        <td>
                            <form action="{{ route('newsletter.edit', $subscribe) }}" method="GET">
                                @csrf
                                <input hidden type="text" name="_verif" value="{{ encrypt($subscribe->id) }}">
                                <button type="submit" class="btn btn-primary mb-2">Edit</button>
                            </form>
                        </td>

                        {{-- Delete Button --}}
                        <td>
                            <form action="{{ route('newsletter.destroy', $subscribe) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input hidden type="text" name="_verif" value="{{ encrypt($subscribe->id) }}">
                                <button type="submit" class="btn btn-danger mb-2">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Create Button --}}
        <div class="w-100 text-center">
            <a type="button" class="btn btn-success mb-2" href="{{ route ('newsletter.create', $subscribe) }}">Create New Subscriber</a>
        </div>
    </div>
@endsection
