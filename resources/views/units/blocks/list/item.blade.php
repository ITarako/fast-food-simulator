<?php
/**
 * @var \App\Models\Unit $unit
 */

?>
<tr>
    <td>{{ $idx }}</td>
    <td>{{ $unit->name }}</td>
    <td>
        <a href="{{ route('units.edit', ['unit' => $unit]) }}" class="btn btn-sm btn-primary"
           title="Редактировать">
            <i class="fas fa-edit"></i>
        </a>
    </td>
</tr>
