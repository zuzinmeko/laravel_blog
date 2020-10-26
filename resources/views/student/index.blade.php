@extends('master')
@section('content')

	

<div class="container my-5">
	<div class="row">
		<div class="offset-2 col-md-8">
			<h3>All student List</h3>

			<table class="table table-bordered">
				<thead>
					<tr>
						<th scope="col">Id</th>
						<th scope="col">RollNo</th>
						<th scope="col">Name</th>
						<th scope="col">Email</th>
						<th scope="col">Phone</th>
						<th scope="col">Address</th>
					</tr>
				</thead>
				<tbody>
						@foreach($students as $row)
					<tr>

						<td>{{$row->id}}</td>
						<td>{{$row->rollno}}</td>
						<td>{{$row->name}}</td>
						<td>{{$row->email}}</td>
						<td>{{$row->phoneno}}</td>
						<td>{{$row->address}}</td>

					</tr>
					@endforeach
				</tbody>
			</table>  
			
		</div>
	</div>
</div>


			
@endsection