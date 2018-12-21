@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">HomeSewa</div>
                <div class="card-body">
                    <form method="POST" action="{{action('PostController2@update', $id)}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH">
                        <!--<div class="row">
                            <center><img style="width:30%" src='{{ asset('../../images/'.$post->filename)}}'></center>
                        </div>-->
                      
                        <div class="row">
                            <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$post->name}}">
                            </div>
                            
                            <!--<div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" value="{{$post->email}}">
                            </div>-->
                            
                            <div class="form-group col-md-6">
                            <label for="contact">Phone No</label>
                            <input type="text" class="form-control" name="contact" value="{{$post->contact}}">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label>Type</label><br/>
                                <select class="custom-select d-block w-100" name="type">
                                    <option value="1">Terrace</option>
                                    <option value="2">Semi-D</option>
                                    <option value="3">Bangla</option>
                                    <option value="4">Flat</option>                                    
                                </select>
                            </div>
                        </div>
                        <!--<div class="row">
                            <div class="form-group col-md-6">
                                <input type="file" name="filename">
                            </div>
                        </div>-->
                        <div class="row">
                            <div class="form-group col-md-6">
                                <button type="submit" class="btn btn-success">Submit</button>
                                <a href="/post2" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </form>
				</div>
            </div>
        </div>
     </div>
</div>
@endsection
