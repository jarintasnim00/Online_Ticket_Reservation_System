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
          <th>Total Amount</th>      
   
       
              
            </tr>
        </thead>
        <tbody>
   
             <tr>

                <td>1</td>
                <td>Dhaka-Chitagong</td>
                <td>50,000</td>
            
            </tr>
              <tr>

                <td>2</td>
                <td>Cox's Bazar-Chitagong</td>
                <td>70,000</td>
            
            </tr>
              <tr>

                <td>3</td>
                <td>Dhaka-Shylet</td>
                <td>40,000</td>
            
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