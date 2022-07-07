<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>
        header{
        display:block;
        margin: 0;
        padding: 0;
    }

    footer{
        position: absolute;
        bottom: 0;
        width:100%;
    }

    footer #register{   
        position: absolute;
        bottom: 0;
        width:100%;
    }


    footer p {
        color: white;
        font-size: 12px;
    
    }

    #loginSection{
        
        margin: 0;
        height: 540px;
        max-width: 100%;
        background:linear-gradient(to top, rgba(255,255,255,0.8), rgba(255,255,255,0.95)),url('tutor.png');
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-position: center;
        background-size: cover;
        
    }

    #loginSection h3{
        text-align: center;
    }

    form{
        margin-top: 20px;
    }

    form #signinButton{
        background:linear-gradient(to right, rgb(14, 66, 235,0.5), rgb(14, 66, 235,1));
        margin-left: 21vh;
   
    }

    form #forgetPass{
        margin-left: 15vh;
        color: black;
    }

    form #tRegister{
        margin-left: 14vh;
        color: black;
    }

    form #forgetPass a{
        text-decoration: none;
    }

    </style>
    
</head>
<body>
    @if (session('save'))
    <script>
        alert("Success");
    </script>
    @endif
    @if (session('error'))
    <script>
        alert("Failed");
    </script>
    @endif
    

<div class="w3-header w3-black w3-display-container w3-padding-24 w3-center">
<a class="w3-bar-item w3-right" style="text-decoration: none; margin-right:30px" href="{{ url('')}}">
         Home</a>
        <h1 style="font-size:32px; color: white">My Tutor</h1>
    </div>

    <div class="w3-display-container" id="loginSection">

        <div style=" display:flex; justify-content:center">

            <div class="w3-container w3-round">

                <div class="w3-container w3-blue" style="width: 400px; margin-top: 75px;">
                    <h3>Login</h2>
                </div>

                <form name="loginForm" action="{{ route('loginPost') }}" method="post" style=" border:2px">
                
                {{csrf_field()}}
                    <p>
                        <label for="email"><b>Email:</b></label>
                        <input class="w3-input w3-round w3-border" type="email" name="email" id="email" placeholder="login@hotmail.com" required>
                    </p>
                    @if ($errors->has('email'))
                     <span class="text-danger">{{ $errors->first('email') }}</span>
                         @endif


                    <p>
                        <label for="password"> <b>Password:</b></label>
                        <input class="w3-input w3-round w3-border" type="password" name="password" id="password" placeholder="login123" required>
                    </p>

                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif

                    <p>
                        <input id="idremember" name="rememberme" class="w3-check" type="checkbox"> 
                        <label for="rememberme" id="lRemember" style="font-family: Lucida Console; font-size:20px; margin-left:5px">Remember me</label>
                    </p>

                    <p style="color:white">
                        <button class="w3-button w3-round " id="signinButton" name="signinButton">
                            Sign in
                        </button>
                    </p>

                    <p id="forgetPass">
                        <a href="#">Forget your password?</a>
                    </p>

                    <p id="tRegister">
                        No account?
                        <a href="{{ url('register') }}">Create one!</a>
                    </p>

                </form>

            </div>
        </div>
    </div>


    <footer class="w3-container w3-center w3-black">
        <p>MyTutor <br>Designed by Woon</p>

    </footer>

    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
    
</body>
</html>