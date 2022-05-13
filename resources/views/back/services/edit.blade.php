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
            <caption>Edit Service</caption>
            <form action="{{ route("services.update", $service) }}" method="POST" enctype="multipart/form-data">
				@csrf
                @method('put')
                {{-- Icon --}}
                <label for="icon" class="form-label">Icon</label>
                <div class="d-flex">
                    {{-- PHP with Batou --}}
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="class" value="first-service" @if (old('class') == "first-service" ) checked 
                        @else {{ $service->class == "first-service" ? 'checked' : '' }}
                        @endif>
                        
                        <label class="form-check-label me-5" for="icon">
                            <div class="first-service">
                                <div class="icon"></div>
                            </div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="class" value="second-service" 
                        @if (old('class') == 'second-service') checked 
                        @else {{ $service->class == 'second-service' ? 'checked' : '' }}
                        @endif>
                        <label class="form-check-label me-5" for="icon">
                            <div class="second-service">
                                <div class="icon"></div>
                            </div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="class" value="third-service" 
                        @if (old('class') == 'third-service') checked 
                        @else {{ $service->class == 'third-service' ? 'checked' : '' }}
                        @endif>
                        <label class="form-check-label me-5" for="icon">
                            <div class="third-service">
                                <div class="icon"></div>
                            </div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="class" value="fourth-service" 
                        @if (old('class') == 'fourth-service') checked 
                        @else {{ $service->class == 'fourth-service' ? 'checked' : '' }}
                        @endif>
                        <label class="form-check-label me-5" for="icon">
                            <div class="fourth-service">
                                <div class="icon"></div>
                            </div>
                        </label>
                    </div>
                    
                    {{-- HTML with Imane --}}
                    {{-- <div class="form-check">
                        <input class="form-check-input" type="radio" name="icon" value="images/service-icon-04.png" 
                        @if (old('icon') == 'images/service-icon-04.png') checked @else
                        {{ $service->icon == 'images/service-icon-04.png' ? 'checked' : '' }}
                        @endif>
                        <label class="form-check-label me-5" for="icon">
                            <img src="{{ asset('images/service-icon-04.png') }}" alt="">
                        </label>
                    </div> --}}
                </div>

                {{-- Service --}}
				<div class="mb-3 col-12 col-md-6">
					<label for="title" class="form-label">Service</label>
                    <input type="text" class="form-control" id="title" name="title" value="@if(old('title') ) {{ old('title') }} @else {{ $service->title }} @endif">
				</div>

                {{-- Description --}}
				<div class="mb-3 col-12 col-md-6">
					<label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="@if(old('description') ) {{ old('description') }} @else {{ $service->description }} @endif">
				</div>

                {{-- Button Text --}}
                <div class="mb-3 col-12 col-md-6">
					<label for="btn_text" class="form-label">Button Text</label>
                    <input type="text" class="form-control" id="btn_text" name="btn_text" value="@if(old('btn_text') ) {{ old('btn_text') }} @else {{ $service->btn_text }} @endif" >
				</div>
                
                {{-- Button Icon --}}
				<div class="mb-3 col-12 col-md-6">
					<label for="btn_icon" class="form-label">Button Icon</label>
                    <input type="text" class="form-control" id="btn_icon" name="btn_icon" value="@if(old('btn_icon') ) {{ old('btn_icon') }} @else {{ $service->btn_icon }} @endif" >
				</div>

                {{-- Submit --}}
                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
    </div>
@endsection