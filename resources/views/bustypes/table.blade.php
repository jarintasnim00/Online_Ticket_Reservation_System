<div class="table-responsive">
    <table class="table" id="bustypes-table">
        <thead>
            <tr>
                <th>Bustypename</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($bustypes as $bustype)
            <tr>
                       <td>{{ $bustype->bustypename }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['bustypes.destroy', $bustype->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('bustypes.show', [$bustype->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('bustypes.edit', [$bustype->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
