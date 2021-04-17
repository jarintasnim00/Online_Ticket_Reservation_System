<div class="table-responsive">
    <table class="table" id="busOwners-table">
        <thead>
            <tr>
                <th>Bus Name</th>
        <th>Registration No</th>
        <th>Bus Owner Name</th>
        <th>Bus Owner Mobile No</th>
        <th>Bus Owner Email</th>
        <th>Nid</th>
        <th>Address</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($busOwners as $busOwner)
            <tr>
                       <td>{{ $busOwner->bus_name }}</td>
            <td>{{ $busOwner->registration_no }}</td>
            <td>{{ $busOwner->bus_owner_name }}</td>
            <td>{{ $busOwner->bus_owner_mobile_no }}</td>
            <td>{{ $busOwner->bus_owner_email }}</td>
            <td>{{ $busOwner->nid }}</td>
            <td>{{ $busOwner->address }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['busOwners.destroy', $busOwner->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('busOwners.show', [$busOwner->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('busOwners.edit', [$busOwner->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
