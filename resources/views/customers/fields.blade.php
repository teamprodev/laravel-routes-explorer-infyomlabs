<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Last Name:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- City Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city', 'City:') !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>

<!-- Zip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('zip', 'Zip:') !!}
    {!! Form::text('zip', null, ['class' => 'form-control']) !!}
</div>

<!-- Updated Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_date', 'Updated Date:') !!}
    {!! Form::text('updated_date', null, ['class' => 'form-control','id'=>'updated_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#updated_date').datepicker()
    </script>
@endpush

<!-- Registered Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('registered_date', 'Registered Date:') !!}
    {!! Form::text('registered_date', null, ['class' => 'form-control','id'=>'registered_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#registered_date').datepicker()
    </script>
@endpush

<!-- Removed Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('removed_date', 'Removed Date:') !!}
    {!! Form::text('removed_date', null, ['class' => 'form-control','id'=>'removed_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#removed_date').datepicker()
    </script>
@endpush

<!-- Active Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('active', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('active', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('active', 'Active', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Manager Field -->
<div class="form-group col-sm-6">
    {!! Form::label('manager', 'Manager:') !!}
    {!! Form::number('manager', null, ['class' => 'form-control']) !!}
</div>

<!-- Site Field -->
<div class="form-group col-sm-6">
    {!! Form::label('site', 'Site:') !!}
    {!! Form::number('site', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::number('image', null, ['class' => 'form-control']) !!}
</div>

<!-- Shift Start Field -->
<div class="form-group col-sm-6">
    {!! Form::label('shift_start', 'Shift Start:') !!}
    {!! Form::text('shift_start', null, ['class' => 'form-control']) !!}
</div>

<!-- Shift End Field -->
<div class="form-group col-sm-6">
    {!! Form::label('shift_end', 'Shift End:') !!}
    {!! Form::text('shift_end', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>