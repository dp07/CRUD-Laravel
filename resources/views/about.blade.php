<!-- relative terhadap folder view -->
@extends('layout/main')

@section('title', 'About Us')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <h1 class="mt-3">Hello, <?= $nama; ?>!</h1>
        </div>
    </div>
</div>
@endsection