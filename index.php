<!DOCTYPE html> 
<html lang="en"> 
  <head> 
    <meta charset="UTF-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous" ></script> 
    <link rel="stylesheet" href="style.css" /> 
    <title>SelfEmp</title> 
  </head> 
  <body> 
    <div class="container"> 
      <div class="forms-container"> 
        <div class="signin-signup"> 
          <form action="#" class="sign-in-form"> 
            <h2 class="company-title selfemp-title">SelfEmp</h2> 
            <h2 class="title">Sign in</h2> 
            <div class="input-field"> 
              <i class="fas fa-user"></i> 
              <input type="text" placeholder="Email" /> 
            </div> 
            <div class="input-field"> 
              <i class="fas fa-lock"></i> 
              <input type="password" name="password" id="password" placeholder="Password" > 
              <i class="far fa-eye" id="togglePassword"></i> 
            </div> 
            <div class="check-box"> 
              <input type="checkbox"> Remember me</input> 
            </div> 
            
            <input type="submit" value="Login" class="btn solid" /> 
            <a id="otp-login" href="pno.php">Login with OTP</a> 
          </form> 
          <form action="#" class="sign-up-form"> 
            <h2 class="company-title selfemp-title">SelfEmp</h2> 
            <h2 class="title">Sign up</h2> 
            <div class="input-field"> 
              <i class="fas fa-user"></i> 
              <input type="text" placeholder="Username" /> 
            </div> 
            <div class="input-field"> 
              <i class="fas fa-envelope"></i> 
              <input type="email" placeholder="Email" /> 
            </div> 
            <div class="input-field"> 
              <i class="fas fa-lock"></i> 
              <input type="number" name="phone" id="phone" placeholder="Phone number" /> 
            </div> 
            <input type="submit" class="btn" value="Sign up" /> 
          </form> 
        </div> 
      </div> 
      <div class="panels-container"> 
        <div class="panel left-panel"> 
          <div class="content"> 
            <h3>New here ?</h3> 
            <p> Create a new account here. </p> 
            <button class="btn transparent" id="sign-up-btn"> Sign up </button> 
          </div> 
          <img src="img/log.svg" class="image" alt="" /> 
        </div> 
        <div class="panel right-panel"> 
          <div class="content"> 
            <h3>One of us ?</h3> 
            <p> Sign in using your account. </p> 
            <button class="btn transparent" id="sign-in-btn"> Sign in </button> 
          </div> 
          <img src="img/register.svg" class="image" alt="" /> 
        </div> 
      </div> 
    </div> 
    <script src="app.js"></script> 
  </body>
</html>