@extends('layouts.master')

@section('content')

    <h1>Nickels
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Record</th><th>Form</th><th>Value</th><th>Date</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($ENMetal as $item)
                {{-- */$x++;/* --}}
                <tr>

                    <td>{{ $item->RecordName }}</td><td>{{ $item->FormName }}</td><td>{{ $item->Value4 }}</td><td>{{ $item->Date }}</td>

                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection