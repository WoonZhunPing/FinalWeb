<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>
        header {
    display: block;
    margin: 0;
    padding: 0;
}

footer #register {
    position: absolute;
    bottom: 0;
    width: 100%;
}


footer p {
    color: white;
    font-size: 12px;

}


#regSection {
    margin: 0;
    padding-bottom: 50px;
    height: 100%;
   
    max-width: 100%;
    background: linear-gradient(to top, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.95)), url(tutor.png); 
    background-repeat: no-repeat;
    background-attachment: scroll;
    background-position: center;
    background-size: cover;

    display: flex;
    justify-content: space-around;

    padding-top: 50px;

} 


#loginSection h3 {
    text-align: center;

}

form {
    margin-top: 20px;
}

.w3-button{
    background: linear-gradient(to right, rgb(14, 66, 235, 0.5), rgb(14, 66, 235, 1));
    margin-left: 21vh;
    

}
    </style>

</head>
<body class="antialiased">
<div class="w3-header w3-black w3-display-container w3-padding-24 w3-center">
<a class="w3-bar-item w3-right" style="text-decoration: none; margin-right:30px" href="{{ url('login')}}">
         Login</a>
<a class="w3-bar-item w3-right" style="text-decoration: none; margin-right:30px" href="{{ url('')}}">
         Home</a>
         
        <h1 style="font-size:32px; color: white">My Tutor</h1>
       
    </div>

    <div class="w3-display-container" id="regSection">


        <div class="w3-container w3-round">

            <div class="w3-container w3-round" style="background-color:white">

                <div class="w3-container " style="width: 400px; margin-top: 20px;">
                    <h3 style="text-align:center"><b>Create an Account</b></h2>
                </div>

                <form action="{{ route('registerPost') }}" method="post" style=" border:2px">
                {{csrf_field()}}
                <p>
                        <label for="name"><b>Fullname:</b></label>
                        <input class="w3-input w3-round w3-border" type="text" id="name" name="name" placeholder="Albert LOO" required>
                    </p>
                    @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                     @endif

                    <p>
                        <label for="email"> <b>Email:</b></label>
                        <input class="w3-input w3-round w3-border" type="email" id="email" name="email" placeholder="login123@hotmail.com" required>
                    </p>
                    @if ($errors->has('email'))
                     <span class="text-danger">{{ $errors->first('email') }}</span>
                         @endif

                    <p>
                        <label for="phoneNum"> <b>Phone Number:</b></label>
                        <input class="w3-input w3-round w3-border" type="tel" id="phoneNum" name="phoneNum" placeholder="011-11111111" required>
                    </p>
                    @if ($errors->has('phoneNum'))
                    <span class="text-danger">{{ $errors->first('phoneNum') }}</span>
                         @endif

                    <p>
                        <label for="homeAdd"> <b>Home Address:</b></label>
                        <textarea class="w3-input w3-round w3-border" id="homeAdd" name="homeAdd" placeholder="1,Jalan Abang" required></textarea>
                    </p>

                    @if ($errors->has('homeAdd'))
                        <span class="text-danger">{{ $errors->first('homeAdd') }}</span>
                    @endif

                    <p>
                        <label for="state"> <b>State:</b></label>
                        <select class="w3-input w3-round w3-border" id="state" name="state">
                            <option value="Pulau Pinang">Pulau Pinang</option>
                            <option value="Kuala Lumpur">Kuala Lumpur</option>
                            <option value="Labuan">Labuan</option>
                            <option value="Johor">Johor</option>
                            <option value="Kedah" selected="selected">Kedah</option>
                            <option value="Kelantan">Kelantan</option>
                            <option value="Malacca">Malacca</option>
                            <option value="Negeri Sembilan">Negeri Sembilan</option>
                            <option value="Pahang">Pahang</option>
                            <option value="Perak">Perak</option>
                            <option value="Perlis">Perlis</option>
                            <option value="Sabah">Sabah</option>
                            <option value="Sarawak">Sarawak</option>
                            <option value="Selangor">Selangor</option>
                            <option value="Terengganu">Terengganu</option>

                        </select>
                    </p>
                    @if ($errors->has('state'))
                    <span class="text-danger">{{ $errors->first('state') }}</span>
                    @endif

                    <p>
                        <label for="password"> <b>Password:</b></label>
                        <input class="w3-input w3-round w3-border" type="password" id="password" name="password" placeholder="login123" required>
                    </p>
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif

                    <p>
                        <button class="w3-button w3-round" id="registerButton" name="registerButton">
                            Sign Up
                        </button>
                    </p>

                </form>
            </div>


        </div>
    </div>


    <footer class="w3-container w3-center w3-padding-12px w3-black" id="register">
        <p>MyTutor <br>Designed by Woon</p>
    </footer>
</body>
</html>