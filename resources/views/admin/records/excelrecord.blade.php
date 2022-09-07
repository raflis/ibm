<table>
    <thead>
    <tr>
        <th><strong>N°</strong></th>
        <th><strong>Nombre</strong></th>
        <th><strong>Apellido</strong></th>
        <th><strong>Empresa</strong></th>
        <th><strong>Cargo</strong></th>
        <th><strong>Teléfono</strong></th>
        <th><strong>Email</strong></th>
        <th><strong>Contacto por teléfono</strong></th>
        <th><strong>Contacto por email</strong></th>
        <th><strong>Fecha de registro</strong></th>
    </tr>
    </thead>
    <tbody>
    @foreach($records as $record)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $record->name }}</td>
            <td>{{ $record->lastname }}</td>
            <td>{{ $record->company }}</td>
            <td>{{ $record->position }}</td>
            <td>{{ $record->telephone }}</td>
            <td>{{ $record->email }}</td>
            <td>{{ ($record->for_telephone == 1)?'Si':'No' }}</td>
            <td>{{ ($record->for_email == 1)?'Si':'No' }}</td>
            <td>{!! \Carbon\Carbon::parse($record->created_at)->format('d/m/Y') !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>