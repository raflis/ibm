<div class="form-group col-sm-4">
  {{ Form::label('name', 'Nombre:') }} <code>*</code>
  {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'required']) }}
</div>

<div class="form-group col-sm-4">
  {{ Form::label('lastname', 'Apellido:') }} <code>*</code>
  {{ Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'Apellido', 'required']) }}
</div>

<div class="form-group col-sm-4">
  {{ Form::label('email', 'Email:') }} <code>*</code>
  {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Nombre del botón', 'required']) }}
</div>

<div class="form-group col-sm-6">
  {{ Form::label('country', 'País:') }} <code>*</code>
  {{ Form::select('country', getCountries(), null, ['class' => 'form-control', 'placeholder' => 'Pais', 'required']) }}
</div>

<div class="form-group col-sm-6">
  {{ Form::label('company', 'Empresa:') }} <code>*</code>
  {{ Form::text('company', null, ['class' => 'form-control', 'placeholder' => 'Empresa', 'required']) }}
</div>