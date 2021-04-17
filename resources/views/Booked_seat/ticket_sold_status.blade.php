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
             <div class="no-print"   style="color: #ffffff;float: right;">

        <a onclick="printDiv('printableArea')" class="btn btn-danger">PDF</a>
    </div>
        </div>
    <div class="print section-body" id="printableArea">
       <div class="card">
            <div class="card-body">
              <div class="table-responsive">
  <table class="table" id="bustypes-table">
        <thead>
            <tr>
             

          <th>Bus id</th>
          <th>Route</th>
          <th>Departure Time</th>
          <th>Total Ticket Sold</th>
          <th>Cash</th>  
          <th>Card</th>      
          <th>Bkash</th>  
          <th>Total Amount</th>  
          <th>Action</th>  
   
       
              
            </tr>
        </thead>
        <tbody>
   
             <tr>

                <td>1</td>
                <td>Dhaka-Chitagong</td>
                <td>10.30 am</td>
                <td>20</td>
                <td>5000</td>
                <td>2000</td>
                <td>15000</td>
                <td>22000</td>
                <td class=" text-center">
                <div class="no-print"   style="color: #ffffff;float: right;">
                <a onclick="printDiv('printableArea')" class="btn btn-danger">PDF</a></div>
                </td>
            </tr>
             <tr>

                <td>2</td>
                <td>Chitagong-Dhaka</td>
                <td>10.30 am</td>
                <td>15</td>
                 <td>2000</td>
                <td>15000</td>
                <td>22000</td>
                <td>25000</td>
               <td class=" text-center">
                <div class="no-print"   style="color: #ffffff;float: right;">
                <a onclick="printDiv('printableArea')" class="btn btn-danger">PDF</a></div>
                </td>
            </tr>
     
      <tr>

                <td>3</td>
                <td>Dhaka-Cox's Bazar</td>
                <td>02.30 am</td>
                <td>10</td>
                 <td>2000</td>
                <td>15000</td>
                <td>22000</td>
                <td>12000</td>
                 <td class=" text-center">
                <div class="no-print"   style="color: #ffffff;float: right;">
                <a onclick="printDiv('printableArea')" class="btn btn-danger">PDF</a></div>
                </td>
            </tr>



            
     
     
        </tbody>
    </table>
</div>
            </div>
       </div>
   </div>
    
    </section>
     <script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }


</script>
@endsection