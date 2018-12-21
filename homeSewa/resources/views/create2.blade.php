@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">HomeSewa</div>

                <div class="card-body">
                    
					<div class="container">
							
							<form action="{{url('post3')}}" method="POST" enctype="multipart/form-data">
							
								@csrf
									<div class="row">
										<!--<div class="form-group col-md-6">
											<label for="type">Type:</label>
												<input type="text" class="form-control" name="type" required="">
									 			
										</div>
										<div class="form-group col-md-6">
											<label for="Email">Email:</label>
												<input type="email" class="form-control" name="email" required="">
									 		
										</div>
										<div class="form-group col-md-6">
											<label for="id">IC No:</label>
												<input type="int" class="form-control" name="id" required="">

										</div>
                                        <div class="form-group col-md-6">
											<label for="contact">Phone No:</label>
												<input type="int" class="form-control" name="contact" required="">

										</div>
                                        <div class="form-group col-md-6">
											<label for="address">Address No:</label>
												<input type="text" class="form-control" name="address" required="">

										</div>-->
										<div class="form-group col-md-6">
											<label>Type:</label><br/>
											<select class="custom-select d-block w-100" name="type" required="">
												<option value="1">Terrace</option>
									 			<option value="2">Semi-D</option>
									 			<option value="3">Banglo</option>
									 			<option value="4">Flat</option>
									 		</select>
										</div>
									</div>
									<div class="row">
										<div class="form-group col-md-6">
									
												<input type="file" name="filename"></button>
												
											</div>
									</div>
									<div class="row">
										<div class="form-group col-md-6">
									
												<button type="submit" class="btn btn-success">Submit</button>
												<a href={{ url('/post3') }}>List</a>
											</div>
									</div>

								
							</form>
					
					</div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
