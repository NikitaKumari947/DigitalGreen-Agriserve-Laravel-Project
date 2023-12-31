@extends('admin.layoutlogin')
@section('content')
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" name="firstname" class="form-control form-control-user" id="exampleFirstName"
                                        placeholder="First Name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="lastname" class="form-control form-control-user" id="exampleLastName"
                                        placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" form-control form-control-user" id="exampleInputEmail"
                                    placeholder="Email Address">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" name="password" class="form-control form-control-user"
                                        id="exampleInputPassword" placeholder="Password">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" name="confirmpassword" class="form-control form-control-user"
                                        id="exampleRepeatPassword" placeholder="Repeat Password">
                                </div>
                            </div>
                            <input TYPE="submit" name="submit" class="btn btn-primary btn-user btn-block" value="Register Account">
                              
                            <hr>
                           
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="{{url('admin-login')}}">Already have an account
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> 
@endsection