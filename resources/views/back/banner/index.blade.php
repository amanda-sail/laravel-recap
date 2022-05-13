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
            <caption>Banner</caption>
            <thead>
                <tr class="align-middle">
                    <th>ID</th>
                    <th scope="col">Header</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr class="align-middle">
                    <th scope="row">{{ $banner->id }}</th>
                    <td>{{ $banner->header }}</td>
                    <td>{{ $banner->description }}</td>
                    <td><img src="{{ asset($banner->img) }}" alt="" style="width: 75px"></td>

                    {{-- Edit Button --}}
                    <td>
                        @can('update', $banner)
                            <form action="{{ route('banner.edit', $banner) }}" method="GET">
                                @csrf
                                <input hidden type="text" name="_verif" value="{{ encrypt($banner->id) }}">

                                <button type="submit" class="btn btn-primary mb-2">Edit</button>
                            </form>
                        @endcan
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
