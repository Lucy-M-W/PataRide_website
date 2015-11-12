 <!DOCTYPE html>
<html>
<head>
  <title>PataRide</title>
  <link   rel="stylesheet" type="text/css"  href="assets/css/normalize.css">
  <link   rel="stylesheet" type="text/css" href="assets/css/home.css">
  <link   rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link   rel="icon" href="assets/images/favicon(4).ico" type="image/x-icon">

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500' rel='stylesheet' type='text/css'>
 <link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>

<!-- Bootstrap -->
</head>
<body>   
         

  <header>
   <div class="logo" >
    <img src="assets/images/logo.png" >
   </div>
   

   <div id="navigation">

      <a href="#container"> <button type="button">ABOUT</button> </a>
      <a href="#about"> <button type="button">DOWNLOAD APP</button> </a>
      <a href="#keepintouch"> <button type="button">KEEP IN TOUCH</button> </a>

    </div>

    
  </header>

<div id="container">
   <div id="slider">

      <div id="tagline">
        <h2>DIAL *127#. CONNECT. GET A RIDE.</h2>
      </div>
      <div id="ussd"> <img src="assets/images/phoney.png">

      </div>

    </div>
          

      <div id="about" >   
                       
          <div id="panel1">
            <img src="assets/images/appgroup1.png" height="580" width="650">
          </div>

          <div id="panel2">

             
             <h1>Easy to use PataRide application</h1>
             <h3>Save time, be on the move</h3>
                
             <p>The PataRide app is easy to access and use. Download it from the google play store, fill in your name, email address and a passsword within the fields.You will then have access to your account as a member of PataRide. </p>
                <br>

            <span>
               <a href="https://play.google.com/store/apps/new"><img id="gog" src="assets/images/googleplay.png" height="50" width="140"></a>
            </span>

          </div>


      </div>

          <div id="app">

                <div id="app1">
                  <img src="assets/images/phone-dumb.png" height="600" width="650">
                </div>

               <div id="app2">
                 <h2> Easily connect with motorcyclists </h2>
                 After loging in, enter your pick-location and destination. On the map screen, you will get to see your current location and the available cyclists around your area.
                 A screen will appear with the amount of money required to be paid through M-pesa. A motorcyclists is sent your way within and you can enjoy your ride.
               </div>
          </div>

               <div id="mission">

                <div class="mission">
                      <h2>Mission</h2>
                      To enable boda boda customers find an easier and safer way to <br> connect with the cyclists.</div>

                  <div class="vision">

                    <h2>Vision</h2>
                    To enhance reliability, safety and good motorcycle transport.
                  </div>
                </div>


            <div id="keepintouch">
           
              <div class="map">
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2409.8955916166788!2d36.7886879483737!3d-1.2991609990477915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMcKwMTcnNTcuMCJTIDM2wrA0NycyNy4yIkU!5e1!3m2!1sen!2ske!4v1444739151872" width="580" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
                 
      <div id="form">
 
        {!! Form::open(array('route' => 'home_store', 'method'=>'post','class' => 'form')) !!}
        <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
             
            <div class="name">
             {!! Form::label('Name:') !!}
             {!! Form::text('name', null, 
              array('required', 
              'class'=>'form-control', 
              'placeholder'=>'your name')) !!}
            </div>

           <div class="email">
             {!! Form::label('E-mail:') !!}
             {!! Form::text('email', null, 
              array('required', 
              'class'=>'form-control', 
              'placeholder'=>'e-mail address')) !!}
           </div>

            <div class="message">
             {!! Form::label('Message:') !!}
             {!! Form::textarea('message', null, 
              array('required', 
              'class'=>'form-control', 
              'placeholder'=>'message')) !!}
            </div>

            <div class="submit">
             {!! Form::submit('Contact Us', 
              array('class'=>'btn btn-primary')) !!}
            </div>
              <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
              @if(Session::has('message'))
              <div class="alert alert-info">
                {{Session::get('message')}}
              </div>
               @endif
        {!! Form::close() !!}

          
      </div>
         <!--end of comment form  -->

              

        <br clear="all"> 


        <div id="icons">
             <a href="https://www.facebook.com/"><i class="fa fa-facebook-square fa-2x"></i></a>
             <a href="https://twitter.com/"><i class="fa fa-twitter-square fa-2x"></i></a>
             <a href="https://www.pinterest.com/"><i class="fa fa-pinterest-square fa-2x"></i></a>

        </div>

        </div>
</div>

        <footer>

           <p> Privacy and policy
           | All rights reserved | copyright2015 </p>
        </footer>
   
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
       <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/bootstrap.min.js"></script>  

   
                  
</body>
</htmL>
  

