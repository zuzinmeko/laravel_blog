@extends('master')
@section('content')

	
<h3>create student</h3><hr>
<div class="container my-5">
	<div class="row">
		<div class="offset-2 col-md-10">
			<form method="post" action="{{route('student.store')}}">
				@csrf
				<div class="form-group row">
					<div class="col-md-6">
						<label>Roll No:</label>
						<input type="text" name="rollno" class="form-control @error('rollno') is-invalid @enderror" value="{{old('rollno')}}" required>
						@error('rollno')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
						@enderror
					</div>
					<div class="col-md-6">
						<label>Name:</label>
						<input type="text" name="name" class="form-control">
					</div>
					
				</div>
				<div class="form-group row">
					<div class="col-md-6">
						<label>Email:</label>
						<input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" required>
						@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
						@enderror
					</div>
					<div class="col-md-6">
						<label>Phone:</label>
						<input type="text" name="phoneno" class="form-control">
					</div>
					
				</div>
				<div class="form-group row">
					<div class="col-md-12">
						<label>Address:</label>
						 <textarea class="form-control" name="address"></textarea>
					</div>
				</div>
				<div  class="form-group">
					<input type="submit" name="btnsubmit" value="save" class="btn btn-info btn-block">
				</div>
				
			</form>
			
			
			
			
		</div>
	</div>
</div>


			
@endsection