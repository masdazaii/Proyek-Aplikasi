@extends('layouts.main')

@section('css')

@endsection


@section('body')
	 <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Bar chart</h4>
                  <canvas id="barChart" style="height:230px"></canvas>
                </div>
              </div>
            </div>
@endsection

@section('js')
	<script src="{{url('/')}}/purpleadmin/js/chart.js"></script>
@endsection