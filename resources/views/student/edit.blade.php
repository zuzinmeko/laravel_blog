@extends('master')
@section('content')

	
<h3>create student</h3><hr>
<div class="container my-5">
	<div class="row">
		<div class="offset-2 col-md-10">
			<form method="post" action="{{route('student.update',$student->id)}}">
				@csrf
				@method('PUT')
				<div class="form-group row">
					<div class="col-md-6">
						<label>Roll No:</label>
						<input type="text" name="rollno" class="form-control @error('rollno') is-invalid @enderror" value="@error('rollno'){{old('rollno')}}@else {{$student->rollno}} @enderror" required>
						@error('rollno')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
						@enderror
					</div>
					<div class="col-md-6">
						<label>Name:</label>
						<input type="text" name="name" class="form-control" value="@error('name'){{old('name')}}@else {{$student->name}} @enderror" required>
					</div>
					
				</div>
				<div class="form-group row">
					<div class="col-md-6">
						<label>Email:</label>
						<input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="@error('email'){{old('email')}}@else {{$student->email}} @enderror" required>
						@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
						@enderror
					</div>
					<div class="col-md-6">
						<label>Phone:</label>
						<input type="text" name="phoneno" class="form-control" value="@error('phoneno'){{old('phoneno')}}@else {{$student->phoneno}} @enderror" required>
					</div>
					
				</div>
				<div class="form-group row">
					<div class="col-md-12">
						<label>Address:</label>
						 <textarea class="form-control @error('address')is-invalid @enderror" value="" name="address" required>{{$student->address}}</textarea>
					</div>
				</div>
				<div  class="form-group">
					<input type="submit" name="btnsubmit" value="Update" class="btn btn-info btn-block">
					@error('address')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
						@enderror

				</div>
				
			</form>
			
			
			
			
		</div>
	</div>
</div>


			
@endsection