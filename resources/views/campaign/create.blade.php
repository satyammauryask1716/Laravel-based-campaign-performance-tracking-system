@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add Campaign Record</h2>
        <form method="POST" action="{{ route('campaign.store') }}">
            @csrf
            <div class="mb-3">
                <label>Region</label><input name="region" class="form-control" />
            </div>
            <div class="mb-3">
                <label>Platform</label><input name="platform" class="form-control" required />
            </div>
            <div class="mb-3">
                <label>Ad Type</label><input name="ad_type" class="form-control" required />
            </div>
            <!-- Repeat for all fields or just essential fields for form -->
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
