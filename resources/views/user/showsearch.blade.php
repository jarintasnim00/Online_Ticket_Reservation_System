
<!DOCTYPE html>
<html>
<head>
    <title>Online Ticket Reservation System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
     <script src="{{ asset('js/jquery-1.12.0.min.js') }}"></script>

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
<nav  class="navbar navbar-expand-lg navbar-light">
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
          <a class="nav-link active" aria-current="page" href="#">Ticket Cancle</a>
        </li>
      </ul>
    
    </div>
  </div>
</nav>
<div style="background: #34AD00; padding: 20px; color: white;" class="container-fluid padding">
  <div class="row">
    <div class="col-md-4 offset-md-2">Date of the Trip: &nbsp{{ date('Y-m-d') }}</div>
   
     <div class="col-md-6">Buses from Chittagong to Cox's Bazar</div>
    
  </div>
</div>

<br><br>
 
<div class="container">
<div class="table-responsive">
    <table class="table" id="">
        <thead>
            <tr>
                <th>Operator</th>
        <th>Departure Time </th>
        <th>Seats Available</th>
        <th>Fare</th>
            </tr>
        </thead>
        <tbody id="">
          @for ($index = 0; $index < 1; $index++)
         <!-- @foreach ($result as $detail) -->
            <tr>
              <td>
                        <ul>
                                   <h4 style="color: #605CA8;"><b> {{$result[$index]->name}}</b></h4>
                                 
                                    {{$result[$index]->bustyp->bustypename}}<br>
                                        {{$result[$index]->description}}
                                    

                                </ul>
                                </td>
                <td class="tbl_col3 border-fix-seat" data-title="Dep. Time">
                                {{$result[$index]->departure_time}} <br>

                            </td>
                            <td class="tbl_col3 border-fix-seat" id="bus-seat-capacity-greenline-{{$index}}" data-title="Dep. Time">
                                {{$result[$index]->seatcapacity}} <br>

                            </td>
                            <td class="tbl_col4 border-fix-seat" data-title="Arr. Time">
                                {{$result[$index]->fare}} 

                             <!--<p  class="seats-button"><button class="btn btn-primary" type="submit" trip_id="trip_id"
                                            triproute="" operatorid=""
                                            tocity=""
                                            class="btn btn-default btn-sm btnSubmit seatsLayout" data-toggle="modal"
                                            data-target="#bus_seat">View
                                            Seats</button>
                                    </p>-->

                                      <p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
   view seat
  </a>
