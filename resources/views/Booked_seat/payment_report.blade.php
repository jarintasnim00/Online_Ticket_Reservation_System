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
   
     <div class="no-print" class="col-md-5"  style="color: #ffffff;float: right;">

        <a onclick="printDiv('printableArea')" class="btn btn-danger">Convert into PDF</a>
    </div>

        </div>
         
    <div class="print section-body" id="printableArea" > 
       <div class="card">
            <div class="card-body">
              <div class="table-responsive">
    <table class="table"  id="bustypes-table" >
    
        <thead>
            <tr>
             

          <th>Bus Id</th>
          <th>Cash Amonut</th>
          <th>Card Amount</th>  
          <th>Bkash Amount</th>     
          <th>Total Amount</th>  
   
       
              
            </tr>
        </thead>
        <tbody>
   
             <tr>

                <td>1</td>
                <td>10,000</td>
                <td>50,000</td>
                <td>30,000</td>
                <td>90,000</td>
            
            </tr>
              <tr>

                <td>2</td>
                <td>50,000</td>
                <td>30,000</td>
                <td>70,000</td>
                <td>1,50,000</td>
            
            
            </tr>
              <tr>

                <td>3</td>
                <td>40,000</td>
                <td>30,000</td>
                <td>70,000</td>
                <td>1,40,000</td>
            
            </tr>

                <td>1</td>
                <td>10,000</td>
                <td>50,000</td>
                <td>30,000</td>
                <td>90,000</td>
            
            </tr>
              <tr>

                <td>2</td>
                <td>50,000</td>
                <td>30,000</td>
                <td>70,000</td>
                <td>1,50,000</td>
            
            
            </tr>
              <tr>

                <td>3</td>
                <td>40,000</td>
                <td>30,000</td>
                <td>70,000</td>
                <td>1,40,000</td>
            
            </tr>

                <td>1</td>
                <td>10,000</td>
                <td>50,000</td>
                <td>30,000</td>
                <td>90,000</td>
            
            </tr>
              <tr>

                <td>2</td>
                <td>50,000</td>
                <td>30,000</td>
                <td>70,000</td>
                <td>1,50,000</td>
            
            
            </tr>
              <tr>

                <td>3</td>
                <td>40,000</td>
                <td>30,000</td>
                <td>70,000</td>
                <td>1,40,000</td>
            
            </tr>
              
              <tr>
                <td>1</td>
                <td>10,000</td>
                <td>50,000</td>
                <td>30,000</td>
                <td>90,000</td>
            
            </tr>

            <tr>

                <td>Total</td>
                <td>3,00,000</td>
                <td>8,30,000</td>
                <td>2,70,000</td>
                <td>13,40,000</td>
            
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




