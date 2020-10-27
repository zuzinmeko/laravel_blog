<!DOCTYPE html>
<html>
<head>
	<title>Condo Rental</title>
	<meta charset="utf-8">

	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="{{ asset('condoassets/bootstrap/css/bootstrap.min.css')}}">
	<script type="text/javascript" src="{{ asset('condoassets/bootstrap/js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('condoassets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('condoassets/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('condoassets/fontawesome/css/all.min.css')}}">
	
</head>
<body>
<!-- nav -->
	<nav class="navbar navbar-expand-lg navbar-dark py-2 menu">
		<div class="container">
			<a href="" class="navbar-brand">
				<img src="{{asset('condoassets/images/zu.png')}}" width="90" height="50">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<div id="myNav" class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a href="{{route('home')}}" class="nav-link">Home</a>
					</li>
					<li class="nav-item">
						<a href="{{route('rental')}}" class="nav-link">For Rental</a>
					</li>
					<li class="nav-item">
						<a href="{{route('service')}}" class="nav-link">Services</a>
					</li>
					<li class="nav-item">
						<a href="{{route('agency')}}" class="nav-link">Agency</a>
					</li> 
          <li class="nav-item">
            <a href="{{route('student.index')}}" class="nav-link">Student list</a>
          </li>
					<li class="nav-item">
						<a href="{{route('about')}}" class="nav-link">About</a>
					</li>
					<li class="nav-item">
						<a href="{{route('contact')}}" class="nav-link">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav><hr>

	@yield('content')

<!-- footer -->
<div class="one">
	<ul>
		<div class="float_left">
			<li>Zuzin Codo Rental Development@2020
				<span style="font-size: 18px">&#128525;</span></li>
			</div>
			
		</ul>
	</div>
<link rel="stylesheet" type="text/css" href="{{ asset('condoassets/css/style.css')}}">
	<!-- --------------------------------------------------------------------- -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Room Details</h5>
        <button type="button" clasfile:///C:/Users/HP/Desktop/Condo%20rental/r1.jpgs="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
        	<div class="row">
        		<div class="col-md-12">
        			<img src="{{asset('condoassets/images/b2.jpg')}}" class="img-fluid" width="500px" height="300px">
        		</div></div><hr>
        		<div class="row">
        		<div class="col-md-12">
        			<img src="{{asset('condoassets/images/bath1.jpg')}}" class="img-fluid" width="500px" height="300px">
        		</div></div><hr>
        		<div class="row">
        		<div class="col-md-12">
        			<img src="{{asset('condoassets/images/g1.jpg')}}" class="img-fluid" width="500px" height="300px">
        		</div>
        	</div><hr>
        	</div>
         </div>
      
		<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
<!--  ------------------------------------------------------------------------- -- -->
<div class="modal fade" id="myModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Room Details</h5>
        <button type="button" clasfile:///C:/Users/HP/Desktop/Condo%20rental/r1.jpgs="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
        	<div class="row">
        		<div class="col-md-12">
        			<img src="{{asset('condoassets/images/b2.jpg')}}" class="img-fluid" width="500px" height="300px">
        		</div></div><hr>
        		<div class="row">
        		<div class="col-md-12">
        			<img src="{{asset('condoassets/images/bath1.jpg')}}" class="img-fluid" width="500px" height="300px">
        		</div></div><hr>
        		<div class="row">
        		<div class="col-md-12">
        			<img src="{{asset('condoassets/images/g1.jpg')}}" class="img-fluid" width="500px" height="300px">
        		</div>
        	</div><hr>
         </div>
      </div>
		<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <script type="text/javascript" src="css/style.css"></script>
      </div>
    </div>
  </div>
</div>

<!-- -- ------------------------------------------------------------------------- -->

<div class="modal fade" id="myModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Room Details</h5>
        <button type="button" clasfile:///C:/Users/HP/Desktop/Condo%20rental/r1.jpgs="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
        	<div class="row">
        		<div class="col-md-12">
        			<img src="{{asset('condoassets/images/b3.jpg')}}" class="img-fluid" width="600px" height="500px">
        		</div></div><hr>
        		<div class="row">
        		<div class="col-md-12">
        			<img src="{{asset('condoassets/images/bath3.jpg')}}" class="img-fluid" width="600px" height="600px">
        		</div></div><hr>
        		<div class="row">
        		<div class="col-md-12">
        			<img src="{{asset('condoassets/images/g3.jpg')}}" class="img-fluid" width="500px" height="300px">
        		</div>
        	</div><hr>
        	</div>
         </div>
      
		<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
<!-- ------------------------------------------------------------------------- -->

