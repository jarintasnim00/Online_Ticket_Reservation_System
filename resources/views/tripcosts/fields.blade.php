<!-- Businfo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('businfo_id', 'Businfo Id:') !!}
<!--     {!! Form::number('businfo_id', null, ['class' => 'form-control']) !!} -->
    <select name = "businfo_id" class="form-control ">
   @foreach($buses as $bsinfo)
   <option value = "{{$bsinfo->id}}">{{$bsinfo->name}}</option>

   @endforeach
   </select>
</div>



<!-- Bookseat Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bookseat_id', 'Bookseat Id:') !!}
    <select name = "bookseat_id" class="form-control ">
   @foreach($bookseat as $bookseats)
   <option value = "{{$bookseats->id}}">{{$bookseats->total_sales}}</option>

   @endforeach
   </select>
<!--     {!! Form::number('bookseat_id', null, ['class' => 'form-control']) !!} -->
</div>

<!-- Fuel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fuel', 'Fuel:') !!}
    {!! Form::text('fuel', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Price Per Liter Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price_per_liter', 'Price Per Liter:') !!}
    {!! Form::text('price_per_liter', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Toll Cost Field -->
<div class="form-group col-sm-6">
    {!! Form::label('toll_cost', 'Toll Cost:') !!}
    {!! Form::text('toll_cost', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Maintenance Field -->
<div class="form-group col-sm-6">
    {!! Form::label('maintenance', 'Maintenance:') !!}
    {!! Form::text('maintenance', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Driver Salary Field -->
<div class="form-group col-sm-6">
    {!! Form::label('driver_salary', 'Driver Salary:') !!}
    {!! Form::text('driver_salary', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Helper Salary Field -->
<div class="form-group col-sm-6">
    {!! Form::label('helper_salary', 'Helper Salary:') !!}
    {!! Form::text('helper_salary', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Supervisor Salary Field -->
<div class="form-group col-sm-6">
    {!! Form::label('supervisor_salary', 'Supervisor Salary:') !!}
    {!! Form::text('supervisor_salary', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>


<!-- Bookseat Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_seat', 'Bookseat Id:') !!}
    <select name = "total_seat" class="form-control ">
   @foreach($bookseat as $bookseats)
   <option value = "{{$bookseats->total_sales}}">{{$bookseats->total_sales}}</option>

   @endforeach
   </select>
</div>






<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tripcosts.index') }}" class="btn btn-light">Cancel</a>
</div>



    