@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">HomeSewa</div>
                <div class="card-body">
					<div class="container">
					</br>
						@if(\Session::has('success'))
							<div class="alert alert-success">
								<p>{{\Session::get('success')}}</p>
							</div><br/>
						@endif
                       
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col">No</th>
									<th scope="col">Type</th>
									<th scope="col">Image</th>
									
								</tr>
							</thead>
							<tbody>
					
								@foreach($package as $passport) 
								@php
									@endphp
							<tr>
								
								<th scope="row">{{$passport->id}}</th>
								<td>{{$passport->type}}</td>
								<td>{{$passport->filename}}</td>
								
								<td>
									<a href="{{action('PostController3@edit', $passport->id)}}" class="btn btn-warning">Edit</a>
								</td>
								<td>
									<form action="{{action('PostController3@destroy', $passport->id)}}" method="post">
										@csrf
										<input name="_method" type="hidden" value="DELETE">
										<button class="btn btn-danger" type="submit">Delete</button>
									</form>
								</td>
							</tr>
							
							@endforeach
							</tbody>
							
						</table>
					<a href="{{action('PostController3@create')}}" class="btn btn-success">Create New</a>
					</div>
                  
                </div>
            </div>
        </div>
    </div>
@endsection

<!--@section('jscode')
<script type="text/javascript">
	$('#datepicker').datepicker()-->