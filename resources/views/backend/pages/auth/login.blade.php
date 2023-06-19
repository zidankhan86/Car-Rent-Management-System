<style>
   /* Center align the form */
.form-center {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
}

/* Style the form container */
.form-container {
  max-width: 400px;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

/* Style the form labels */
.form-label {
  font-weight: 500;
}

/* Style the form inputs */
.form-control {
  margin-bottom: 15px;
}

/* Style the pills navigation */
.nav-pills .nav-link.active {
  background-color: #007bff;
  color: #fff;
}

.nav-pills .nav-link {
  border-radius: 0;
}

/* Style the submit button */
.btn-primary {
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:hover {
  background-color: #0056b3;
  border-color: #0056b3;
}

/* Style the register link */
.text-center a {
  color: #007bff;
}

.text-center a:hover {
  text-decoration: none;
  color: #0056b3;
}


</style>


<!DOCTYPE html>
<html>

<head>
  <title>Login/Register Form</title>

</head>

<body>
  <div class="form-center">
    <div class="form-container">

        <p class="text-center">LOGIN FORM</p><br>


      <!-- Pills content -->
      <div class="tab-content">
        <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
          <form action="{{ route('login.process') }}" method="post">
            @csrf

            <!-- Email input -->
            <div class="form-outline mb-4">

              <input type="email" name="email" id="loginName" class="form-control" placeholder="Email " />
              <label for="">Email</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">

              <input name="password"  type="password" id="loginPassword" class="form-control" placeholder="Password" />
              <label for="">Password</label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

            <!-- Register buttons -->
            <div class="text-center">
              <p>Not a member? <a href="#!">Register</a></p>
            </div>
          </form>
        </div>
      </div>
      <!-- Pills content -->
    </div>
  </div>
</body>

</html>

