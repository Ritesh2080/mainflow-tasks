<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
    <title>Login & Register</title>
  </head>
  <body>
    <main>
      <div class="container">
        <div class="login-left">
          <div id="sign-up" class="form-container sign-up">
            <h1>Get Started Now</h1>
            <form action="register.php" method="post">
              <div class="input-group">
                <label for="username">Name</label>
                <input
                  type="text"
                  name="username"
                  id="username"
                  required
                  placeholder="Enter your name"
                  autocomplete="username"
                />
              </div>
              <div class="input-group">
                <label for="signup-email">Email address</label>
                <input
                  type="email"
                  name="signup-email"
                  id="signup-email"
                  required
                  placeholder="Enter your email"
                  autocomplete="email"
                />
              </div>
              <div class="input-group">
                <label for="signup-password">Password</label>
                <input
                  type="password"
                  name="signup-password"
                  id="signup-password"
                  required
                  placeholder="Password"
                  autocomplete="current-password"
                />
              </div>
              <div class="terms">
                <input type="checkbox" name="terms" id="terms" required />
                <label for="terms"
                  >I agree to <a href="">terms and policy</a></label
                >
              </div>
              <input class="btn" name="SignUp" type="submit" value="SignUp" />
            </form>

            <div class="or">
              <div class="orleft"></div>
              or
              <div class="orright"></div>
            </div>
            <div class="other-options">
              <div class="google-button">
                <img src="images/google_logo.png" alt="google" />
                <p>Sign in with Google</p>
              </div>
              <div class="apple-button">
                <img src="images/apple_logo.png" alt="apple" />
                <p>Sign in with Apple</p>
              </div>
            </div>
            <p>
              Have an account? <button id="change-sign-in-btn">Sign In</button>
            </p>
          </div>
          <div
            id="sign-in"
            style="display: none"
            class="form-container sign-in"
          >
            <h1>Welcome back!</h1>
            <h2>Enter your Credentials to access your account</h2>
            <form action="register.php" method="post">
              <div class="input-group">
                <label for="signin-email">Email address</label>
                <input
                  type="email"
                  name="signin-email"
                  id="signin-email"
                  required
                  placeholder="Enter your email"
                  autocomplete="email"
                />
              </div>
              <div class="input-group">
                <label for="signin-password"
                  >Password
                  <div class="forgot-password">forgot password</div></label
                >
                <input
                  type="password"
                  name="signin-password"
                  id="signin-password"
                  required
                  placeholder="Password"
                  autocomplete="current-password"
                />
              </div>
              <div class="terms">
                <input type="checkbox" name="remember" id="remember" />
                <label for="remember">Remember for 30 days</label>
              </div>
              <input class="btn" name="login" type="submit" value="Login" />
            </form>

            <div class="or">
              <div class="orleft"></div>
              or
              <div class="orright"></div>
            </div>
            <div class="other-options">
              <div class="google-button">
                <img src="images/google_logo.png" alt="google" />
                <p>Sign in with Google</p>
              </div>
              <div class="apple-button">
                <img src="images/apple_logo.png" alt="apple" />
                <p>Sign in with Apple</p>
              </div>
            </div>
            <p>
              Don't have an account?
              <button id="change-sign-Up-btn">Sign Up</button>
            </p>
          </div>
        </div>
        <div class="login-right">
          <img
            src="images/chris-lee-70l1tDAI6rM-unsplash 1.png"
            alt="leaf image"
          />
        </div>
      </div>
    </main>
    <script>
      let signInForm = document.getElementById("sign-in");
      let signUpForm = document.getElementById("sign-up");
      let changeSignInButton = document.getElementById("change-sign-in-btn");
      let changeSignUpButton = document.getElementById("change-sign-Up-btn");

      changeSignInButton.addEventListener("click", () => {
        signInForm.style.display = "block";
        signUpForm.style.display = "none";
      });

      changeSignUpButton.addEventListener("click", () => {
        signUpForm.style.display = "block";
        signInForm.style.display = "none";
      });
    </script>
  </body>
</html>
