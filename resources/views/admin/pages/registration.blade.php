@include('admin.partisal.all-admin-css')

<body>
    <div class="container">
        <form class="form-horizontal" role="form">
            <h2>Registration</h2>
            <div class="form-group">
                <label for="firstName" class="col-sm-3 control-label">First Name</label>
                <div class="col-sm-9">
                    <input type="text" id="firstName" placeholder="First Name" class="form-control" autofocus>
                </div>
            </div>
            <div class="form-group">
                <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                <div class="col-sm-9">
                    <input type="text" id="lastName" placeholder="Last Name" class="form-control" autofocus>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email* </label>
                <div class="col-sm-9">
                    <input type="email" id="email" placeholder="Email" class="form-control" name="email">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Password*</label>
                <div class="col-sm-9">
                    <input type="password" id="password" placeholder="Password" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Confirm Password*</label>
                <div class="col-sm-9">
                    <input type="password" id="password" placeholder="Password" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
                <div class="col-sm-9">
                    <input type="date" id="birthDate" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
                <div class="col-sm-9">
                    <input type="phoneNumber" id="phoneNumber" placeholder="Phone number" class="form-control">

                </div>
            </div>


            <div class="form-group">
                <label class="control-label col-sm-3">Gender</label>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="materialUnchecked"
                                    name="materialExampleRadios">
                                <label class="form-check-label" for="materialUnchecked">Meal</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="materialChecked"
                                    name="materialExampleRadios" checked>
                                <label class="form-check-label" for="materialChecked">Female</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.form-group -->
            <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3">
                    <span class="help-block">*Required fields</span>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Register</button>
            <button type="submit" class="btn btn-success btn-block"><a href="{{URL::to('/')}}">Login</a></button>
        </form> <!-- /form -->
    </div> <!-- ./container -->
    @include('admin.partisal.all-script')

</body>

</html>
