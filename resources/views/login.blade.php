
@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
        <form>
        <div class="form-group">
            <label for="exampleInputEmail1" >Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1" class="form-label" >Password</label>
            <input type="password" class="form-control" placeholder="Password" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
    </div>
</div>
@endsection