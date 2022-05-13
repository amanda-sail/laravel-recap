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
            <caption>Services</caption>
            <thead>
                <tr class="align-middle">
                    <th>ID</th>
                    <th scope="col">Icon</th>
                    <th scope="col">Service</th>
                    <th scope="col">Description</th>
                    <th scope="col">Button Text</th>
                    <th scope="col">Button Icon</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr class="align-middle">
                        <th scope="row">{{ $service->id }}</th>
                        {{-- PHP with Batou --}}
                        <td>
                            <div class="{{ $service->class }}">
                                <div class="icon"></div>
                            </div>
                        </td>
                        {{-- HTML with Imane --}}
                        {{-- <td><img src="{{ asset($service->icon) }}" alt=""></td> --}}
                        <td>{{ $service->title }}</td>
                        <td>{{ $service->description }}</td>
                        <td>{{ $service->btn_text }}</td>
                        <td><i class="{{ $service->btn_icon }}"></i></td>

                        {{-- Edit Button --}}
                        <td>
                            <form action="{{ route('services.edit', $service) }}" method="GET">
                                @csrf
                                <input hidden type="text" name="_verif" value="{{ encrypt($service->id) }}">
                                <button type="submit" class="btn btn-primary mb-2">Edit</button>
                            </form>
                        </td>

                        {{-- Delete Button --}}
                        <td>
                            <form action="{{ route('services.destroy', $service) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input hidden type="text" name="_verif" value="{{ encrypt($service->id) }}">
                                <button type="submit" class="btn btn-danger mb-2">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Create Button --}}
        <div class="w-100 text-center">
            <a type="button" class="btn btn-success mb-2" href="{{ route ('services.create', $service) }}">Create New Service</a>
        </div>
    </div>
@endsection