<div class="modal fade" id="myModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Room Details</h5>
        <button type="button" clasfile:///C:/Users/HP/Desktop/Condo%20rental/r1.jpgs="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
        	<div class="row">
        		<div class="col-md-12">
        			<img src="{{asset('condoassets/images/b4.jpg')}}" class="img-fluid" width="600px" height="500px">
        		</div></div><hr>
        		<div class="row">
        		<div class="col-md-12">
        			<img src="{{asset('condoassets/images/bath4.jpg')}}" class="img-fluid" width="600px" height="600px">
        		</div></div><hr>
        		<div class="row">
        		<div class="col-md-12">
        			<img src="{{asset('condoassets/images/g4.jpg')}}" class="img-fluid" width="500px" height="300px">
        		</div>
        	</div><hr>
         </div>
      </div>
		<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

<!-- ------------------------------------------------------------------------- -->
<div class="modal fade" id="myModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Room Details</h5>
        <button type="button" clasfile:///C:/Users/HP/Desktop/Condo%20rental/r1.jpgs="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
        	<div class="row">
        		<div class="col-md-12">
        			<img src="{{asset('condoassets/images/b5.jpg')}}" class="img-fluid" width="600px" height="500px">
        		</div></div><hr>
        		<div class="row">
        		<div class="col-md-12">
        			<img src="{{asset('condoassets/images/bath5.jpg')}}" class="img-fluid" width="600px" height="600px">
        		</div></div><hr>
        		<div class="row">
        		<div class="col-md-12">
        			<img src="{{asset('condoassets/images/g5.jpg')}}" class="img-fluid" width="500px" height="300px">
        		</div>
        	</div><hr>
         </div>
      </div>
		<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

<!-- ------------------------------------------------------------------------- -->

<div class="modal fade" id="myModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Room Details</h5>
        <button type="button" clasfile:///C:/Users/HP/Desktop/Condo%20rental/r1.jpgs="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
        	<div class="row">
        		<div class="col-md-12">
        			<img src="{{asset('condoassets/images/b6.jpg')}}" class="img-fluid" width="600px" height="500px">
        		</div></div><hr>
        		<div class="row">
        		<div class="col-md-12">
        			<img src="{{asset('condoassets/images/bath6.jpg')}}" class="img-fluid" width="600px" height="600px">
        		</div></div><hr>
        		<div class="row">
        		<div class="col-md-12">
        			<img src="{{asset('condoassets/images/g1.jpg')}}" class="img-fluid" width="500px" height="300px">
        		</div>
        	</div><hr>
         </div>
      </div>
		<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
<!-- ------------------------------------------------------------------------- -->
<div class="modal fade" id="myModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Room Details</h5>
        <button type="button" clasfile:///C:/Users/HP/Desktop/Condo%20rental/r1.jpgs="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
        	<div class="row">
        		<div class="col-md-12">
        			<img src="{{asset('condoassets/images/b7.jpg')}}" class="img-fluid" width="600px" height="500px">
        		</div></div><hr>
        		<div class="row">
        		<div class="col-md-12">
        			<img src="{{asset('condoassets/images/bath7.jpg')}}" class="img-fluid" width="600px" height="600px">
        		</div></div><hr>
        		<div class="row">
        		<div class="col-md-12">
        			<img src="{{asset('condoassets/images/g7.jpg')}}" class="img-fluid" width="500px" height="300px">
        		</div>
        	</div><hr>
         </div>
      </div>
		<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
<!-- ------------------------------------------------------------------------- -->
<div class="modal fade" id="myModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Room Details</h5>
        <button type="button" clasfile:///C:/Users/HP/Desktop/Condo%20rental/r1.jpgs="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
        	<div class="row">
        		<div class="col-md-12">
        			<img src="{{asset('condoassets/images/b10.jpg')}}" class="img-fluid" width="600px" height="500px">
        		</div></div><hr>
        		<div class="row">
        		<div class="col-md-12">
        			<img src="{{asset('condoassets/images/bath3.jpg')}}" class="img-fluid" width="600px" height="600px">
        		</div></div><hr>
        		<div class="row">
        		<div class="col-md-12">
        			<img src="{{asset('condoassets/images/g7.jpg')}}" class="img-fluid" width="500px" height="300px">
        		</div>
        	</div><hr>
         </div>
      </div>
		<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
<!-- ------------------------------------------------------------------------- -->
<div class="modal fade" id="myModal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Room Details</h5>
        <button type="button" clasfile:///C:/Users/HP/Desktop/Condo%20rental/r1.jpgs="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
        	<div class="row">
        		<div class="col-md-12">
        			<img src="{{asset('condoassets/images/b12.jpg')}}" class="img-fluid" width="600px" height="500px">
        		</div></div><hr>
        		<div class="row">
        		<div class="col-md-12">
        			<img src="{{asset('condoassets/images/bath9.jpg')}}" class="img-fluid" width="600px" height="600px">
        		</div></div><hr>
        		<div class="row">
        		<div class="col-md-12">
        			<img src="{{asset('condoassets/images/g9.jpg')}}" class="img-fluid" width="500px" height="300px">
        		</div>
        	</div><hr>
         </div>
      </div>
		<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

