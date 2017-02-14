@extends ('layout.master')

@section ('title')
Welcome
@endsection

@section ('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h4>Login</h4>
            <form action="">
              <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email" name="email">
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" name="pwd">
              </div>
              <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
              </div>
              <button type="submit" class="btn btn-default">Login</button>
            </form>
        </div>
        <div class="col-md-6">
            <h4>Sign Up</h4>
            <form action="{{ route('signup')}}" method="post">
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="name" class="form-control" id="name" name="name">
                </div>
              <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email" name="email">
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" name="pwd">
              </div>
             
              <button type="submit" class="btn btn-default">Sign Up</button>
              <input type="hidden" name="_token" value="{{Session::token()}}">
            </form>
        </div>
    </div>
</div>
@endsection