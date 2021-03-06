@extends('footer')
@extends('faq')  
@extends('about')    

        <!doctype html>
        <html lang="{{ app()->getLocale() }}">
        <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">



        <title>Bootlegged</title>

        <!-- Fonts -->

        <link href="https://fonts.googleapis.com/css?family=Yrsa" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/app.css">
        
  

        <!-- Styles -->
        <style>
        p{margin: 0px;}

          html, body {
              background-color: #fff;
              color: #636b6f;
              font-family: 'Yrsa', serif;
              /*font-weight: 500;*/
              height: 500px;
              margin: 0;
              background-image: url(Images/back.jpg);
              background-repeat: no-repeat; 
              /*background-size: 1440px 700px;*/
              background-size: 100% 120%;
              /*-webkit-background-size: cover;*/
              -moz-background-size: cover;
              -o-background-size: cover;
              /*background-size: cover;*/
              
          }

          /* Dropdown Button */
.dropbtn {
   /* background-color: #3498DB;*/
   background: rgba(230, 194, 0); 
    color: white;
    
    font-size: 16px;
    border: none;
    cursor: pointer;
    width: 80px;
    text-align: center;
    display: inline;
    font-size: 19px;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
    /*background-color: #2980B9;*/
    background: rgba(211, 188, 63);

}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
          

        </style>
        </head>
        <body> 

        <div>
                
               <img style=" position: absolute; display: inline;" class="logo"  alt ="logo" src="/Images/logo1.png">

         <!--       <div class="dropdown" style="float: right; margin-right: 80px; margin-top: 20px;">
  <button onclick="myFunction()" class="dropbtn" >Login</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="{{URL::to('loginmanu')}}">As Manufacturer</a>
    <a href="{{URL::to('loginstor')}}">As Store Owner</a>
    
  </div> -->
</div>  
              <a href="{{URL::to('loginstor')}}" style="float: right;margin-right: 100px; font-size: 19px; text-decoration: none; vertical-align:middle; " id="log" class="button">Login</a>
             
              <a href="#contact" style="float: right;margin-right: 60px; font-size: 19px; text-decoration: none; " id="log">Contact</a>
              <a href="#faq"  id="log" style=" font-size: 19px; float: right; text-decoration: none; margin-right: 50px; ">FAQ</a>
              <a href="#about"  id="log" style=" font-size: 19px; float: right; text-decoration: none; margin-right: 50px; ">About</a>

                
              <a href="#home" id="log" style="float: right;  margin-right:50px ; font-size: 19px; text-decoration: none;">Home
                   </a>
                  
         
          </div>    

          <div class="para" id="home">
              <ul>
            <p style="font-size: 40px; ">WELCOME TO BOOTLEGGED</p>
            <p style="color: white; font-size: 20px;" >Bootlegged is a peer to peer marketplace where buyers and sellers of alcoholic <br> bevergaes meet.We find potiential buyers for your excess inventory and uncover <br>buying opportunities for you in real time</p>
            </ul>
        </div>

      <!--About us -->
      @yield('about')


<!-- FAQ -->
     @yield('faq')

<!-- Footer -->

  @yield('footer')

<script>
  /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

</script>


        </body>
        </html>
