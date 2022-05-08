@extends('layouts.header',['title'=>'Add Gallery Image'])
@section('body')
<div class="row"> 

<div class="form-group">
    <div class="col-md-4"><label class="control-label " for="start date"> Start Date </label> 
    <input type = "text" class="form-control" id = "datepicker-13"></div>
    <div class="col-md-4"><label class="control-label " for="end date"> End Date </label> <input type = "text" class="form-control" id = "datepicker-14"></div>

    <div class="col-md-2"><input type="button" value="render" class="btn btn-primary " onclick="chart_line()"></div>
    </div>
    <canvas id="myChart" style="width:100%;max-width:700px"></canvas>
</div>
</div>
@endsection
@section('javascript')
 <script src="{{asset('js/custom.js')}}"></script>
@endsection