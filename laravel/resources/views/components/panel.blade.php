<div style="
border:1px solid #ddd;
padding:20px;
margin-top:20px;
border-radius:8px;
">

<div style="
display:flex;
justify-content:space-between;
align-items:center;
margin-bottom:10px;
">

<div>
{{ $title ?? '' }}
</div>

<div>
{{ $action ?? '' }}
</div>

</div>

<div>
{{ $slot }}
</div>

</div>