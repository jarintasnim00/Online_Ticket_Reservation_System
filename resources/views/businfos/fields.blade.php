
<!-- Leaving From Field -->
<div class="form-group col-sm-6">
    {!! Form::label('leaving_from', 'Leaving From:') !!}
     <select name = "leaving_from" class="form-control" >
     <option value="Dhaka">Dhaka</option>
     <option value="Chittagong">Chittagong</option>
     <option value="Cox's Bazar">Cox's Bazar</option>
       <option value="Sylhet">Sylhet</option>
     <option value="Teknaf">Teknaf</option>
     <option value="Khulna">Khulna</option>
       <option value="Khagrachari">Khagrachari</option>
   </select>
</div>

<!-- Going To Field -->
<div class="form-group col-sm-6">
    {!! Form::label('going_to', 'Going To:') !!}
    <select name = "going_to" class="form-control" >
     <option value="Dhaka">Dhaka</option>
     <option value="Chittagong">Chittagong</option>
     <option value="Cox's Bazar">Cox's Bazar</option>
       <option value="Sylhet">Sylhet</option>
     <option value="Teknaf">Teknaf</option>
     <option value="Khulna">Khulna</option>
       <option value="Khagrachari">Khagrachari</option>
   </select>
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Seattype Field -->
<div class="form-group col-sm-6">
    {!! Form::label('seattype', 'Seattype:') !!}
    <select name = "seattype" class="form-control" >
     <option value="Business">Business</option>
     <option value="Economy">Economy</option>
     <option value="Sleeping Coach">Sleeping Coach</option>
   </select>
</div>

<!-- Bustyp Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bustyp_id', 'Bustyp Id:') !!}
       <select name = "bustyp_id" class="form-control ">
   @foreach($places as $place)
   <option value = "{{$place->id}}">{{$place->bustypename}}</option>

   @endforeach
   </select>
</div>


<!-- Seatcapacity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('seatcapacity', 'Seatcapacity:') !!}
    {!! Form::text('seatcapacity', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Fare Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fare', 'Fare:') !!}
    {!! Form::text('fare', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('day', 'Day:') !!}
     <select name = "day" class="form-control" >
     <option value="Saturday">Saturday</option>
     <option value="Sunday">Sunday</option>
     <option value="Monday">Monday </option>
     <option value="Tuesday">Tuesday </option>
     <option value="Wednesday">Wednesday </option>
     <option value="Thrusday">Thrusday </option>
     <option value="Friday">Friday </option>
   </select>
</div>


<!-- Departure Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('departure_time', 'Departure Time:') !!}
    {!! Form::time('departure_time', null, ['class' => 'form-control']) !!}
</div>
<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('businfos.index') }}" class="btn btn-light">Cancel</a>
</div>
