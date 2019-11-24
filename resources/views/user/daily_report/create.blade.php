@extends ('common.user')
@section ('content')

<h2 class="brand-header">日報作成</h2>
<div class="main-wrap">
  <div class="container {{ $errors->has('date')? 'has-error' : '' }}">
    {!! Form::open(['route' => 'report.store'])!!}
      {!! Form::input('date','reporting_time',null,['class' => 'form-control']) !!}
      <span class="help-block"></span>
      <div class="form-group{{ $errors->has('text')? 'has-error' : '' }}">
        {!! Form::text('title',null,['placeholder' => 'Title','class' => 'form-control']) !!}
        <span class="help-block"></span>
      </div>
      <div class="form-group {{ $errors->has('textarea')? 'has-error' : '' }}">
      {!! Form::textarea('contents',null,['placeholder' => 'Contents', 'class' => 'form-control','size' => '300x10']) !!}
        <span class="help-block"></span>
      </div>
      {!! Form::submit('Add',['class' => 'btn btn-success pull-right']) !!}
    {!! Form::close() !!}
  </div>
</div>

@endsection

