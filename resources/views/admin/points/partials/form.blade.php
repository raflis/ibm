
<div class="form-group col-sm-6">
  {{ Form::label('point_user_id', 'Usuario:') }} <code>*</code>
  {{ Form::select('point_user_id', $users, null, ['class' => 'form-control', 'placeholder' => 'Usuario', 'required']) }}
</div>

<div class="form-group col-sm-6">
  {{ Form::label('points', 'Puntos:') }} <code>*</code>
  {{ Form::number('points', null, ['class' => 'form-control', 'placeholder' => 'Puntos', 'required']) }}
</div>

<div class="form-group col-sm-12">
  {{ Form::label('detail', 'Detalle:') }} <code>*</code>
  {{ Form::textarea('detail', null, ['class' => 'form-control', 'placeholder' => 'Detalle', 'rows' => 3, 'required']) }}
</div>