@extends('layouts.dashboard')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Create new image</h4>
                    </div>
                    <div class="content">
                        <form role="form" method="POST" action="{{ url('image/add') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" placeholder="Picture #3" name="name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="picture" required>
                                        <span class="help-block">Please select an image file to upload.</span>
                                        <span class="help-block">Only JPG extension allowed.</span>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info btn-fill pull-right">Upload image</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
</div>

@endsection