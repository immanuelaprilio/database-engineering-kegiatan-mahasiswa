@props(['type'])

@if($type == 'Aktif')
<span style="color:green">
    Aktif
</span>
@elseif($type == 'Cuti')
<span style="color:orange">
    Cuti
</span>
@else
<span style="color:red">
    Nonaktif
</span>
@endif