@extends('back.layouts.app')

@section('content')
    <div class="container pt-4">

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
            <caption>Edit User</caption>
            <form action="{{ route("users.update", $user) }}" method="POST" enctype="multipart/form-data">
				@csrf
                @method('put')
				<div class="mb-3 col-12 col-md-6">
					<label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="@if(old('name') ) {{ old('name') }} @else {{ $user->name }} @endif" >
				</div>
				<div class="mb-3 col-12 col-md-6">
					<label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="@if(old('email') ) {{ old('email') }} @else {{ $user->email }} @endif" >
				</div>
				<div class="mb-3 col-12 col-md-6">
					<label for="role" class="form-label">Role</label>
                    <input type="text" class="form-control" id="role" name="role" value="@if(old('role') ) {{ old('role') }} @else {{ $user->role }} @endif" >
				</div>

                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
    </div>
@endsection