@extends('layouts.layouts')

@section('content')
@push('style')
<link rel="stylesheet" type="text/css"
href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
@endpush

@if(session()->has('success'))
                   <div class="alert alert-primary">
                        {{ session()->get('success') }}
                    </div>
                @endif

<h1>Welcome to Dashboard
</h1>

@endsection
