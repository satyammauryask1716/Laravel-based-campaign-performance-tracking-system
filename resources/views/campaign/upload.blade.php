@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Upload Campaign Excel</h2>
        <form method="POST" action="{{ route('campaign.uploaddata') }}" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" accept=".xlsx,.xls" required />
            <button type="submit" class="btn btn-success">Upload</button>
        </form>
    </div>
@endsection
