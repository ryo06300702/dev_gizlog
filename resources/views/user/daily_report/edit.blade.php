@extends ('common.user')
@section ('content')

<h1 class="brand-header">日報編集</h1>
<div class="main-wrap">
  <div class="container">
    {!! Form::open(['route' => ['report.update',$daily->id],'method' => 'PUT'])!!}
      <div class="form-group form-size-small">
        {!! Form::date('reporting_time',$daily->reporting_time->format('Y-m-d'),['class' => 'form-control']) !!}
      <span class="help-block"><font color='red'>{{ $errors->has('reporting_time')? $errors->first('reporting_time') : '' }}</font></span>
      </div>
      <div class="form-group">
        {!! Form::text('title',$daily->title,['placeholder' => 'Title', 'class' => 'form-control']) !!}
      <span class="help-block"><font color='red'>{{ $errors->has('title')? $errors->first('title') : '' }}</font></span>
      </div>
      <div class="form-group">
        {!! Form::textarea('content',$daily->content,['placeholder' => 'Contents', 'class' => 'form-control','size' =>'300x10']) !!}
      <span class="help-block"><font color='red'>{{ $errors->has('content')? $errors->first('content') : '' }}</font></span>
      </div>
        {!! Form::submit('Update',['class' => 'btn btn-success pull-right']) !!}
    {!! Form::close() !!}
  </div>
</div>

@endsection

