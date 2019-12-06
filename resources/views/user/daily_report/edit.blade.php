@extends ('common.user')
@section ('content')

<h1 class="brand-header">日報編集</h1>
<div class="main-wrap">
  <div class="container">
    {!! Form::open(['method' => 'PUT'])!!}
      <div class="form-group form-size-small">
        {!! Form::input('date','reporting_time',null,['class' => 'form-control']) !!}
      <span class="help-block"></span>
      </div>
      <div class="form-group">
        {!! Form::text('title',$daily->title,['placeholder' => 'Title', 'class' => 'form-control']) !!}
      <span class="help-block"></span>
      </div>
      <div class="form-group">
        {!! Form::textarea('content',$daily->content,['placeholder' => 'Contents', 'class' => 'form-control','size' =>'300x10'])!!}
      <span class="help-block"></span>
      </div>
        {!! Form::submit('Update',['class' => 'btn btn-success pull-right']) !!}
    {!! Form::close() !!}
  </div>
</div>

@endsection