</p> 
<div class="collapse" id="collapseExample">

  <div class="card card-body">

 
            
            <div class=" row">
                <div class="col-md-6">
                    <h5 class="modal-title" id="choose seat">Choose your seat(s)</h5>
                    <table class="border border-dark p-2">
                        @php
                        $seatRow = ['A','B','C','D','E','F','G','H','I','J'];
                        @endphp
                        <tr style="height: 30px !important;">
                            <td style="width: 50px; margin:5px">
                                <div class="text-center p-10" style="display: none; background: #d3d3d3"></div>
                            </td>
                            <td style="width: 50px; margin:5px;">
                                <div class="text-center p-10" style="display: none; background: #cc5560"></div>
                            </td>
                            <td style="width: 50px; margin:5px;">
                                <div class="text-center p-10" style="display: none"></div>
                            </td>
                            <td style="width: 50px; margin:5px">
                                <div class="text-center p-10" style="display: none; background: #54c581"></div>
                            </td>
                            <td style="width: 50px; margin:5px">
                                <div class="text-center p-10 mb-3">
                                    <img src="{{asset('img/icon_steering.png')}}" width="50%" alt="">
                                </div>
                            </td>
                        </tr>
                        @for ($i = 0; $i < 10; $i++) <tr style="height: 30px !important">
                            @foreach ($result as $detail)
                           
                            @php
                            $arr_seat = $seatRow[$i].'1';
                            
                            $data = $detail->findTicket($detail->trip_id,strval($arr_seat));
                          
                            @endphp

                             <td style="width: 50px; margin:5px" data-trip="{{$detail}}" data-seat="{{$data}}">
                                <button class="text-center"

                                    id="seat-pos-{{$arr_seat}}"  title="{{$arr_seat}}" bus-id="{{$index}}" fare="{{$result[$index]->fare}}" data-toggle="tooltip"  style="width:40px;background-color: white" onclick="chooseSeat(this)">
                                    {{$arr_seat}}
                                </button>
                            </td>
                            <td style="width: 50px; margin:5px;"
                                data-seat="{{$detail->findTicket($detail->trip_id,$seatRow[$i].'2')}}">
                                <div>
                                  <button class="text-center seat" id="seat-pos-{{$seatRow[$i].'2'}}" title="{{$seatRow[$i].'2'}}" bus-id="{{$index}}" fare="{{$result[$index]->fare}}" data-toggle="tooltip"
                                    onclick="chooseSeat(this)" style="background-color:white;width:40px"  >{{$seatRow[$i].'2'}}</button>
                                </div>
                                
                            </td>
                            <td style=" width: 50px; margin:5px;">
                                <div class="text-center p-10" style="display: none">{{$seatRow[$i].'1'}}</div>
                            </td>
                            <td style="width: 50px; margin:5px"
                                data-seat="{{$detail->findTicket($detail->trip_id,$seatRow[$i].'3')}}">
                                <button class="text-center seat"  id="seat-pos-{{$seatRow[$i].'3'}}" title="{{$seatRow[$i].'3'}}" bus-id="{{$index}}" fare="{{$result[$index]->fare}}" data-toggle="tooltip" style="width:40px;background-color: white"
                                    onclick="chooseSeat(this)">{{$seatRow[$i].'3'}}</button>
                            </td>
                            <td style="width: 50px; margin:5px"
                                data-seat="{{$detail->findTicket($detail->trip_id,$seatRow[$i].'4')}}">

                                <button  class="text-center  seat" id="seat-pos-{{$seatRow[$i].'4'}}"  title="{{$seatRow[$i].'4'}}" bus-id="{{$index}}" fare="{{$result[$index]->fare}}" data-toggle="tooltip"  style="width:40px;background: white"
                                    onclick="chooseSeat(this)">{{$seatRow[$i].'4'}}</button>
                            </td>

                            </tr>
                            @endforeach
                            @endfor
                    </table>
                 
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-3">
                            <li style="background: #d3d3d3;text-align: center;">
                                <img src="{{ asset('img/seat.png') }}" width="54%" alt="seat.png">
                            </li>
                            <li>Available Seats</li>
                        </div>
                        <div class="col-sm-3">
                            <li style="background: #cc5560;text-align: center;">
                                <img src="{{ asset('img/seat.png') }}" width="54%" alt="seat.png">
                            </li>
                            <li>Booked Seats</li>
                        </div>
                        <div class="col-sm-3">
                            <li style="background: #54c581;text-align: center;">
                                <img src="{{ asset('img/seat.png') }}" width="54%" alt="seat.png">
                            </li>
                            <li>Selected Seats</li>
                        </div>
                         <div class="col-sm-3">
                            <li style="background: #fcba03;text-align: center;">
                                <img src="{{ asset('img/seat.png') }}" width="54%" alt="seat.png">
                            </li>
                            <li>Reserved Seats</li>
                        </div>
                    </div>
                    <div class="clearfix">
                        <div id="tbl_price_details">
                            <table class="table">
                                <thead>
                                    <th>Seats</th>
                                    <th>Fare</th>
                                    <th>Class</th>
                                </thead>
                                <tbody>
                                    <tr >
                                        <td colspan="3">
                                            <div class="t_data">
                                                <table id="tbl_seat_list">
                                                    <tbody>
                                
                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="tickets_total" class="t_total">
                            <p><b>Total: 0</b></p>
                        </div>
                        <form id="confirmbooking" method="post" action="/booking/bus/confirm">
                            @csrf
                            <div class="form-group">
                                <label for="bpt">Choose Boarding Point <span>*</span></label>

                               
                                <select id="boardingpoint"location name="boardingpoint" class="form-control">
                                    <option value="0"> -- Boarding points -- </option>
                                    <option value="Mohakhali Bus Point (10:30 PM)">Mohakhali Bus Point (10:30 PM)
                                    </option>
                                </select>
                               
                            </div>
                            <input type="hidden" id="searchid" name="searchid">
                 <a href="/booking" onclick="" class="btn btn-primary btn-sm"
                                style="margin-top:20px;">Continue</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <p id="tripAlert" class="" style="color: #ccc; margin-top:15px; text-align:center;"><i
                        class="fa fa-exclamation-triangle"></i> <i>Due to traffic condition, the trip may get
                        canceled.</i> </p>
                <button type="button" class="btn btn-secondary btnClose" data-dismiss="modal">Close</button>
               
            </div>
            <!-- For test Form -->
