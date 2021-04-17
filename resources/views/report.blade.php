<!DOCTYPE html>
<html>
<head>
    <title>Report Generate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>
<body>
   <div class="container"  style="text-align: center;">
       <h2>Report Generate</h2>
       <h5>Dhaka To Chittagong</h5>
       <h6>Journey Date:{{ date('d-M-Y') }}</h6>
       <h6>Bus_id:Green Line 11</h6>
       <h6>Bus_Owner_Name:Md Alauddin</h6>
       
   </div>
 <br><br><br>
  
   <div class="container">
       
       <table class="table table-bordered border-primary">
  <thead>
    <tr>
   
      <th scope="col">Expense List</th>
      <th scope="col">Expense Amount</th>
      <th scope="col">Ticket details</th>
      <th scope="col">Ticket Amount</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    
      <td>Fuel Cost </td>
      <td>{{ $tripcost->price_per_liter * $tripcost->fuel}}</td>
      <td>Ticket quantity</td>

      <td rowspan="6"> {{ $tripcost->total_seat}} </td>
    </tr>
    <tr>
    
      <td>Toll Cost</td>
      <td>{{ $tripcost->toll_cost }}</td>
      <td></td>
     
    </tr>
    <tr>
    
      <td>Maintenance</td>
      <td>{{ $tripcost->maintenance }}</td>
      <td></td>
     
    </tr>
    <tr>
     
      <td> Driver salary </td>
      <td>{{ $tripcost->driver_salary }}</td>
      <td></td>
      
   
    </tr>
    <tr>
    
      <td> Helper salary </td>
      <td>{{ $tripcost->helper_salary }}</td>
      <td></td>
     
    </tr>
    <tr>
      
      <td> Supervisor salary </td>
      <td>{{ $tripcost->supervisor_salary }}</td>
      <td></td>
     
    </tr>
    <tr>
      
      <td><b>Total Cost</b></td>
      <td>{{ ($tripcost->price_per_liter * $tripcost->fuel)+$tripcost->toll_cost+$tripcost->maintenance+$tripcost->driver_salary+$tripcost->helper_salary +$tripcost->supervisor_salary }}</td>
      <td><b>Total sell</b></td>
      <td>{{ $tripcost->total_seat * 1200 }} </td>
    </tr>
    <tr>
     
      <td colspan="3"><b>Profit/Loss -</b></td>
      <td>{{ ($tripcost->total_seat * 1200 )-(($tripcost->price_per_liter * $tripcost->fuel)+$tripcost->toll_cost+$tripcost->maintenance+$tripcost->driver_salary+$tripcost->helper_salary +$tripcost->supervisor_salary)}}</td>
     
    </tr>
  </tbody>
</table>
   </div>


</body>
</html>