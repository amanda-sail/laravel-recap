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
            <form action="{{ route("users.update", $user) }}" method="POST" enctype="multipart/form-data">
				@csrf
                @method('put')
				<div class="mb-3 col-12 col-md-6">
					<label for="user" class="form-label">{{ $user->name }}</label>
				</div>
				<div class="mb-3 col-12 col-md-6">
					<label for="user" class="form-label">{{ $user->email }}</label>
				</div>
                {{-- <select name="role_id" id="">
                    @foreach (\App\Models\Role::all() as $role)
                        <option value="{{ $role->id }}">{{ $role->role }}</option>
                    @endforeach
                </select> --}}

                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
    </div>
@endsection