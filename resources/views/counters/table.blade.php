<div class="table-responsive">
    <table class="table" id="counters-table">
        <thead>
            <tr>
                <th>Counter Name</th>
        <th>Contact Num</th>
        <th>Location</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($counters as $counter)
            <tr>
                       <td>{{ $counter->counter_name }}</td>
            <td>{{ $counter->contact_num }}</td>
            <td>{{ $counter->location }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['counters.destroy', $counter->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('counters.show', [$counter->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('counters.edit', [$counter->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
