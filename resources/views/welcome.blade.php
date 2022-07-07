<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My tutor</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
         <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <!-- Styles -->
        <style>
        
            body {
                font-family: 'Nunito', sans-serif;
            }

            * {
                text-decoration: none;
                list-style: none;
    
            }

            #innerHeader {
                height: 100%;
                display: block;
                width: 1000px;
                margin: 0 auto;
            }

            #logoTutor {
                height: 100%;
                display: table;
                float: left;
            }

            .w3-bar-block{
                color: black;
            }

            #logoTutor h1 {
                display: table-cell;
                vertical-align: middle;
                font: size 50px;
                color: white;
            }   

            #navigationMenu {
                float: right;
                height: 100%;
            }


            #navigationMenu ul {
                margin: 0;
                height: 100%;
            }

            #navigationMenu a {
                height: 100%;
                display: table;
                float: left;
                padding: 0px 40px;
            }

            #navigationMenu a :hover{
                color: dodgerblue;
                transition: 0.7s ease;

            }  

            #navigationMenu li {
                height: 100%;
                display: table-cell;
                vertical-align: middle;
                font-size: 18px;
            }

            
            #imgTutor{
                background-image: url("tutor.png");
                padding: 0px;
                object-fit: fill;
                width: 100%;
                height: 240px; 
   
}
        </style>
    </head>

    <body class="antialiased">
    

    <div class="w3-header w3-black w3-display-container" style="height: 110px;">
    <a class="w3-bar-item w3-right" style="text-decoration: none; margin-right:30px" href="{{ url('register')}}">
         Register</a>
<a class="w3-bar-item w3-right" style="text-decoration: none; margin-right:30px" href="{{ url('login')}}">
         Login</a>
        <div id="innerHeader">
       
            <div id="logoTutor"> 
                <h1><b>My Tutor</b></h1>
            </div>

            <div id="navigationMenu" class="w3-hide-small w3-hide-medium">
                <ul>
                    <a href= "{{ url('') }}">
                        <li>About</li>
                    </a>
                    <a href="{{ url('') }}">
                        <li>Courses</li>
                    </a>
                    <a href="{{ url('') }}">
                        <li>Tutors</li>
                    </a>
                    <a href="{{ url('') }}">
                        <li style="padding-right: 60px;">Choose Us</li>
                    </a>
                </ul>
            </div>

        </div>

    </div>

    <div>
            <div class ="w3-display-container" style="display:flex; justify-content:space-around; text-align:center" id="about">
                <div style ="width:30%">
                    <H1>About</H1>
                </div>

                <div style="width:70%;">
                    <h4>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi fugit, id voluptate porro atque labore illum quibusdam dolorum dolorem repellat cupiditate qui fugiat itaque incidunt, accusantium voluptates nihil consequuntur exercitationem.

                     </h4>
                </div>
            </div>

            <div class ="w3-display-container" style="display:flex; justify-content:space-around; text-align:center" id="course">
                <div style ="width:70%">
                    <h4>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione, minima nam! Suscipit ipsam, asperiores consectetur perferendis sit fugit voluptatum consequatur expedita voluptate. Temporibus nemo expedita, iure necessitatibus eius illum corrupti.

                    </h4>
                </div>

                <div style="width:30%;">
                    <h1>Course

                     </h1>
                </div>
            </div>

            <div class ="w3-display-container" style="display:flex; justify-content:space-around; text-align:center; vertical-align:middle" id="Tutor">
                <div style ="width:30%" id="imgTutor">
                    <H1 style="color: white;">Tutor</H1>
                </div>

                <div style="width:70%;">
                    <h4>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi fugit, id voluptate porro atque labore illum quibusdam dolorum dolorem repellat cupiditate qui fugiat itaque incidunt, accusantium voluptates nihil consequuntur exercitationem.

                     </h4>
                </div>
            </div>

            <div class ="w3-display-container" style="display:flex; justify-content:space-around; text-align:center" id="chooseUs">
                <div style ="width:70%">
                    <h4>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione, minima nam! Suscipit ipsam, asperiores consectetur perferendis sit fugit voluptatum consequatur expedita voluptate. Temporibus nemo expedita, iure necessitatibus eius illum corrupti.

                    </h4>   
                </div>

                <div style="width:30%;">
                    <h1> Why choose Us

                     </h1>
                </div>
            </div>


    </div>


    <footer class="w3-container w3-center w3-black">
        <p>MyTutor <br>Designed by Woon</p>

        </footer>
            
        </div>
    </body>
</html>
