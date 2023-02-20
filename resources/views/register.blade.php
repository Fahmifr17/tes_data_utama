@extends('app')
@section('content')
<div class="row">
	<div class="cpl-md-6">
		<form method="POST" action="{{ route('register_action') }}" >
                            @csrf
                            <div class="mb-3">
                            	<label>Name<span class="text-danger"></span></label>
                                <input type="text" placeholder="Name"  class="form-control" name="name" value="{{old('name')}}">
                            
                            </div>
                              <div class="mb-3">
                            	<label>Username<span class="text-danger"></span></label>
                                <input type="text" placeholder="Username"  class="form-control" name="name" value="{{old('username')}}">
                            
                            </div>
                            <div class="mb-3">
                            	<label>Password<span class="text-danger"></span></label>
                                <input type="text" placeholder="Password" class="form-control" name="password">
                            
                            </div>
                              <div class="mb-3">
                            	<label>Password Confirm<span class="text-danger"></span></label>
                                <input type="text" placeholder="Name" class="form-control" name="password_confirmation" >
                            
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary">Registrasi</button>
                                <a class="btn btn-danger" href="{{route('home')}}">Kembali</a>
                            </div>
                        </form>
		
	</div>
	
</div>

@endsection