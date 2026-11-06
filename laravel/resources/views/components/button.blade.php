@props(['variant' => 'primary'])

<button
{{ $attributes }}
style="
padding:8px 16px;
border:none;
border-radius:6px;
cursor:pointer;

@if($variant == 'primary')
background:#2563eb;color:white;
@else
background:#e5e7eb;color:#111827;
@endif
">

{{ $slot }}

</button>