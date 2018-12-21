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
									<th scope="col">Name</th>
									<th scope="col">Phone No</th>
									<th scope="col">Content</th>
									<th scope="col">Type</th>
									<th scope="col" colspan="2">Action</th>
								</tr>
							</thead>
							<tbody>
					
								@foreach($lodger as $passport) 
								@php
									@endphp
							<tr>
								
								<th scope="row">{{$passport->name}}</th>
								<td>{{$passport->contactl}}</td>
								<td>{{$passport->content}}</td>
                                
								<td>@if ($passport->type == 1)
                                    Terrace
                                    @elseif ($passport->type == 2)
                                    Semi-D
                                    @elseif ($passport->type == 3)
                                    Banglo
                                    @elseif ($passport->type == 4)
                                    Flat
                                    @endif
                                </td>
								
								<td>
									<a href="{{action('PostController@edit', $passport->id)}}" class="btn btn-warning">Edit</a>
								</td>
								<td>
									<form action="{{action('PostController@destroy', $passport->id)}}" method="post">
										@csrf
										<input name="_method" type="hidden" value="DELETE">
										<button class="btn btn-danger" type="submit">Delete</button>
									</form>
								</td>
							</tr>
							
							@endforeach
							</tbody>
							
						</table>
					<!-- <a href="{{action('PostController@create')}}" class="btn btn-success">Create New</a>-->
					</div>
                  
                </div>
            </div>
        </div>
    </div>
@endsection

<!--@section('jscode')
<script type="text/javascript">
	$('#datepicker').datepicker()-->