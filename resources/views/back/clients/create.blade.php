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
        
        <div class="row">
            <caption>New Client Testimonial</caption>
            <form action="{{ route("clients.store") }}" method="POST" enctype="multipart/form-data">
				@csrf
                {{-- Profil Pic --}}
				<div class="mb-3 col-12 col-md-6">
					<label for="profile_pic" class="form-label">Photo</label>
                    <input type="file" class="form-control" id="profile_pic" name="profile_pic" value="{{ old('profile_pic') }}">
				</div>
                {{-- Commenter --}}
				<div class="mb-3 col-12 col-md-6">
					<label for="client" class="form-label">Commenter</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
				</div>
                {{-- Occupation --}}
				<div class="mb-3 col-12 col-md-6">
					<label for="position" class="form-label">Occupation</label>
                    <input type="text" class="form-control" id="position" name="position" value="{{ old('position') }}">
				</div>
                {{-- Date --}}
                <div class="mb-3 col-12 col-md-6">
					<label for="date" class="form-label">Date of Comment</label>
                    <input type="text" class="form-control" id="date" name="date" value="{{ old('date') }}">
				</div>
                {{-- Category --}}
                <div class="mb-3 col-12 col-md-6">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-select form-select-md" aria-label=".form-select-md" id="category" name="category">
                        <option>Select One</option>
                        <option value="Financial Apps" @if(old('category') == 'Financial Apps') selected @endif >Financial Apps</option>
                        <option value="Digital Business" @if(old('category') == 'Digital Business') selected @endif >Digital Business</option>
                        <option value="Business & Economics" @if(old('category') == 'Business & Economics') selected @endif >Business & Economics</option>
                        <option value="New App Ecosystem" @if(old('category') == 'New App Ecosystem') selected @endif >New App Ecosystem</option>
                        <option value="Web Development" @if(old('category') == 'Web Development') selected @endif >Web Development</option>
                    </select>
                </div>
                {{-- Rating --}}
				<div class="mb-3 col-12 col-md-6">
					<label for="rating" class="form-label">Rating</label>
                    <input type="text" class="form-control" id="rating" name="rating" value="{{ old('rating') }}">
				</div>
                {{-- Comment --}}
				<div class="mb-3 col-12 col-md-6">
					<label for="comment" class="form-label">Comment</label>
                    <input type="text" class="form-control" id="comment" name="comment" value="{{ old('comment') }}">
				</div>
                {{-- Submit --}}
                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
    </div>
@endsection