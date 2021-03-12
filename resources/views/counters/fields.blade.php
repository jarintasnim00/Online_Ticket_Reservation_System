<!-- Counter Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('counter_name', 'Counter Name:') !!}
    {!! Form::text('counter_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Contact Num Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contact_num', 'Contact Num:') !!}
    {!! Form::text('contact_num', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location', 'Location:') !!}
    {!! Form::text('location', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('counters.index') }}" class="btn btn-light">Cancel</a>
</div>
