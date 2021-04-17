
<!DOCTYPE html>
<html>
<head>
    <title>Online Ticket Reservation System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <style>
        .navbar-nav li a{
            font-size:20px;
        }
        .navbar-nav li a:hover{
            background: green;
        }
    </style>
     <style type="text/css">
    a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #red;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #4CAF50;
  color: white;
}

.round {
  border-radius: 100%;
}

  </style>
  <style type="text/css">
  .card{
  cursor: pointer;
 
}
.front,.back{
  width: 100%;
  height: 100%;
  overflow: hidden;
  backface-visibility: hidden;
  position: absolute;
  transition: transform .6s linear;
}
.front img{
  height: 60%;
    width: 100%;
}

.front{
  transform: perspective(600px) rotateY(0deg);
}
.front-content{
  color: #2c3e50;
  text-align: center;
  width: 100%;
}
.back{
  background: #f1f1f1;
  transform: perspective(600px) rotateY(180deg);
}
.back-content{
  color: #2c3e50;
  text-align: center;
  width: 100%;
}
.sm{
  margin: 20px 0;
}
.sm a{
  display: inline-flex;
  width: 40px;
  height: 40px;
  justify-content: center;
  align-items: center;
  color: #2c3e50;
  font-size: 18px;
  transition: 0.4s;
  border-radius: 50%
}
.sm a:hover{
  background: #2c3e50;
  color: white;
}
.card:hover > .front{
  transform: perspective(600px) rotateY(-180deg);
}
.card:hover > .back{
  transform: perspective(600px) rotateY(0deg);
}

</style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand offset-md-2" href="#"><h1>Logo</h1></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav offset-md-5">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">About US</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Query</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Ticket Cancel</a>
        </li>
      </ul>
    
    </div>
  </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card" style=" background:#DFFBFD">
            <div class="card-body">
<div class="block col-md-6">
    <form name="bussearch" id="bussearch" method="get" action="{{route('search')}}"
        onsubmit="return validateBusForm(this)">
        @csrf
        <ul class="list-inline">
            <div class="form-group hide" style="font-size:21px;color:#000;">
                <!-- Eid Change : Added hide class -->
          
            </div>
            <div class="form-group">
                <label for="dest_from">From</label>
                <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>


                        <select id="leaving_from" name = "leaving_from" class="form-control" placeholder="Enter City" maxlength="15" value="" autocomplete="off" required >
     <option value="select"><b>Select city</b></option>
     <option value="Dhaka">Dhaka</option>
     <option value="Chittagong">Chittagong</option>
     <option value="Cox's Bazar">Cox's Bazar</option>
     <option value="Sylhet">Sylhet</option>
     <option value="Teknaf">Teknaf</option>
     <option value="Khulna">Khulna</option>
     <option value="Khagrachari">Khagrachari</option>
   </select>
            </div>
            <div class="form-group">
                <label for="dest_to">To</label>
                <span role="status" aria-live="polite" class="ui-helper-hidden-accessible">

                     <select  id="going_to" name = "going_to" class="form-control"  placeholder="Enter City"
                    maxlength="15" value="" autocomplete="off" required >
     <option value="select"><b>Select city</b></option>
     <option value="Dhaka">Dhaka</option>
     <option value="Chittagong">Chittagong</option>
     <option value="Cox's Bazar">Cox's Bazar</option>
     <option value="Sylhet">Sylhet</option>
     <option value="Teknaf">Teknaf</option>
     <option value="Khulna">Khulna</option>
     <option value="Khagrachari">Khagrachari</option>
   </select>
            </div>

            <div class="mb-3">
    <label for="Date" class="form-label">DATE OF JOURNEY</label>
    <input type="date" class="form-control" id="date" name="date" required>
  </div>
           
            <div class="row" style="margin-top:50px;">
                <!-- Eid Change : margin top made 50px from 25px. -->
                <div class="col-md-12">
                    <button type="submit" class="btn btn-block" style="background: #119646;"><span
                            class="glyphicon glyphicon-search"></span>
                        Search Buses </button>
                </div>
          
            </div>

            <!--bKas Modal  -->



        </ul>
    </form>
</div>
 </div>
</div>
        </div>

        <div class="col-md-6">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="https://www.nmandco.com/wp-content/uploads/2015/10/banner4.jpg" class="d-block w-100" alt="...">
     
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://www.kstdc.co/wp-content/uploads/2019/09/bus.jpg" class="d-block w-100" alt="...">
    
    </div>
    <div class="carousel-item">
      <img src="https://www.nmandco.com/wp-content/uploads/2015/10/banner4.jpg" class="d-block w-100" alt="...">
     
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>
        </div>
    </div>
</div><br><br>
<div class="container padding">
    <div class="row padding text-center">
      <div class="col-12">
      <h1 style="color:#00708A; font-weight: bold;">WELCOME TO GREENLINE<ul></h1>

       </div>
       <div class="col-12">
         <p style="font-family:arial;" class="lead">
        Green Line Paribahan is apparently a family owned transport company specializing in transportation of passenger bus services since 1990. From a humble beginning of local services, our transport system encompasses all reachable areas of Bangladesh and also beyond the border, extending our reach to Kolkata in India.

