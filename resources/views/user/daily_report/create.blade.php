@extends ('common.user')
@section ('content')

<h2 class="brand-header">日報作成</h2>
<div class="main-wrap">
  <div class="container">
    {!! Form::open(['route' => 'report.store']) !!}
      <div class="form-group form-size-small">
      {!! Form::input('date','reporting_time',null,['class' => 'form-control']) !!}
      <span class="help-block"><font color='red'>{{ $errors->has('reporting_time')? $errors->first('reporting_time') : '' }}</font></span>
      </div>
      <div class="form-group">
        {!! Form::text('title',null,['placeholder' => 'Title','class' => 'form-control']) !!}
        <span class="help-block"><font color='red'>{{ $errors->has('title')? $errors->first('title') : '' }}</font></span>
      </div>
      <div class="form-group">
      {!! Form::textarea('content',null,['placeholder' => 'Contents', 'class' => 'form-control','size' => '300x10']) !!}
        <span class="help-block"><font color='red'>{{ $errors->has('content')? $errors->first('content') : '' }}</font></span>
      </div>
      {!! Form::submit('Add',['class' => 'btn btn-success pull-right']) !!}
    {!! Form::close() !!}
  </div>
</div>

@endsection