<!-- ------------------------------------------------------------------------- -->
<div class="modal fade" id="myModal10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Room Details</h5>
        <button type="button" clasfile:///C:/Users/HP/Desktop/Condo%20rental/r1.jpgs="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
        	<div class="row">
        		<div class="col-md-12">
        			<img src="{{asset('condoassets/images/b13.jpg')}}" class="img-fluid" width="600px" height="500px">
        		</div></div><hr>
        		<div class="row">
        		<div class="col-md-12">
        			<img src="{{asset('condoassets/images/bath1.jpg')}}" class="img-fluid" width="600px" height="600px">
        		</div></div><hr>
        		<div class="row">
        		<div class="col-md-12">
        			<img src="{{asset('condoassets/images/g10.jpg')}}" class="img-fluid" width="500px" height="300px">
        		</div>
        	</div><hr>
         </div>
      </div>
		<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
<!-- -------------------------------------------------------------------- -->
<div class="modal fade" id="ph" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h6>ဖုန်းခေါ်ဆိုသောအခါ အဆင်ပြေစေရန် အတွက် Zurental.com တွင် တွေ့သောကြော်ငြာဟု ပြောပေးပါရန်<span style="font-size: 28px">&#128222;</span> </h6>
      </div>
      <div class="modal-body">
        <div class="container">
        	<div class="row">
        		<div class="col-md-9">
        			
        			<p>Mobile 09765433344</p>
        			<p>Mobile 09694427874</p>
        			<p>Mobile 09987458745</p>
        			<p>Mobile 09487565498</p><br>
        			
        			<p>Location:ဆူးလေ-ရန်ကုန်တိုင်း</p>

        		</div></div>
        
         </div>
      </div>
		<div class="modal-footer">
        <button type="button" class="btn btn-outline-danger btn-block" data-dismiss="modal">ဖုန်းဆက်ရန်</button>
       
      </div>
    </div>
  </div>
</div>
<!-- ------------------------------------------------------------------------- -->
<!-- email -->
<div class="modal fade" id="email" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h6>ဒီကွန်ဒို အခန်းကို စိတ်ဝင်စားပါသည်။ ဒီကွန်ဒို သတင်းများကိုemailဖြင့် ဖတ်ရန်<span style="font-size: 28px">&#128231;</span> </h6>
      </div>
      <div class="modal-body">
        <div class="container">
        	<div class="row">
        		<div class="col-md-12">
        			<div class="card">
								<div class="container mx-4 my-4">
									<div class="form-group row">

										<label for="forName" class="col-sm-3 col-lg-3 col-form-label">Name</label>
										<div class="col-sm-10 col-lg-6">
											<input type="text" class="form-control" id="inputName">
										</div>
									</div>
									<div class="form-group row">
										<label for="inputphone" class="col-sm-3 col-lg-3 col-form-label">Phone</label>
										<div class="col-sm-10 col-md-6 col-lg-6">
											<input type="text" class="form-control" id="inputphone">
										</div>
									</div>
									<div class="form-group row">
										<label for="inputEmail3" class="col-sm-3 col-lg-3 col-form-label">Email</label>
										<div class="col-sm-10 col-lg-6">
											<input type="email" class="form-control" id="inputEmail3" placeholder="example@gmail.com">
										</div>
									</div>
									<div class="form-group row">
										<label for="inputPassword3" class="col-sm-3 col-lg-3 col-form-label">Password</label>
										<div class="col-sm-10 col-lg-6">
											<input type="password" class="form-control" id="inputPassword3" placeholder="1234567">
										</div>
									</div>
									<div class="form-group row">
									<div class="col-sm-10">
										<textarea class="form-control" rows="5" name="" placeholder="ဒီကွန်ဒို အခန်းနှင့်ပါတ်သတ်သော အသေးစိတ်အချက်အလက်များအားပေးပို့စေလိုပါတယ်။"></textarea>
									</div>
								</div>

									
								</div>

							</form>

        		</div></div>
        
         </div>
      </div>
		<div class="modal-footer">
        <button type="button" class="btn btn-outline-success btn-block" data-dismiss="modal" > Emaiil ပို့ပါ</button>
       
      </div>
    </div>
  </div>
</div>
<!-- ----------------------------------------------------------------- -->
</body>
</html>