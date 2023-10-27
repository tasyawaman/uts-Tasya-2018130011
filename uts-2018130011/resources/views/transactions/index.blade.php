@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Transaction List</h1>
        <p>Current Balance: {{ number_format($transactions->sum('amount'), 2) }} Rupiah</p>
        <p>Total Income: {{ number_format($transactions->where('type', 'income')->sum('amount'), 2) }} Rupiah</p>
        <p>Total Expense: {{ number_format($transactions->where('type', 'expense')->sum('amount'), 2) }} Rupiah</p>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Amount</th>
                    <th>Type</th>
                    <th>Category</th>
                    <th>Notes</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->id }}</td>
                        <td>{{ number_format($transaction->amount, 2) }} Rupiah</td>
                        <td>{{ $transaction->type }}</td>
                        <td>{{ $transaction->category }}</td>
                        <td>{{ $transaction->notes }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
