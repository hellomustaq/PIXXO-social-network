@extends('layout.main')

@section('content')
<div class="container">
    {{-- <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div> --}}
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="col-md-3">
                
            </div>
            <div class="col-md-6 text-center">
                <img class="img-circle img-fluid" height="150" width="150" src="/images/pro.png">
            </div>
            <div class="col-md-3">
                
            </div>
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="title-name">
                <h3 class="text-center">Mustaque Ahemmed</h3>
            </div>
            <div class="info-panel col-md-6 col-md-offset-3 text-center">
                <span class="pull-left"><b>100 following</b></span>
                <span class="pull-center"><b>100 following</b></span>
                <span class="pull-right"><b>100 following</b></span>
            </div><br><br>
            <div class="bio col-md-6 col-md-offset-3 text-center">
                <p>Hello, I am Mustaq. if you r asking me what i speacially care about then my answer is Programming.</p>
            </div>
            <div class="col-md-6 col-md-offset-3">
                <form action="" method="">
                    {{csrf_field()}}
                    <input class="btn btn-success btn-block" type="submit" name="submit" value="Edit Profile">
                </form>
            </div>
        </div>
        
    </div>
</div>
@endsection
