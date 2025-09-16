@extends('layouts.app')

@section('content')
<div class="p-6 text-center text-white">
    <h1 class="text-3xl font-bold">{{ $segment }} Cars</h1>
    <p class="mt-2">Here you will see all {{ strtolower($segment) }} cars available for rent.</p>
</div>
@endsection
