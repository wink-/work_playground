@extends('layouts.master')

@section('content')
<div class="col-xs-3" style="height: 200px">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover table-condensed">
            <caption><strong>Ovens</strong></caption>
            <thead>
                <tr>
                    <th>Name</th><th>Temperature</th><th>Reading Time</th>
                </tr>
            </thead>
            <tbody>

                {!! $grieve->temperature < 150 ? '<tr>' : '<tr class="hot">'!!}
                    <td>Grieve</td>
                    <td>{{$grieve->temperature}}</td>
                    <td>{{$grieve->created_at->toDayDateTimeString()}}</td>
                </tr>
                {!! $quincy->temperature < 150 ? '<tr>' : '<tr class="hot">'!!}
                    <td>Quincy</td>
                    <td>{{$quincy->temperature}}</td>
                    <td>{{$quincy->created_at->toDayDateTimeString()}}</td>
                </tr>
                {!! $lindberg->temperature < 150 ? '<tr>' : '<tr class="hot">'!!}
                    <td>Lindberg</td>
                    <td>{{$lindberg->temperature}}</td>
                    <td>{{$lindberg->created_at->toDayDateTimeString()}}</td>
                </tr>
            </tbody>   
        </table>
    </div>
</div>
@endsection