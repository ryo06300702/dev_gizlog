@extends ('common.user')
@section ('content')

<h2 class="brand-header">日報作成</h2>
<div class="main-wrap">
  <div class="container">
    {!! Form::open(['route' => 'report.store']) !!}
      <div class="form-group form-size-small @if(!empty($errors->has('reporting_time'))) has-error @endif">
      {!! Form::input('date','reporting_time',null,['class' => 'form-control']) !!}
      <span class="help-block">{{ $errors->has('reporting_time')? $errors->first('reporting_time') : '' }}</span>
      </div>
      <div class="form-group @if(!empty($errors->has('title'))) has-error @endif">
        {!! Form::text('title',null,['placeholder' => 'Title','class' => 'form-control']) !!}
        <span class="help-block">{{ $errors->has('title')? $errors->first('title') : '' }}</span>
      </div>
      <div class="form-group @if(!empty($errors->has('content'))) has-error @endif">
      {!! Form::textarea('content',null,['placeholder' => 'Contents', 'class' => 'form-control','size' => '300x10']) !!}
        <span class="help-block">{{ $errors->has('content')? $errors->first('content') : '' }}</span>
      </div>
      {!! Form::submit('Add',['class' => 'btn btn-success pull-right']) !!}
    {!! Form::close() !!}
  </div>
</div>

@endsection

