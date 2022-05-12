@extends('back.layouts.app')

@section('content')
    <div class="container pt-4">
        {{-- Update Successful --}}
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        {{-- Access Forbidden --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        {{-- Table --}}
        <div class="row">
            <caption>Edit Banner</caption>
            <form action="{{ route("banner.update", $banner) }}" method="POST" enctype="multipart/form-data">
				@csrf
                @method('put')
                {{-- Header --}}
				<div class="mb-3 col-12 col-md-6">
					<label for="header" class="form-label">Header</label>
                    <input type="text" class="form-control" id="header" name="header" value="@if(old('header') ) {{ old('header') }} @else {{ $banner->header }} @endif">
				</div>

                {{-- Description --}}
				<div class="mb-3 col-12 col-md-6">
					<label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="@if(old('description') ) {{ old('description') }} @else {{ $banner->description }} @endif">
				</div>

                {{-- Image --}}
                <div class="mb-3 col-12 col-md-6">
					<label for="img" class="form-label">Image</label>
                    <input type="text" class="form-control" id="img" name="img" value="@if(old('img') ) {{ old('img') }} @else {{ $banner->img }} @endif" >
				</div>

                {{-- Submit --}}
                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
    </div>
@endsection