We worked hard and honest, we put our vision forward and explored ways and means to continuously improve passenger comfort, and as a result, we were able to introduce the 1st ever Air- Conditioned bus services in Bangladesh. We take pride in mentioning that our fleet of buses includes the most luxurious models of VOLVO and SCANIA Imported from Europe, which provide the ultimate in passenger comfort and safety.
         </p>
       </div>
      </div>
    </div>

    <div class="container padding">
           <div class="row">
       
      
        <div class="col-md-3">
           <div style=" width: 300px; height: 400px;" class="card middle">
      <div class="front">
        <img  style="width:150px;height:150px; margin-left:70px; margin-top: 40px;" class="avatar rounded-circle" src="https://previews.123rf.com/images/alexwhite/alexwhite1804/alexwhite180400315/99787816-about-us-flat-design-orange-round-vector-icon-in-eps-10.jpg" alt="Bologna">
         <h4 style="text-align: center;" class="card-title">ABOUT US</h4>
         
          <p  style="text-align: center;"  class="card-text">Find Details About Our SErvice </p>
       
        
         
      </div>
       <div class="back">
        <div class="back-content middle">
          <h6>12 Years’ Experience in  and remote Sensing (RS) Application in Disaster Risk and Hazard Mapping, Base Database Preparation, Transport Planning, Landuse Mapping,</h6>
         
        </div>
      </div>
     
    </div>
      </div>
             
              <div class="col-md-3">
           <div style=" width: 300px; height: 400px;"  class="card middle">
      <div class="front">
         <img  style="width:150px;height:150px; margin-left:70px; margin-top: 40px;" class="avatar rounded-circle" src="https://previews.123rf.com/images/alexwhite/alexwhite1804/alexwhite180400315/99787816-about-us-flat-design-orange-round-vector-icon-in-eps-10.jpg" alt="Bologna">
         <h4 style="text-align: center;" class="card-title">ABOUT US</h4>
         
          <p  style="text-align: center;"  class="card-text">Find Details About Our SErvice </p>
       
        
         
      </div>
       <div class="back">
        <div class="back-content middle">
          <h6>12 Years’ Experience in GIS and remote Sensing (RS) Application in Disaster Risk and Hazard Mapping, Base Database Preparation, Transport Planning, Landuse Mapping,</h6>
         
        </div>
      </div>
     
    </div>
      </div>
           <div class="col-md-3">
           <div style=" width: 300px; height: 400px;"  class="card middle">
      <div class="front">
       <img  style="width:150px;height:150px; margin-left:70px; margin-top: 40px;" class="avatar rounded-circle" src="https://previews.123rf.com/images/alexwhite/alexwhite1804/alexwhite180400315/99787816-about-us-flat-design-orange-round-vector-icon-in-eps-10.jpg" alt="Bologna">
         <h4 style="text-align: center;" class="card-title">ABOUT US</h4>
         
          <p  style="text-align: center;"  class="card-text">Find Details About Our SErvice </p>
     
         
      </div>
       <div class="back">
        <div class="back-content middle">
          <h6>12 Years’ Experience in GIS and remote Sensing (RS) Application in Disaster Risk and Hazard Mapping, Base Database Preparation, Transport Planning, Landuse Mapping,</h6>
         
        </div>
      </div>
     
    </div>
      </div>    
           <div class="col-md-3">
           <div style=" width: 300px; height: 400px;"  class="card middle">
      <div class="front">
      <img  style="width:150px;height:150px; margin-left:70px; margin-top: 40px;" class="avatar rounded-circle" src="https://previews.123rf.com/images/alexwhite/alexwhite1804/alexwhite180400315/99787816-about-us-flat-design-orange-round-vector-icon-in-eps-10.jpg" alt="Bologna">
         <h4 style="text-align: center;" class="card-title">ABOUT US</h4>
         
          <p  style="text-align: center;"  class="card-text">Find Details About Our SErvice </p>
       
     
         
      </div>
       <div class="back">
        <div class="back-content middle">
          <h6>12 Years’ Experience in GIS and remote Sensing (RS) Application in Disaster Risk and Hazard Mapping, Base Database Preparation, Transport Planning, Landuse Mapping,</h6>
         
        </div>
      </div>
     
    </div>
  
      </div>
   
    </div>

    </div><br><br>


    <div class="container-fluid padding">
  <div class="row padding">
     <div class="col-12 offset-md-1">
   <h4 style="color:#00708A; font-weight: bold;">Available Bus Routes</h4> <br>
       </div>

    
        <div class="col-md-3 col-sm-6 col-xs-12 offset-md-1">
            <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>Dhaka to Chittagong</p>
            <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>Dhaka to Chittagong</p>
            <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>Dhaka to Chittagong</p>
            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>Dhaka to Chittagong</p>
            <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>Dhaka to Chittagong</p>
            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>Dhaka to Chittagong</p>
          
        
       </div>
         <div class="col-md-3 col-sm-6 col-xs-12 offset-md-1">
            <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>Dhaka to Chittagong</p>
            <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>Dhaka to Chittagong</p>
            <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>Dhaka to Chittagong</p>
            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>Dhaka to Chittagong</p>
            <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>Dhaka to Chittagong</p>
            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>Dhaka to Chittagong</p>
          
        
       </div>
        <div class="col-md-3 col-sm-6 col-xs-12 offset-md-1">
            <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>Dhaka to Chittagong</p>
            <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>Dhaka to Chittagong</p>
            <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>Dhaka to Chittagong</p>
            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>Dhaka to Chittagong</p>
            <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>Dhaka to Chittagong</p>
            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>Dhaka to Chittagong</p>
          
        
       </div>
  </div>
</div>

  <script>
        function serach_data(value,data) {
            $.ajax({
                url: '/searchProject',
                data: {value:value,data:data},
                type: 'get',
                success: function (data) {
                    $("#searchData").html(data);
                }
            });

        }
    </script>
</body>
</html>
