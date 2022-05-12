@extends('back.layouts.app')

@section('content')
    <div class="container mt-4">

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

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
            <form action="{{ route("user.store") }}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="mb-3 col-12 col-md-6">
					<label for="name" class="form-label">Name</label>
					<input type="text" class="form-control" id="name" name="name" value="old('name')">
				</div>
                <div class="mb-3 col-12 col-md-6">
					<label for="email" class="form-label">Email</label>
					<input type="text" class="form-control" id="email" name="email" value="old('email')">
				</div>
                {{-- <div class="mb-3 col-12 col-md-6">
					<label for="role_id" class="form-label">role</label>
					<input type="text" class="form-control" id="role_id" name="role_id">
				</div> --}}

                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
    </div>
@endsection