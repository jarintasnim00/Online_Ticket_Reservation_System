<!-- Bus Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bus_name', 'Bus Name:') !!}
    {!! Form::text('bus_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Registration No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('registration_no', 'Registration No:') !!}
    {!! Form::text('registration_no', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Bus Owner Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bus_owner_name', 'Bus Owner Name:') !!}
    {!! Form::text('bus_owner_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Bus Owner Mobile No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bus_owner_mobile_no', 'Bus Owner Mobile No:') !!}
    {!! Form::text('bus_owner_mobile_no', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Bus Owner Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bus_owner_email', 'Bus Owner Email:') !!}
    {!! Form::text('bus_owner_email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Nid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nid', 'Nid:') !!}
    {!! Form::text('nid', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('busOwners.index') }}" class="btn btn-light">Cancel</a>
</div>
