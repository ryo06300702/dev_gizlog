@extends ('common.user')
@section ('content')

<h2 class="brand-header">日報一覧</h2>
<div class="main-wrap">
  <div class="btn-wrapper daily-report">
    <form>
      <input class="form-control" name="search-month" type="month">
      <button type="submit" class="btn btn-icon"><i class="fa fa-search"></i></button>
    </form>
    <a class="btn btn-icon" href="{{ route('report.create')}}"><i class="fa fa-plus"></i></a>
  </div>
  <div class="content-wrapper table-responsive">
    <table class="table table-striped">
      <thead>
        <tr class="row">
          <th class="col-xs-2">Date</th>
          <th class="col-xs-3">Title</th>
          <th class="col-xs-5">Content</th>
          <th class="col-xs-2"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($dailys as $daily)
          <tr class="row">
            <td class="col-xs-2">{{ $daily->reporting_time }}</td>
            <td class="col-xs-3">{{ $daily->title }}</td>
            <td class="col-xs-5">{{ $daily->content }}</td>
            <td class="col-xs-2"><a class="btn" href="{{ route('report.edit', $daily->id) }}"><i class="fa fa-book"></i></a>
            {!! Form::open(['route' => ['report.edit', $daily->id],'method' => 'GET']) !!}
              {!! Form::submit(null,['class' => 'btn fa fa-book']) !!}
            {!! Form::close() !!}  
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection

