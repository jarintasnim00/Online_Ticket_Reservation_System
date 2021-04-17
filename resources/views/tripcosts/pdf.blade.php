@extends('layouts.app')
@section('title')
    Edit Tripcost 
@endsection
@section('content')
    <section class="section">
            <div class="section-header">
                <h3 class="page__heading m-0">Trip Cost Report Generate</h3>

                <div class="filter-container section-header-breadcrumb row justify-content-md-end">
                   <div class="no-print"   style="color: #ffffff;float: right;">

        <a onclick="printDiv('printableArea')" class="btn btn-danger">PDF</a>
    </div>
                    <a href="{{ route('tripcosts.index') }}"  class="btn btn-primary">Back</a>
                </div>
            </div>
  <div class="content">
              @include('stisla-templates::common.errors')
              <div class="print section-body" id="printableArea">

                 <div class="row">
                     <div class="col-lg-12">

                         <div class="card">
                              
                             <div class="card-body" >
                                    {!! Form::model($tripcost, ['route' => ['tripcosts.update', $tripcost->id], 'method' => 'patch']) !!}
                                        <div class="row">
                                          
                                           <table border="solid 1 px" style="width: 600px; height: 400px; text-align: center;">
                                              <h5 class="offset-md-2 col-md-6">Trip Cost Report Generate</h5>
    <thead>

        </thead>
    <tbody>
        <tr>
            <th>Businfo Id:</th>
             <td>Green Line 01</td>
              </tr>

              <tr>
            <th>Route:</th>
             <td>Dhaka To Chittagang</td>
              </tr>

              <tr>
            <th>Fuel Cost:</th>
          <td>{{ $tripcost->price_per_liter * $tripcost->fuel}} Tk</td>
           </tr>
              <tr>
        <th>Toll Cost:</th>
        <td>{{ $tripcost->toll_cost }} Tk</td>
        </tr>
              <tr>

        <th>Maintenance:</th>
         <td>{{ $tripcost->maintenance }} Tk</td>
         </tr>
              <tr>

        <th>Driver Salary:</th>
           <td>{{ $tripcost->driver_salary }} Tk</td>
           </tr>
              <tr>

        <th>Helper Salary:</th>
         <td>{{ $tripcost->helper_salary }} Tk</td>
         </tr>
              <tr>

        <th>Supervisor Salary:</th>
               <td>{{ $tripcost->supervisor_salary }} Tk</td>
               </tr>
              <tr>

        <th>Total Cost =</th>
         <td>{{ ($tripcost->price_per_liter * $tripcost->fuel)+$tripcost->toll_cost+$tripcost->maintenance+$tripcost->driver_salary+$tripcost->helper_salary +$tripcost->supervisor_salary }} Tk</td>
        </tr>
     
   </tbody>
</table>
                                        </div>

                                    {!! Form::close() !!}
                            </div>
                         </div>
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
