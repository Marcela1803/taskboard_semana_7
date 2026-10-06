@props(['estado'])

@if ($estado === 'Aprobada')
    <span class="badge verde">{{ $estado }}</span>
@elseif ($estado === 'Rechazada')
    <span class="badge rojo">{{ $estado }}</span>
@elseif ($estado === 'Procesando' || $estado === 'Iniciada')
    <span class="badge amarillo">{{ $estado }}</span>
@else
    <span class="badge gris">{{ $estado }}</span>
@endif