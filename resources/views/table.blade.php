@extends('layouts.dashboard')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <a href="{{ url('/form') }}" class="btn btn-info btn-fill pull-right"><span class="fa fa-plus"> </span>Add new</a>
                        <h4 class="title">List of Images</h4>
                        <p class="category">Tap on "Show" on individual row to change the image shown in the main page</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                            	<tr>
	                            	<th>Name</th>
	                            	<th>Image</th>
	                            	<th>Is Shown</th>
	                            	<th>Last updated</th>
	                            	<th>Action</th>
                            	</tr>
                            </thead>
                            <tbody>
                            	@foreach($image as $img)
                                <tr>
                                	<td>{{ $img->name }}</td>
                                	<td>{{ url('/').'/'.$img->source }}</td>
                                	<td><?php if( $img->select == 1) echo 'Yes' ?></td>
                                	<td>{{ $img->updated_at }}</td>
                                	<td>
                                		<a class="btn btn-xs" href="{{ url('/image/select/'.$img->id) }}">Show</a>
                                		<a class="btn btn-xs" href="{{ url('/image/edit/'.$img->id) }}">Edit</a>
                                		<a class="btn btn-xs" href="{{ url('/image/delete/'.$img->id) }}">Delete</a>

                                	</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection