<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

   

    
    <style>

/* body */
body {
  background:rgba(0,0,0,0.82);
  font-family: 'Open Sans', sans-serif;
}

/* wrapper */
.wrapper {
  width:100%;
  max-width:1000px;
  margin:0px auto 100px auto;
  padding:0;
  background:rgba(255,255,255,0.1);
  color:rgba(255,255,255,0.9);
  overflow:hidden;
  position:relative;
}

/* lists */
.row ul {
  margin:0;
  padding:0;
}
.row ul li  {
  margin:0;
  font-size:16px;
  font-weight:normal;
  list-style:none;
  display:inline-block;
  width:20%;
	box-sizing:border-box;
  @media only screen and (max-width:767px) and (min-width:480px) {
    font-size:13px;
  }
  @media only screen and (max-width:479px) {
    font-size:13px;
  }
}

.title ul li {
  padding:15px 13px;
}
.row ul li {
  padding:5px 10px;
}

/* rows */
.row {
  padding:20px 0;
  height:80px;
  font-size:0;
  position:relative;
  overflow:hidden;
  transition:all 0.2s ease-out;
  border-top:1px solid darken(rgba(255,255,255,0.1), 100%);
}

.title {
  padding:5px 0 5px 0;
  height:45px;
  font-size:0;
  background-color:rgba(255,255,255,0.1);
  border-left:3px solid lighten(rgba(255,255,255,0.1), 100%);
}


.small {
  color:darken(rgba(255,255,255,0.9),60%);
  font-size:10px;
  padding:0 10px;
  margin:0;
  @media only screen and (max-width:767px) {
    display:none;
  }
}

#addButton{
    width: 180px;
    font-size: 14px;
    font-weight: 600;
    color: #FFFFFF;
    cursor: pointer;
    margin: 20px;
    height: 50px;
    text-align:center;
    border: none;
    background-color: rgba(0, 0, 0, 0.5);
    background-size: 300% 100%;
    border-radius: 50px;
}

#addSubject{
    width: 180px;
    font-size: 14px;
    font-weight: 600;
    color: #FFFFFF;
    cursor: pointer;
    margin: 20px;
    height: 50px;
    text-align:center;
    border: none;
    background-color: rgb(0, 0, 0);
    background-size: 300% 100%;
    border-radius: 50px;
}


#addButton:hover{
    background-image: linear-gradient(to right, #29323c, #485563, #2b5876, #4e4376);
    box-shadow: 0 4px 15px 0 rgba(45, 54, 65, 0.75);
}



    </style>

    </head>
    <body class="antialiased">
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
        <h1 style="font-size:32px; color: white">My Tutor</h1>
        
    </div>
    <div style="height:auto; width:100%; margin:20px; position:relative; left:80%">
        <button onclick="document.getElementById('newSubject').style.display='block'; return false;" id="addButton">
        <i class="fa fa-plus" style="color:#0000FF"></i>
        Add subject

        </div>
    

    <div style="margin-top:20px; height:500px">
    <section class="wrapper">
    <!-- Row title -->
    <main class="row title">
      <ul>
        <li>Subject_ID</li>
        <li>Subject_Title</li>
        <li>Subject_Descripton</li>
        <li>Subject_Price</li>
        <li>Subject_Duration (h)</li>
      </ul>
    </main>
   
 
    @foreach ($newSubject as $subject)
    <div class="row">
        <ul>
          <li>{{ $subject ->id }}</li>
          <li>{{ $subject ->subject_Title }}</li>
          <li>{{ $subject ->subject_Description }}  </li>
          <li>{{ $subject ->subject_Price }}</li>
          <li>{{ $subject ->subject_Duration }}</li>
    </ul>
    </div>
    @endforeach 

    </div>

    <footer class="w3-container w3-center w3-black">
        <p>MyTutor <br>Designed by Woon</p>
    </footer>

    

    <div id="newSubject" class="w3-modal w3-animate-opacity">
   <div class="w3-modal-content w3-round" style="width:500px">
     <header class="w3-row w3-yellow"> <span onclick="document.getElementById
     ('newSubject').style.display='none'" class="w3-button w3-display-topright
     w3-small">&times;</span>
   <h4 class="w3-margin-left">New Subject Form</h4>
     </header>
       <div class="w3-padding">
         <form method="post" action="{{ route('addSubject') }}">
           {{csrf_field()}}
           <p><input class="w3-input w3-round w3-border" type="text"  
           name="subjectTitle" placeholder="Subject Title"></p>
           <p><textarea class="w3-input w3-border w3-round" name="description" rows="3" placeholder="Subject description"></textarea></p>
           <p><input class="w3-input w3-round w3-border" type="number" step="any"  
           name="subjectPrice" placeholder="Subject Price"></p>
           <p><input class="w3-input w3-round w3-border" type="number"  
           name="subjectDuration" placeholder="Subject Total Learning Hours"></p>
           <button class="w3-button" type="submit" id="addSubject">
           Add Subject</button>
         </form>
       </div>
    
</body>

</html>