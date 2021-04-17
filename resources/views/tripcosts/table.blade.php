<div class="table-responsive">
    <table class="table" id="myTable">
        <thead>
            <tr>
                 <th>Id</th>
                 <th>Busid/Name</th>
                 <th>Route</th>
                 <th>Departure Time</th>
                
            

   <!--    <th>Bookseat Id</th> -->
        <th>Fuel Cost</th>
        <!-- <th>Price Per Liter</th>
          <th>Amount</th> -->
        <th>Toll Cost</th>
        <th>Maintenance</th>
        <th>Driver Salary</th>
        <th>Helper Salary</th>
        <th>Supervisor Salary</th>
        <th>Total Cost</th>
        <th>Date</th>
       
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tripCost as $tripcost)
         <tr>
            <td>{{ $tripcost->id }}</td>     
            <td>{{ $tripcost->bus_info->name }}</td>              
            <td>{{ $tripcost->bus_info->leaving_from }}-{{ $tripcost->bus_info->going_to }}</td>
            <td><?php echo date('h:i A', strtotime( $tripcost->bus_info->departure_time)); ?></td>
            <td>{{ $tripcost->price_per_liter * $tripcost->fuel}}</td>
            <td>{{ $tripcost->toll_cost }}</td>
            <td>{{ $tripcost->maintenance }}</td>
            <td>{{ $tripcost->driver_salary }}</td>
            <td>{{ $tripcost->helper_salary }}</td>
            <td>{{ $tripcost->supervisor_salary }}</td>
            <td>{{ ($tripcost->price_per_liter * $tripcost->fuel)+$tripcost->toll_cost+$tripcost->maintenance+$tripcost->driver_salary+$tripcost->helper_salary +$tripcost->supervisor_salary }}</td>
            <td><?php echo date('d-M-Y', strtotime( $tripcost->bus_info->created_at)); ?></td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['tripcosts.destroy', $tripcost->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                              <a href="{!! route('tripcosts.pdf', [$tripcost->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-file-pdf"></i></a>
                               <a href="{!! route('tripcosts.show', [$tripcost->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('tripcosts.edit', [$tripcost->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>


 <script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }


</script>

