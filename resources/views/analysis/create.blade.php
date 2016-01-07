@extends('layouts.master')

@section('content')

    <h1>Create New Analysi</h1>
    <hr/>

    {!! Form::open(['url' => 'analysis', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('RecordName') ? 'has-error' : ''}}">
                {!! Form::label('RecordName', 'Recordname: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('RecordName', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('RecordName', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('FormName') ? 'has-error' : ''}}">
                {!! Form::label('FormName', 'Formname: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('FormName', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('FormName', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('Date') ? 'has-error' : ''}}">
                {!! Form::label('Date', 'Date: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::input('datetime-local', 'Date', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('Date', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('Value1') ? 'has-error' : ''}}">
                {!! Form::label('Value1', 'Value1: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('Value1', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('Value1', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('Value2') ? 'has-error' : ''}}">
                {!! Form::label('Value2', 'Value2: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('Value2', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('Value2', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('Value3') ? 'has-error' : ''}}">
                {!! Form::label('Value3', 'Value3: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('Value3', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('Value3', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('Value4') ? 'has-error' : ''}}">
                {!! Form::label('Value4', 'Value4: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('Value4', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('Value4', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('Value5') ? 'has-error' : ''}}">
                {!! Form::label('Value5', 'Value5: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('Value5', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('Value5', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('Value6') ? 'has-error' : ''}}">
                {!! Form::label('Value6', 'Value6: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('Value6', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('Value6', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('Value7') ? 'has-error' : ''}}">
                {!! Form::label('Value7', 'Value7: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('Value7', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('Value7', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('Value8') ? 'has-error' : ''}}">
                {!! Form::label('Value8', 'Value8: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('Value8', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('Value8', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('Value9') ? 'has-error' : ''}}">
                {!! Form::label('Value9', 'Value9: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('Value9', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('Value9', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('Value10') ? 'has-error' : ''}}">
                {!! Form::label('Value10', 'Value10: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('Value10', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('Value10', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('Value11') ? 'has-error' : ''}}">
                {!! Form::label('Value11', 'Value11: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('Value11', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('Value11', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('Value12') ? 'has-error' : ''}}">
                {!! Form::label('Value12', 'Value12: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('Value12', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('Value12', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('Value13') ? 'has-error' : ''}}">
                {!! Form::label('Value13', 'Value13: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('Value13', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('Value13', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('Value14') ? 'has-error' : ''}}">
                {!! Form::label('Value14', 'Value14: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('Value14', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('Value14', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('Value15') ? 'has-error' : ''}}">
                {!! Form::label('Value15', 'Value15: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('Value15', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('Value15', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('Value16') ? 'has-error' : ''}}">
                {!! Form::label('Value16', 'Value16: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('Value16', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('Value16', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('Value17') ? 'has-error' : ''}}">
                {!! Form::label('Value17', 'Value17: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('Value17', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('Value17', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('Value18') ? 'has-error' : ''}}">
                {!! Form::label('Value18', 'Value18: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('Value18', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('Value18', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('Value19') ? 'has-error' : ''}}">
                {!! Form::label('Value19', 'Value19: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('Value19', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('Value19', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('Value20') ? 'has-error' : ''}}">
                {!! Form::label('Value20', 'Value20: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('Value20', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('Value20', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('EmpCode') ? 'has-error' : ''}}">
                {!! Form::label('EmpCode', 'Empcode: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('EmpCode', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('EmpCode', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('TimeStamp') ? 'has-error' : ''}}">
                {!! Form::label('TimeStamp', 'Timestamp: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::input('datetime-local', 'TimeStamp', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('TimeStamp', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('DeleteVistible') ? 'has-error' : ''}}">
                {!! Form::label('DeleteVistible', 'Deletevistible: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('DeleteVistible', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('DeleteVistible', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('IDy') ? 'has-error' : ''}}">
                {!! Form::label('IDy', 'Idy: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('IDy', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('IDy', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ActValue1') ? 'has-error' : ''}}">
                {!! Form::label('ActValue1', 'Actvalue1: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ActValue1', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ActValue1', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ActValue2') ? 'has-error' : ''}}">
                {!! Form::label('ActValue2', 'Actvalue2: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ActValue2', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ActValue2', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ActValue3') ? 'has-error' : ''}}">
                {!! Form::label('ActValue3', 'Actvalue3: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ActValue3', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ActValue3', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ActValue4') ? 'has-error' : ''}}">
                {!! Form::label('ActValue4', 'Actvalue4: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ActValue4', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ActValue4', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ActValue5') ? 'has-error' : ''}}">
                {!! Form::label('ActValue5', 'Actvalue5: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ActValue5', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ActValue5', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ActValue6') ? 'has-error' : ''}}">
                {!! Form::label('ActValue6', 'Actvalue6: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ActValue6', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ActValue6', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ActValue7') ? 'has-error' : ''}}">
                {!! Form::label('ActValue7', 'Actvalue7: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ActValue7', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ActValue7', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ActValue8') ? 'has-error' : ''}}">
                {!! Form::label('ActValue8', 'Actvalue8: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ActValue8', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ActValue8', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ActValue9') ? 'has-error' : ''}}">
                {!! Form::label('ActValue9', 'Actvalue9: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ActValue9', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ActValue9', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ActValue10') ? 'has-error' : ''}}">
                {!! Form::label('ActValue10', 'Actvalue10: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ActValue10', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ActValue10', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ActValue11') ? 'has-error' : ''}}">
                {!! Form::label('ActValue11', 'Actvalue11: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ActValue11', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ActValue11', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ActValue12') ? 'has-error' : ''}}">
                {!! Form::label('ActValue12', 'Actvalue12: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ActValue12', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ActValue12', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ActValue13') ? 'has-error' : ''}}">
                {!! Form::label('ActValue13', 'Actvalue13: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ActValue13', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ActValue13', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ActValue14') ? 'has-error' : ''}}">
                {!! Form::label('ActValue14', 'Actvalue14: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ActValue14', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ActValue14', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ActValue15') ? 'has-error' : ''}}">
                {!! Form::label('ActValue15', 'Actvalue15: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ActValue15', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ActValue15', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ActValue16') ? 'has-error' : ''}}">
                {!! Form::label('ActValue16', 'Actvalue16: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ActValue16', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ActValue16', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ActValue17') ? 'has-error' : ''}}">
                {!! Form::label('ActValue17', 'Actvalue17: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ActValue17', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ActValue17', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ActValue18') ? 'has-error' : ''}}">
                {!! Form::label('ActValue18', 'Actvalue18: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ActValue18', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ActValue18', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ActValue19') ? 'has-error' : ''}}">
                {!! Form::label('ActValue19', 'Actvalue19: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ActValue19', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ActValue19', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ActValue20') ? 'has-error' : ''}}">
                {!! Form::label('ActValue20', 'Actvalue20: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ActValue20', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ActValue20', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection