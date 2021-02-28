<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Online Ticket Reservation System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">

    </script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="{{ asset('js/jquery-1.12.0.min.js') }}"></script>

    <style>
        .navbar-nav li a {
            font-size: 20px;
        }

        .navbar-nav li a:hover {
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
            background-color: red;
            color: black;
        }

        .confirmed{
            background-color:#cc5560;
        }
        .reserved{
            background-color:#fcba03;
        }
        .selected{
            background-color:#54c581;
        }
        .available{
            background-color:#d3d3d3;
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
        .card {
            cursor: pointer;

        }

        .front,
        .back {
            width: 100%;
            height: 100%;
            overflow: hidden;
            backface-visibility: hidden;
            position: absolute;
            transition: transform .6s linear;
        }

        .front img {
            height: 60%;
            width: 100%;
        }

        .front {
            transform: perspective(600px) rotateY(0deg);
        }

        .front-content {
            color: #2c3e50;
            text-align: center;
            width: 100%;
        }

        .back {
            background: #f1f1f1;
            transform: perspective(600px) rotateY(180deg);
        }

        .back-content {
            color: #2c3e50;
            text-align: center;
            width: 100%;
        }

        .sm {
            margin: 20px 0;
        }

        .sm a {
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

        .sm a:hover {
            background: #2c3e50;
            color: white;
        }

        .card:hover>.front {
            transform: perspective(600px) rotateY(-180deg);
        }

        .card:hover>.back {
            transform: perspective(600px) rotateY(0deg);
        }

    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand offset-md-2" href="#">
                <h1>Logo</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
                    {{-- @for ($index = 0; $index < count($result); $index++)  --}}
                    @foreach ($result as $index=>$detailnew)

                    <?php 
                         $detail = $detailnew['bus_info']; 
                         $booked_list = $detailnew['booked_list']; 
                        
                         $available_seat = $detail->seatcapacity - $booked_list->count()

                        //  dd($detail->name);
                    ?>
                    <tr>
                        <td>
                            <ul>

                                <h4 style="color: #605CA8;"><b> {{$detail->name}}</b></h4>

                                {{$detail->bustyp->bustypename}}<br>
                                {{$detail->description}}


                            </ul>
                        </td>
                        <td class="tbl_col3 border-fix-seat" data-title="Dep. Time">
                            {{$detail->departure_time}} <br>

                        </td>
                        <td class="tbl_col3 border-fix-seat" id="bus-seat-capacity-h-greenline-{{$detail->id}}" data-title="Seat-Capacity-" hidden>

                            {{$available_seat}}
                            

                        </td>
                        <td class="tbl_col3 border-fix-seat" id="bus-seat-capacity-greenline-{{$detail->id}}" data-title="Seat-Capacity">

                            {{$available_seat}}
                            

                        </td>
                        <td class="tbl_col3 border-fix-seat" id="bus-seat-fare-greenline-{{$detail->id}}"
                            data-title="Fare">
                            {{$detail->fare}} <br>

                        </td>
                        <td class="tbl_col4 border-fix-seat" data-title="Arr. Time">
                            


                            <p>
                                <a class="btn btn-primary" data-bs-toggle="collapse"
                                    href="#collapseExample-{{$detail->id}}" role="button" aria-expanded="false"
                                    aria-controls="collapseExample">
                                    view seat
                                </a>
                            </p>
                            <div class="collapse" id="collapseExample-{{$detail->id}}">

                                <div class="card card-body">



                                    <div class=" row">
                                        <div class="col-md-6">
                                            
                                            <div class="alert alert-danger alert-dismissible d-none">
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                <strong>Danger!</strong> 
                                                <p id="alert-message-box-{{$detail->id}}"></p>
                                            </div>

                                        
                                            <h5 class="modal-title" id="choose seat">Choose your seat(s)</h5>

                                            <table class="border border-dark p-2">
                                                @php
                                                $seatRow = ['A','B','C','D','E','F','G','H','I','J'];
                                                @endphp
                                                <tr style="height: 30px !important;">
                                                    <td style="width: 50px; margin:5px">
                                                        <div class="text-center p-10"
                                                            style="display: none; background: #d3d3d3"></div>
                                                    </td>
                                                    <td style="width: 50px; margin:5px;">
                                                        <div class="text-center p-10"
                                                            style="display: none; background: #cc5560"></div>
                                                    </td>
                                                    <td style="width: 50px; margin:5px;">
                                                        <div class="text-center p-10" style="display: none"></div>
                                                    </td>
                                                    <td style="width: 50px; margin:5px">
                                                        <div class="text-center p-10"
                                                            style="display: none; background: #54c581"></div>
                                                    </td>
                                                    <td style="width: 50px; margin:5px">
                                                        <div class="text-center p-10 mb-3">
                                                            <!-- <img src="{{asset('img/logo.png')}}" width="50%"
                                                                alt=""> -->
                                                                <i class="fa fa-lg fa-hdd-o" aria-hidden="true"></i>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @for ($i = 0; $i < 10; $i++) <tr style="height: 30px !important">
                                                    {{-- @foreach ($result as $detail) --}}

                                                    
                                                    @php
                                                    $arr_seat = $seatRow[$i].'1';
                                                    
                                                    $data = $detail->findTicket($detail->trip_id,strval($arr_seat));
                                                    $status = 'none';
                                                    foreach ($booked_list as $booked){
                                                            
                                                            if($booked->seat_name == $arr_seat){
                                                                $status = $booked->status;
                                                               
                                                            }

                                                    }
                                            

                                                    @endphp

                                                    <td style="width: 50px; margin:5px" data-trip="{{$detail}}"
                                                        data-seat="{{$data}}">
                                                        <button class="seat new-seat-{{$detail->id}} text-center {{$status == 'reserved' ? 'reserved' : ($status == 'confirmed' ? 'confirmed' : 'bg-white' ) }} " id="seat-pos-{{$arr_seat}}"
                                                            title="{{$arr_seat}}" bus_id="{{$detail->id}}"
                                                            fare="{{$detail->fare}}" data-toggle="tooltip" 
                                                            
                                                            style="width:40px;"
                                                            status={{$status}}
                                                            onclick="{{$status == 'reserved' || $status == 'confirmed' ? '' : 'chooseSeat(this)' }}" >
                                                       
                                                            {{$arr_seat}}
                                                            
                                                        </button>
                                                    </td>
                                                    @php
                                                    $arr_seat = $seatRow[$i].'2';
                                                    
                                                    $data = $detail->findTicket($detail->trip_id,strval($arr_seat));
                                                    $status = 'none';
                                                    foreach ($booked_list as $booked){
                                                            
                                                            if($booked->seat_name == $arr_seat){
                                                                $status = $booked->status;
                                                               
                                                            }

                                                    }
                                            

                                                    @endphp
                                                    <td style="width: 50px; margin:5px;"
                                                        data-seat="{{$detail->findTicket($detail->trip_id,$seatRow[$i].'2')}}">
                                                        <div>
                                                            <button class="seat new-seat-{{$detail->id}} text-center {{$status == 'reserved' ? 'reserved' : ($status == 'confirmed' ? 'confirmed' : 'bg-white' ) }} "
                                                                id="seat-pos-{{$seatRow[$i].'2'}}"
                                                                title="{{$seatRow[$i].'2'}}" bus_id="{{$detail->id}}"
                                                                fare="{{$detail->fare}}" data-toggle="tooltip"
                                                                status={{$status}}
                                                                onclick="{{$status == 'reserved' || $status == 'confirmed' ? '' : 'chooseSeat(this)' }}"
                                                                style="width:40px;">{{$seatRow[$i].'2'}}</button>
                                                        </div>

                                                    </td>
                                                    <td style=" width: 50px; margin:5px;">
                                                        <div class="text-center p-10" style="display: none">
                                                            {{$seatRow[$i].'1'}}</div>
                                                    </td>
                                                    @php
                                                    $arr_seat = $seatRow[$i].'3';
                                                    
                                                    $data = $detail->findTicket($detail->trip_id,strval($arr_seat));
                                                    $status = 'none';
                                                    foreach ($booked_list as $booked){
                                                            
                                                            if($booked->seat_name == $arr_seat){
                                                                $status = $booked->status;
                                                               
                                                            }

                                                    }
                                            

                                                    @endphp
                                                    <td style="width: 50px; margin:5px"
                                                        data-seat="{{$detail->findTicket($detail->trip_id,$seatRow[$i].'3')}}">
                                                        <button class="seat new-seat-{{$detail->id}} text-center {{$status == 'reserved' ? 'reserved' : ($status == 'confirmed' ? 'confirmed' : 'bg-white' ) }} "
                                                            id="seat-pos-{{$seatRow[$i].'3'}}"
                                                            title="{{$seatRow[$i].'3'}}" 
                                                            bus_id="{{$detail->id}}"
                                                            fare="{{$detail->fare}}" data-toggle="tooltip"
                                                            style="width:40px;"
                                                            status={{$status}}
                                                            onclick="{{$status == 'reserved' || $status == 'confirmed' ? '' : 'chooseSeat(this)' }}"
                                                            >{{$seatRow[$i].'3'}}</button>
                                                    </td>
                                                    @php
                                                    $arr_seat = $seatRow[$i].'4';
                                                    
                                                    $data = $detail->findTicket($detail->trip_id,strval($arr_seat));
                                                    $status = 'none';
                                                    foreach ($booked_list as $booked){
                                                            
                                                            if($booked->seat_name == $arr_seat){
                                                                $status = $booked->status;
                                                               
                                                            }

                                                    }
                                            

                                                    @endphp
                                                    <td style="width: 50px; margin:5px"
                                                        data-seat="{{$detail->findTicket($detail->trip_id,$seatRow[$i].'4')}}">

                                                        <button class="seat new-seat-{{$detail->id}} text-center {{$status == 'reserved' ? 'reserved' : ($status == 'confirmed' ? 'confirmed' : 'bg-white' ) }} "
                                                            id="seat-pos-{{$seatRow[$i].'4'}}"
                                                            title="{{$seatRow[$i].'4'}}" bus_id="{{$detail->id}}"
                                                            fare="{{$detail->fare}}" data-toggle="tooltip"
                                                            status={{$status}}
                                                            style="width:40px;"
                                                            onclick="{{$status == 'reserved' || $status == 'confirmed' ? '' : 'chooseSeat(this)' }}"
                                                           
                                                             >{{$seatRow[$i].'4'}}</button>
                                                    </td>

                    </tr>
                    {{-- @endforeach --}}
                    @endfor
            </table>

        </div>
        
        <div class="col-md-6" id="booked-from-{{$detail->id}}">
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
                <div id="tbl_price_details-{{$detail->id}}">
                    <table class="table">
                        <thead>
                            <th>Seats</th>
                            <th>Fare</th>
                            <th>Class</th>
                        </thead>
                        <tbody>
                            <tr>
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
                <div id="tickets_total-{{$detail->id}}" class="t_total">
                    <p><b>Total: 0</b></p>
                </div>
                <form id="confirmbooking" method="post" action="/booking/bus/confirm">
                    @csrf
                    <div class="form-group">
                        <label for="bpt">Choose Boarding Point <span>*</span></label>


                        <select id="boardingpoint" location name="boardingpoint" class="form-control">
                            <option value="0"> -- Boarding points -- </option>
                            <option value="Mohakhali Bus Point (10:30 PM)">Mohakhali Bus Point (10:30 PM)
                            </option>
                        </select>

                    </div>
                    <input type="hidden" id="bus_id" name="searchid">
                    
                    
                </form>
                <button  id="continue-btn-submit" class="btn btn-primary btn-sm" style="margin-top:20px;" onclick="booked_ticket('{{$detail->id}}')" >Continue</button>
            </div>
        </div>
        
    </div>
    <div class="modal-footer text-left d-none">
        <p id="tripAlert" class="alert-danger text-center" style="text-align:left;"><i
                class="fa fa-exclamation-triangle"></i> <i>Due to traffic condition, the trip may get
                canceled.</i> </p>
        <button type="button" class="btn btn-secondary btnClose" data-dismiss="modal">Close</button>

    </div>
    <!-- For test Form -->
    <div class="container d-none">
        <div class="row">
            <div class="col-md-6">

                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Bus_id</label>
                        <input type="text" class="form-control" id="businfo_id" name="businfo_id">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date" name="date">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Time</label>
                        <input type="text" class="form-control" id="time" name="time">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Status</label>
                        <input type="text" class="form-control" id="status" name="status">
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
    @endforeach
    {{-- @endfor --}}
    </tbody>

    </table>

    </div>
    </div>







    <script type="text/javascript">
    
        var green_color = 'rgb(0, 128, 0)'
        var white_color = 'rgb(255, 255, 255)'

        function chooseSeat(seatObjNew) {
            
            // console.log(seatObjNew);
            var $seatObjNew = seatObjNew
            var $seatObj = $(seatObjNew);
            // console.log($seatObj);
            var status =  $seatObjNew.attributes['status'].value
            // console.log(status);
            var sData = $seatObj[0].attributes[2].value;
            if ($seatObjNew.classList.contains('selected')) {
                $seatObjNew.classList.remove('selected');
                $seatObjNew.classList.add('bg-white');
                $('#result-' + sData).remove();
                doTicketsTotal(100,$seatObj[0].attributes[3].value);
                var seat_total = document.querySelector('td#bus-seat-capacity-h-greenline-'+$seatObj[0].attributes[3].value).firstChild.textContent;
                var seat = parseInt(seat_total) - parseInt($('#tbl_price_details-'+$seatObj[0].attributes[3].value+' #tbl_seat_list tr').length);

                $('td#bus-seat-capacity-greenline-' + $seatObj[0].attributes[3].value).text(seat);

            } else {

                if($seatObjNew.classList.contains('bg-white')){
                    $seatObjNew.classList.remove('bg-white');
                    $seatObjNew.classList.add('selected');

                }
                // $seatObj.css("background-color", "green");



                $seatObj.attr("pointer-events", "none");

                console.log($seatObj[0].attributes[3].value)

                var $seatTableBody = $('#tbl_price_details-'+$seatObj[0].attributes[3].value).find('table#tbl_seat_list').find('tbody:eq(0)');

                // console.log(sData);

                var seat_name = 'A';
                var tr = '<tr id="' + 'result-' + sData + '"><td width="115">' + sData +
                    '</td><td class=" seat_price-'+$seatObj[0].attributes[3].value+' " width="100">' + $seatObj[0].attributes[4].value + '</td><td>' +
                    "Economy" + '<input type="hidden" name="' + sData + '" value="' + sData +
                    '"/><input type="hidden" name="triproute[]" value="' + 1 + '"/>' +
                    '<input type="hidden" name="trip_id" value="' + 1 + '" /></td></tr>';
                $seatTableBody.append(tr);
                doTicketsTotal(100,$seatObj[0].attributes[3].value);
                // var seat = parseInt($('td#bus-seat-capacity-greenline-'+$seatObj[0].attributes[3].value).text());
                // console.log($seatObj[0].attributes[3].value)
                var seat_total = document.querySelector('td#bus-seat-capacity-h-greenline-'+$seatObj[0].attributes[3].value).firstChild.textContent;
                // console.log(seat_total)
                var seat = parseInt(seat_total) - parseInt($('#tbl_price_details-'+$seatObj[0].attributes[3].value+' #tbl_seat_list tr').length);
                
                $('td#bus-seat-capacity-greenline-' + $seatObj[0].attributes[3].value).text(seat);
                
            }


        }

        function doTicketsTotal(discountAmount,bus_id)

        {
            var ticketsTotal = 0;
            $('.seat_price-'+bus_id).each(function (index) {

                per_ticket_price = parseFloat($(this).text());
                ticketsTotal += per_ticket_price

                // console.log($(this).text())
                // console.log(ticketsTotal)


            });

            $('div#tickets_total-'+bus_id).html('<p><b>Total: ' + ticketsTotal + '</b></p>');

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

    
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function booked_ticket(bus_id){
           
                var selected_seat = document.querySelectorAll(".selected.new-seat-"+bus_id);
                var boarding_point = $("#boardingpoint").val();
                console.log(selected_seat)
                var bus_id = parseInt(bus_id);
                var bus_id = parseInt(selected_seat[0].attributes['bus_id'].value) ;
                console.log(selected_seat)
                var arr = []
                for(let i=0 ; i < selected_seat.length ; i++){
                    // console.log(data)
                    if(selected_seat[i].attributes['bus_id'].value == bus_id){
                        arr.push(selected_seat[i].title)
                    }
                        
                }
                console.log(arr)

                $.ajax({
                type:'POST',
                url:"{{ route('booking.post') }}",
                data:{data_list:arr,bus_id:bus_id,boarding_point:boarding_point},
                success:function(data){
                    console.log(data)
                    // window.location.href  = data.redirect;
                    if(data['success']){
                        
                        window.location.href = data['redirect']
                    }
                    console.log(data['success']);

                    // window.reload;
                    // window.location.href = "{{ route('bokking.get') }}"
                }
                });

            

        }


    
       


    </script>






</body>

</html>
