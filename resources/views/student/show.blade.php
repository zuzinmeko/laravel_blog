@extends('master')
@section('content')

	

<div class="container my-5">
	<div class="row">
		<div class="offset-2">
			<h3>Show Details for Student.....</h3><hr></div>	

			<div class="card col-md-6">
				<div class="card-body">

					<dl><dt>Rollno :{{$student->rollno}}</dt></dl>
					<dl><dt>Name :{{$student->name}}</dt></dl>
					<dl><dt>Email :{{$student->email}}</dt></dl>	
					<dl><dt>Phone :{{$student->phoneno}}</dt></dl>
					<dl><dt>Address:{{$student->address}}</dt></dl>

			
			</div>
		</div>
	</div>
</div>


			
@endsection