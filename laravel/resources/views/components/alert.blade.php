@props(['type' => 'info'])

<div style="
padding:10px;
margin:10px 0;
border-radius:8px;
border:1px solid #ccc;

@if($type == 'success')
background:#dcfce7;color:#166534;
@elseif($type == 'warning')
background:#fef9c3;color:#854d0e;
@elseif($type == 'error')
background:#fee2e2;color:#991b1b;
@else
background:#dbeafe;color:#1d4ed8;
@endif
">

{{ $slot }}

</div>
