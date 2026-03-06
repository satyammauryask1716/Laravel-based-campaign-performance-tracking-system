@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="fw-bold">Campaign Records</h2>
        <div>
            <a href="{{ route('campaign.create') }}" class="btn btn-primary btn-sm">Add New Record</a>
            <a href="{{ route('campaign.uploadform') }}" class="btn btn-secondary btn-sm">Upload Excel</a>
        </div>
    </div>
    <div class="card shadow-sm mb-4">
        <div class="card-body p-0">
            <table class="table table-hover align-middle">
                <thead>
                <tr>
                    <th>Region</th><th>Platform</th><th>Ad Type</th>
                    <th>Amount Planned</th><th>Amount Achieved</th>
                    <th>Impressions Planned</th><th>Impressions Achieved</th>
                    <!-- add more columns as needed -->
                </tr>
                </thead>
                <tbody>
                @foreach($records as $record)
                    <tr>
                        <td>{{ $record->region }}</td>
                        <td>{{ $record->platform }}</td>
                        <td>{{ $record->ad_type }}</td>
                        <td>{{ number_format($record->amount_planned, 2) }}</td>
                        <td>{{ number_format($record->amount_achieved, 2) }}</td>
                        <td>{{ number_format($record->impressions_planned) }}</td>
                        <td>{{ number_format($record->impressions_achieved) }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{ $records->links('pagination::bootstrap-5') }}

    <div class="summary-charts mb-4">
        <h3 class="mb-3">Summary Charts</h3>
        <canvas id="impressionChart" height="120"></canvas>
    </div>
@endsection

@section('scripts')
    <script>
        const ctx = document.getElementById('impressionChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: {!! json_encode($records->pluck('platform')) !!},
                datasets: [
                    {
                        label: 'Impressions Achieved',
                        data: {!! json_encode($records->pluck('impressions_achieved')) !!},
                        backgroundColor: 'rgba(54,162,235,0.7)'
                    },
                    {
                        label: 'Impressions Planned',
                        data: {!! json_encode($records->pluck('impressions_planned')) !!},
                        backgroundColor: 'rgba(255,99,132,0.7)'
                    }
                ]
            },
            options: {
                responsive: true,
                scales: {
                    x: {beginAtZero:true, ticks: {font: {size:13}}},
                    y: {beginAtZero:true}
                }
            }
        });
    </script>
@endsection