<div class="container">
  <div class="row">
    <div class="col-md-6">
      
 <form action="" method="post">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Bus_id</label>
    <input type="text" class="form-control" id="businfo_id" name="businfo_id" >
  </div>
    <div class="mb-3">
    <label for="" class="form-label">Date</label>
    <input type="date" class="form-control" id="date" name="date" >
  </div>
    <div class="mb-3">
    <label for="" class="form-label">Time</label>
    <input type="text" class="form-control" id="time" name="time" >
  </div>
    <div class="mb-3">
    <label for="" class="form-label">Status</label>
    <input type="text" class="form-control" id="status" name="status" >
  </div>
  
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
<!-- End test Form -->
        
              </div>
                  </div>                               
                        </td>                    
                  </tr>
        <!-- @endforeach -->
        @endfor
        </tbody>

    </table>

</div>
</div>







<script type="text/javascript">

  var green_color = 'rgb(0, 128, 0)'
  var white_color = 'rgb(255, 255, 255)'
  function chooseSeat(seatObj) {
    console.log(seatObj);

        var $seatObj = $(seatObj); 
         
        
        console.log($seatObj.css("background-color"));
        var sData = $seatObj[0].attributes[2].value;
        if(green_color == $seatObj.css("background-color")){
            $seatObj.css("background-color", "white");
             $('#result-'+sData).remove();
             doTicketsTotal(100);
            var seat = 40-parseInt($('#tbl_seat_list tr').length);

            $('td#bus-seat-capacity-greenline-'+$seatObj[0].attributes[3].value).text(seat);

        }else{

           $seatObj.css("background-color", "green");
           
          

          $seatObj.attr("pointer-events", "none" );
          
          


          var $seatTableBody = $('#tbl_price_details').find('table#tbl_seat_list').find('tbody:eq(0)');
          
          console.log(sData);
          
          var seat_name = 'A';
          var tr = '<tr id="' + 'result-'+sData + '"><td width="115">' + sData + '</td><td class="seat_price" width="100">' + $seatObj[0].attributes[4].value + '</td><td>' + "Economy" + '<input type="hidden" name="'+ sData +'" value="'  + sData + '"/><input type="hidden" name="triproute[]" value="' + 1 + '"/>'+ '<input type="hidden" name="trip_id" value="'  + 1 + '" /></td></tr>';
          $seatTableBody.append(tr);
          doTicketsTotal(100);
          // var seat = parseInt($('td#bus-seat-capacity-greenline-'+$seatObj[0].attributes[3].value).text());
          var seat = 40 - parseInt($('#tbl_seat_list tr').length);

          $('td#bus-seat-capacity-greenline-'+$seatObj[0].attributes[3].value).text(seat);
          console.log($('td#bus-seat-capacity-greenline-'+$seatObj[0].attributes[3].value).text());
        }
        
        
    }

    function doTicketsTotal(discountAmount)
    
    {
        var ticketsTotal = 0;
        $('.seat_price').each(function(index){
            
            per_ticket_price = parseFloat($(this).text());
            ticketsTotal += per_ticket_price

            console.log($(this).text())
            console.log(ticketsTotal)

            
        });

        $('div#tickets_total').html('<p><b>Total: ' + ticketsTotal + '</b></p>');
         
        // var $seatTableBody = $('#tbl_price_details').find('table#tbl_seat_list').find('tbody:eq(0)');
        // var $seatTableTr = $seatTableBody.find('tr');
        // $.each($seatTableTr, function(index, trObj) {
        //     ticketsTotal += parseFloat($(trObj).find('td:eq(1)').text()) - discountAmount;
        // });
        // $('div#tickets_total').html('<p><b>Total: ' + ticketsTotal + '</b></p>');
    }

      /* chooseSeat(seatObj) {
        console.log(seatObj);
        $('#seatError').addClass('hidden');
        var $seatObj = $(seatObj);
        var sData = $seatObj.parent().data('seat');
        var tripData = $seatObj.parent().data('trip');
        var $seatTableBody = $('#tbl_price_details').find('table#tbl_seat_list').find('tbody:eq(0)');
        var discountAmount = 0;
        // console.log(sData[0]);
        if($seatObj.hasClass('selected')) {
            $seatObj.removeClass("selected");
            $seatObj.addClass('seat');
            $('#'+sData[0].ticket_id).remove();
            $.ajax({
                url: '/booking/bus/seat/release',
                type: 'POST',
                data: {"ticketid":sData[0].ticket_id,
                    "routeid":tripData.trip_route_id,
                    "searchid":$('#www-search-id').val()}
            }).done(function(data) {
            });
            var ticketPrice = 0;
            var discountValue = 0;
            var discountType = 1;
            doTicketsTotal(discountValue);
        }else {
            maxTickets = 3;
            if ($seatTableBody.find('tr').length<maxTickets) {
                $seatObj.addClass('selected');
                $seatObj.removeClass('seat');
                var ticketPrice = 0;
                var discountTicketPrice = 0;
                var ticketPriceString = '';
                var discountValue = 0;
                var discountType = 1;
                //ticketPrice = tripData.economy_class_fare -discountValue;
                if(0>0) {
                    ticketPriceString = '<strike style="color:red; font-size: 10px;">' + ticketPrice + '</strike> ' + discountTicketPrice + '.00';
                }else {
                    ticketPriceString = ticketPrice;
                }
                var tr = '<tr id="' + sData[0].ticket_id + '"><td width="115">' + sData[0].seat_number + '</td><td width="100">' + ticketPriceString + '</td><td>' + "Economy" + '<input type="hidden" name="'+sData[0].seat_number +'" value="'  + sData[0].ticket_id + '"/><input type="hidden" name="triproute[]" value="' + tripData.trip_route_id + '"/>'+ '<input type="hidden" name="trip_id" value="'  + sData[0].trip_id + '" /></td></tr>';
                $seatTableBody.append(tr);

                if($seatObj.hasClass("booked")) {
                    $seatObj.removeClass("selected");
                    // alert('#' + sData.ticket_id);
                    $("#" + sData[0].ticket_id).remove();
                    $("#seatError").text(
                    "Sorry! this ticket is not available now."
                    );
                    $("#seatError").removeClass("hidden");
                    $seatObj.addClass("booked");
                    $seatObj.removeAttr("onclick");
                }
                doTicketsTotal(discountValue);
            }else {
                $('#seatError').html('<div class="error-partial col-lg-12" style="padding:5px 20px;margin-top:0px;"><i class="fa fa-exclamation-triangle" style="font-size:20px;"></i><div class="error-message-div" style="padding:2px;">Maximum of ' + maxTickets + ' seat(s) can be booked at-a-time.</div></div>');
                $('#seatError').removeClass('hidden');
            }
        }
    }*/


</script>



</body>
</html>

