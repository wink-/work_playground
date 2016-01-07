@extends('layouts.master')

@section('content')

    <h1>Analysi</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>RecordName</th><th>FormName</th><th>Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $analysis->ID }}</td> <td> {{ $analysis->RecordName }} </td><td> {{ $analysis->FormName }} </td><td> {{ $analysis->Date }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection