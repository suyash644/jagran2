<!DOCTYPE html>
<html lang="en">
<head>
  <title>Jagran Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css" rel="stylesheet">
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    .carousel-inner img {
      width: 100%; /* Set width to 100% */
      min-height: 200px;
    }
      .well {
      height:100%;
    
   }
  .col-sm-2{margin-top:60px;}
      
      .slide{
          overflow-y:hidden;
          transition-property: all;
          transition-duration: .5s;
          transition-timing-function: cubic-bezier(0,1,0.5,1);
      }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
      .carousel-caption {
        display: none; 
      }
    }
  
  #try{
  background-color: #F0F8FF;
  width:200px;
  height:200px;
  border-radius:100px;
  display: inline-block;
   border:solid;
   position: relative;
   text-align: center;
   margin-top:60px;
   margin-left:50px;


}
.sub{
   heigbht:80px; width:80px; float:left;
margin-top:50px; margin-left:12px;
 
}



.sub::after {
  content: " ";
  position: absolute;
  display: block;
  background-color: #696969;
  height: 5px;
  margin-top: 60px;
  top: 18%;
  left: 0px;
  right: 0px;
  z-index: 9;
}
.sub::before {
  content: " ";
  position: absolute;
  display: block;
  background-color: #696969;
  width: 5px;
  margin-left: 130px;
  left: -16%;
  top: 0px;
  bottom: 0px;
  z-index: 9;
}

  </style>
    <script>
   
   $(document).ready(function(){
     
     $("#myModal").modal();
    });
</script>
</head>
<body>


<?php include('Public_Header.php'); ?>
    
      <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" >
    
      <!-- Modal content-->
      <div class="modal-content" style="background-color: #ffffe6";>
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         <center> <h4 class="modal-title"><b><i><u>Are You Need Instant Help!!!</u></i></b></h4></center>
        </div>
        <div class="modal-body">
          
      <form action="<?= base_url('index.php/user/urgenthelp') ?>" method="post">
    <div class="form-group">
      <label for="email">Mobile Number</label>
      <input type="name" class="form-control" id="email" placeholder="Enter Mobile Number" name="monumber">
    </div>
   <center> <button type="submit" class="btn btn-success" name="urgent">Submit</button></center>
  </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div> </div>
      
    </div>
  </div>
  
</div>


<div class="container" style="background-color:  #ffffcc">
<div class="row">
  <div class="col-sm-8">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        
          
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="assets/photos/k5.jpg" alt="Image">
          <div class="carousel-caption">
            <h4>Shiksha</h4>
              <p></p>
          </div>      
        </div>

        <div class="item">
          <img src="assets/photos/k2.png" alt="Image">
          <div class="carousel-caption">
            <h4>Shiksha</h4>
            <p></p>
          </div>      
        </div>
    
          <div class="item">
          <img src="assets/photos/k17.jpg" alt="Image">
          <div class="carousel-caption">
            <h4>Work</h4>
            <p></p>
          </div>      
        </div>
    
        
        <div class="item">
          <img src="assets/photos/k6.jpg" alt="Image">
          <div class="carousel-caption">
            <h4>Work</h4>
            <p></p>
          </div>      
        </div>
    
        </div>
        
        
        
        
        

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="col-sm-4" style="height: 100% " >
  
  <div class="well" style="background-color:  #F5DEB3; height:370px;">
  <p>Come And Join Jagran Koshish</p>
  <div id="try">
<div id="wrap">
<div class="sub"><a href="<?= base_url('index.php/products') ?>">Shop</a></div>
 <div class="sub"><a href="#">Protection</a></div>
 <div class="sub"><a href="<?= base_url('index.php/user/education') ?>">Education</a></div>
 <div class="sub"><a href="#">Violence</a></div>
 </div>
 </div>
 </div>

       
  </div>
</div>
<hr>
</div>

<div class="container text-center" style="background-color: #ffe0cc; height:400px;">    
  <h3>What We Do</h3>
  <br>
  <div class="row">
    <div class="col-sm-2">
      <img src="assets/photos/k16.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Violence</p>
    </div>
    <div class="col-sm-2"> 
      <img src="assets/photos/w2.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Protectchild</p>    
    </div>
      
      <div class="col-sm-2"> 
      <img src="assets/photos/k9.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Help center</p>    
    </div>
      
      <div class="col-sm-2"> 
      <img src="assets/photos/k27.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Tracker Bracelet</p>    
    </div>
    
    
       <div class="slide" style="background-color: #ffcc99; height:320px; width:320px; margin-top:-40px;"><br>
           <center><h5><u><b>NEWS</b></u></h5></center>
  <marquee>  <ul>       
        <li><a href="#">Upcoming Events</a></li>
        <li><a href="#">Reports</a></li>
        <li><a href="#">Help Center</a></li>
        <li><a href="#">Feedback</a></li>
      </ul></marquee>
    <div>
    <div class="col-sm-8"> 
      <img src="assets/photos/g3.jpg" class="img-responsive" alt="Image" style="margin-top:5px; margin-left:50px; width:5000px;">
    </div>
    </div>
      </div>
  
  
  </div>
  <hr>
</div>

<div class="container text-center" style="background-color:#ffcce6">    
  <h3>Goal</h3>
  <br>
  <div class="row">
    <div class="col-sm-2">
      <img src="assets/photos/w20.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p></p>
    </div>
    <div class="col-sm-2"> 
      <img src="assets/photos/w3.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p></p>    
    </div>
    <div class="col-sm-2"> 
      <img src="assets/photos/w14.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p></p>
    </div>
    <div class="col-sm-2"> 
      <img src="assets/photos/a11.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p></p>
    </div> 
    <div class="col-sm-2"> 
      <img src="assets/photos/k21.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p></p>
    </div>     
    <div class="col-sm-2"> 
      <img src="assets/photos/w201.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p></p>
    </div> 
  </div>
</div><br>



<?php include('Public_Footer.php'); ?>
    
    </body>
    
</html>
