<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in</title>
    <style>
      @font-face {
        font-family: "Poppins";
        src: url("fonts/Poppins-Regular.ttf") format("truetype");
      }
      *:not(h1) {
        padding: 0;
        margin: 0;
        font-size: 16px;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      }
      h1 {
        font-family: "Poppins", sans-serif;
        display: flex;
        justify-content: center;
      }
      .modal {
        display: grid;
        grid-template-columns: 60% 40%;
      }
      form {
        width: 400px;
      }
      .container {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .container label {
        margin: 5px 0;
      }
      input:not(#checkbox) {
        padding: 10px 0 10px 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        width: 97%;
      }

      .submit-btn {
        border: none;
        border-radius: 5px;
        background-color: #7bbcb0;
        width: 100%;
        cursor: pointer;
        padding: 10px 0;
        margin-top: 15px;
      }

      .other-login {
        display: flex;
      }
      .google-btn,
      .apple-btn {
        width: 100%;
        display: inline-flex;
        border-radius: 5px;
        background-color: #fff;
        color: black;
        border: 1px solid #c0c0c0;
        align-items: center;
      }
      .google-btn {
        margin-right: 10px;
      }
      .google-btn img,
      .apple-btn img {
        width: 30px;
        height: 30px;
        object-fit: contain;
      }
      .line-container {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 10px 0;
      }

      .line {
        flex-grow: 1;
        height: 1px;
        background-color: #ccc; /* Màu của thanh ngang */
      }

      .other {
        display: flex;
        justify-content: center;
      }
      .image {
        height: 100vh;
        width: 100%;
        overflow: hidden;
      }
      .image img {
        border-radius: 30px 0 0 30px;
        height: 100%;
        width: 100%;
        object-fit: cover;
        position: 10%;
      }
    </style>
  </head>
  <body>
    <div class="modal">
      <div class="container">
        <form action="POST">
          <h1>GET STARTED NOW</h1>
          <div class="name">
            <label for="name">Name</label>
            <input
              type="text"
              name="name"
              id="name"
              placeholder="Enter your name"
            />
          </div>
          <div class="email">
            <label for="email">Email Address</label>
            <input type="email" name="email" placeholder="Enter your email" />
          </div>
          <div class="password">
            <label for="password">Password</label>
            <input
              type="password"
              name="password"
              id="password"
              placeholder="Enter your password"
            />
          </div>
          <div class="password-again">
            <label for="password-again">Password Again</label>
            <input
              type="password"
              name="password-again"
              id="password-again"
              placeholder="Enter your password again"
            />
          </div>
          <div class="policy-cb">
            <input type="checkbox" name="checkbox" id="checkbox" />
            <label>I agree to the <a href="">terms & policy</a></label>
          </div>

          <button class="submit-btn" type="submit">Sign Up</button>
          <div class="line-container">
            <span class="line"></span>
            <span>Or</span>
            <span class="line"></span>
          </div>

          <div class="other-login">
            <button class="google-btn">
              <img src="img/google.png" alt="google" />Sign in with Google
            </button>
            <button class="apple-btn">
              <img src="img/apple.png" alt="apple" />Sign in with Apple
            </button>
          </div>

          <span class="other">Have an account? <a href="">Sign in</a></span>
        </form>
      </div>
      <div class="image">
        <img src="img/b0615ccdd4df2dff56a3f0f0d7205603.jpg" alt="img" />
      </div>
    </div>
  </body>
</html>
