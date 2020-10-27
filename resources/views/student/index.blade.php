@extends('master')
@section('content')

	

<div class="container my-5">
	<div class="row">
		<div class="offset-2 col-md-10">
			<h3>All Student List</h3><hr>
			<div class="col-md-12">
				<a href="{{route('student.create')}}" class="btn btn-info">Add New</a>
			</div><br>
		
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">RollNo</th>
						<th scope="col">Name</th>
						<th scope="col">Email</th>
						<th scope="col">Phone</th>
						<th scope="col">Address</th>
						<th scope="col">Option</th>
					</tr>
				</thead>
				<tbody>
					@php
					$i=1;
					@endphp
						@foreach($students as $row)

						<tr>

						<td>{{$i++}}</td>
						<td>{{$row->rollno}}</td>
						<td>{{$row->name}}</td>
						<td>{{$row->email}}</td>
						<td>{{$row->phoneno}}</td>
						<td>{{$row->address}}</td>
						<td><p>
							<a href="{{route('student.edit',$row->id)}}" class="btn btn-warning btn-sm mx-2">Edit</a>
							<a href="{{route('student.show',$row->id)}}" class="btn btn-info btn-sm mx-2">Detail</a>
							<form method="post" action="{{route('student.destroy',$row->id)}}" onsubmit="return confirm('Are you sure want to delete')" class="d-inline-block"> 
								@csrf
								@method('DELETE')
								<input type="submit" name="btnsubmit" class="btn btn-danger mx-2" value="Delete">
								
							</form>
						</p></td>

					</tr>
					@endforeach
				</tbody>
			</table>  
		</div>
			
		
	</div>
</div>


			
@endsection