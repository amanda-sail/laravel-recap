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
            <caption>New Service</caption>
            <form action="{{ route("services.store") }}" method="POST" enctype="multipart/form-data">
				@csrf
                {{-- Icon --}}
				<div class="mb-3 col-12 col-md-6">
					<label for="service" class="form-label">Icon</label>
                    <input type="file" class="form-control" id="service" name="service" value="{{ old('service') }}">
				</div>
                {{-- Service --}}
				<div class="mb-3 col-12 col-md-6">
					<label for="client" class="form-label">Service</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
				</div>
                {{-- Description --}}
				<div class="mb-3 col-12 col-md-6">
					<label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}">
				</div>
                {{-- Button Text --}}
                <div class="mb-3 col-12 col-md-6">
					<label for="btn_text" class="form-label">Button Text</label>
                    <input type="text" class="form-control" id="btn_text" name="btn_text" value="{{ old('btn_text') }}">
				</div>
                {{-- Button Icon --}}
				<div class="mb-3 col-12 col-md-6">
					<label for="btn_icon" class="form-label">Button Icon</label>
                    <input type="text" class="form-control" id="btn_icon" name="btn_icon" value="{{ old('btn_icon') }}">
				</div>
                
                {{-- Submit --}}
                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
    </div>
@endsection