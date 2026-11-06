@extends('layouts.app')

@section('title','Dashboard')

@section('content')

<h1>
Selamat Datang {{ $admin }}
</h1>

<x-card>
<h3>Total Mahasiswa</h3>
<p>{{ $totalMahasiswa }}</p>
</x-card>

<x-card>
<h3>Mahasiswa Aktif</h3>
<p>{{ $mahasiswaAktif }}</p>
</x-card>

<x-card>
<h3>Mahasiswa Cuti</h3>
<p>{{ $mahasiswaCuti }}</p>
</x-card>

<x-alert type="success">
Data mahasiswa berhasil dimuat
</x-alert>

<table border="1" cellpadding="10">

<tr>
<th>No</th>
<th>Nama</th>
<th>NIM</th>
<th>Prodi</th>
<th>Status</th>
</tr>

@forelse($mahasiswa as $item)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $item['nama'] }}</td>

<td>{{ $item['nim'] }}</td>

<td>{{ $item['prodi'] }}</td>

<td>
<x-badge type="{{ $item['status'] }}" />
</td>

</tr>

@empty

<tr>
<td colspan="5">

<x-empty-state
title="Tidak Ada Data"
description="Data mahasiswa belum tersedia" />

</td>
</tr>

@endforelse

</table>

<x-panel>

<x-slot:title>
Informasi Dashboard
</x-slot:title>

<x-slot:action>
<x-button variant="primary">
Refresh
</x-button>
</x-slot:action>

Dashboard mahasiswa menggunakan
Blade Component dan Slot.

</x-panel>

@endsection