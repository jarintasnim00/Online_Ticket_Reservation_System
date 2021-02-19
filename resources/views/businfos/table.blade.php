<div class="table-responsive">
    <table class="table" id="businfos-table">
        <thead>
            <tr>
                <th>Route</th>
        <th>Name</th>
        <th>Seattype</th>
         <th>Bustyp Id</th>
        <th>Seatcapacity</th>
        <th>Fare</th>
        <th>Day</th>
        <th>Depature Time</th>
        <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($businfos as $businfo)
            <tr>
            <td>{{ $businfo->leaving_from }}-{{ $businfo->going_to }}</td>
            <td>{{ $businfo->name }}</td>
            <td>{{ $businfo->seattype }}</td>
            <td>{{ $businfo->bustyp->bustypename }}</td>
            <td>{{ $businfo->seatcapacity }}</td>
            <td>{{ $businfo->fare }}</td>
            <td>{{ $businfo->day }}</td>
             <td>{{ $businfo->departure_time }}</td>
            <td>{{ $businfo->description }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['businfos.destroy', $businfo->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('businfos.show', [$businfo->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('businfos.edit', [$businfo->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
