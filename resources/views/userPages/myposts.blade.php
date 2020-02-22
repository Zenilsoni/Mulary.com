@extends('layout.master')

@push('plugin-styles')
    {!! Html::style('/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') !!}
@endpush

@section('content')

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">My Posts</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Social Media</th>
                                <th>Date Posted</th>
                                <th>Description</th>
                            </tr>
                            </thead>

                            @if(isset($myposts))
                            @foreach($myposts as $mypost)
                                <tbody>
                                <tr>
                                    <td>{{ $mypost->post_platform }}</td>
                                    <td>{{ $mypost->posted_date }}</td>
                                    <td>{{ $mypost->description }}</td>
                                </tr>
                                </tbody>
                            @endforeach
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>



@endsection

@push('plugin-scripts')
    {!! Html::script('/assets/plugins/chartjs/Chart.min.js') !!}
    {!! Html::script('/assets/plugins/jquery.flot/jquery.flot.js') !!}
    {!! Html::script('/assets/plugins/jquery.flot/jquery.flot.resize.js') !!}
    {!! Html::script('/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') !!}
    {!! Html::script('/assets/plugins/apexcharts/apexcharts.min.js') !!}
    {!! Html::script('/assets/plugins/progressbar-js/progressbar.min.js') !!}
@endpush

@push('custom-scripts')
    {!! Html::script('/assets/js/dashboard.js') !!}
    {!! Html::script('/assets/js/datepicker.js') !!}
@endpush
