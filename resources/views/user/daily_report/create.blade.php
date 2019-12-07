@extends ('common.user')
@section ('content')

<h2 class="brand-header">日報作成</h2>
<div class="main-wrap">
  <div class="container">
    {!! Form::open(['route' => 'report.store']) !!}
      <div class="form-group form-size-small">
      {!! Form::input('date','reporting_time',null,['class' => 'form-control']) !!}
      </div>
      <span class="help-block"> {{ $errors->has('date')? 'has-error' : '' }}</span>
      <div class="form-group">
        {!! Form::text('title',null,['placeholder' => 'Title','class' => 'form-control']) !!}
        <span class="help-block">{{ $errors->has('title')? 'has-error' : '' }}</span>
      </div>
      <div class="form-group">
      {!! Form::textarea('content',null,['placeholder' => 'Contents', 'class' => 'form-control','size' => '300x10']) !!}
        <span class="help-block"> {{ $errors->has('content')? 'has-error' : '' }}</span>
      </div>
      {!! Form::submit('Add',['class' => 'btn btn-success pull-right']) !!}
    {!! Form::close() !!}
  </div>
</div>

@endsection

