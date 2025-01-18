<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        *{
          padding: 0;
          margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .intro{
          padding: 10px 0 30px;
        }
        h1,h4{
        font-family: "Poppins", sans-serif;

        }
        @font-face {
          font-family: "Poppins";
          src: url(fonts/Poppins-Regular.ttf) format("truetype");
        }
      .modal{
display: grid;
grid-template-columns: 60% 40%;

      }
      form {
  width: 400px; 
}
      .container{
       
    width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;

      }
    
      input:not(#checkbox){
        padding: 10px 0 10px 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        width: 97%;
      }
   
      .submit-btn{
        background-color: #7bbcb0 ;
        border: none;
        border-radius: 5px;
        width: 100%;
        color: #fff;
        cursor: pointer;
        padding: 10px 0;
      }
      .remember{
        display: flex;
        align-items: center;
        gap: 8px; /* Khoảng cách giữa checkbox và label */
      }
   
      input[type="checkbox"],.checkbox-lb{
        display: inline-block;

      }
      .password{
  display: flex;
  align-items: center;
  margin: 5px 0;
}
.password-lb{
margin-right: auto;

}
.forget{
  margin-left: auto;
  color: #2e28ef;
  font-size:12px;
  text-decoration: none;
}
      .email{
        margin: 5px 0;
      }
      .email-lb{
        margin-right: auto;
      }
#email{
  margin: 5px 0;

}

      .other-login{
        display: flex;
        
      }
      .google-btn,.apple-btn{
  width: 100%;
        display: inline-flex;
border-radius: 5px;
        background-color: #fff;
        color: black;
        border:1px solid #c0c0c0;
        align-items: center;

      }
      .google-btn{
        margin-right: 10px;

      }
      .google-btn img,.apple-btn img{
        width: 30px;
        height: 30px;
        object-fit: contain;
      }
      .remember{
        margin-bottom: 20px;
      }
      .line-container{
display: flex;
align-items: center;
justify-content: center;
margin: 10px 0;
}
.line{
flex-grow: 1;
height: 1px;
background-color: #ccc;
}
.line-container span:not(.line){
  margin: 0 10px;
}

      .other{
        display: flex;
        justify-content: center;
      }
.image{
    height: 100vh;
    width: 100%;
    overflow: hidden;

}
.image img{
    border-radius: 30px 0 0 30px;
    height: 100%;
    width: 100%;
    object-fit: cover;
    position: 10%;
}

    </style>
</head>
<body>
    <di class="modal">
        <div class="container">
            <form action="POST">
              <div class="intro">
                <h1>Welcome back</h1>
                <h4>Enter your Credential to access your account</h4>
              </div>
                
                <div class="email"><label for="email" class="email-lb">Email Address</label><br>
                  <input type="email" name="email" id="email" placeholder="Enter your email"></div>
                <div class="password"><label for="password" class="password-lb">Password</label><a href="#" class="forget">forget password</a></div>
                  <input type="password" name="password" id="password" placeholder="Enter your password">
                <div class="remember">
                    <input type="checkbox" name="checkbox" id="checkbox">
                <label for="checkbox" class="checkbox-lb">Remember for 30 days</label>
                </div>
                
                <button type="submit" class="submit-btn">Login</button>
                <div class="line-container">
                    <span class="line"></span>
                    <span>Or</span>
                    <span class="line"></span>
                </div>
                <div class="other-login">
                  <button class="google-btn"><img src="../img/google.png" alt="gg">Login with Google</button>
                <button class="apple-btn"><img src="../img/apple.png" alt="apple">Login with Apple</button>
                </div>
                
                <div class="other">
                  <span>Don't have an account? <a href="#">Sign Up</a></span>
                </div>
               
            </form>
        </div>
        <div class="image">
            <img src="../img/b0615ccdd4df2dff56a3f0f0d7205603.jpg" alt="login">
        </div>
    </div>
</body>
</html>