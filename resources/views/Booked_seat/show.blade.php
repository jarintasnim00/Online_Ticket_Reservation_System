@extends('layouts.app')
@section('title')
    Businfos 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Booked Seat</h1>
            <div class="section-header-breadcrumb">
               <!--   -->
            </div>
        </div>
    <div class="section-body">
        
       <div class="card">
            <div class="card-body">
              <div class="table-responsive">
    <table class="table" id="myTable">
        <thead>
            <tr>
            <th>Id</th>
          
            <th>Route</th>     
            <th>Total Ticket Sell</th>
            <th>Departure Time</th>
            <th>Total Amount</th>
            <th>Date</th>
       
              
            </tr>
        </thead>
        <tbody>
            <input type="hidden" value="{{$tt4=0}}">
        @foreach($bookedseats as $businfo)
            <tr>
                <td>{{ $businfo->id}}</td>
              
                <td>{{ $businfo->leaving_from }}-{{ $businfo->going_to }}</td>
                <td>{{ $businfo->total_sales }}</td>
                <td><?php echo date('h:i A', strtotime($businfo->departure_time)); ?></td>
                <td>{{ $businfo->total_sales * 1200 }} Tk</td>
                <td><?php echo date('d-M-Y', strtotime($businfo->bus_journey_date)); ?></td>
                <input type="hidden" value="{{$tt4=$tt4+$businfo->total_sales * 1200}}">
            </tr>

        @endforeach
        </tbody>

         <tr>
                            
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Total Price=</td>
                            <td>{{$tt4}} Tk</td>
                        </tr>
    </table>
</div>
            </div>
       </div>
   
   </div>
    
    </section>
@endsection