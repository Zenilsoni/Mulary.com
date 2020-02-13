@extends('layout.master')

@push('plugin-styles')
    {!! Html::style('/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') !!}
@endpush

@section('content')


    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
        </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <div class="input-group date datepicker dashboard-date mr-2 mb-2 mb-md-0 d-md-none d-xl-flex" id="dashboardDate">
                <span class="input-group-addon bg-transparent"><i data-feather="calendar" class=" text-primary"></i></span>
                <input type="text" class="form-control">
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-12 col-xl-12 grid-margin stretch-card">
            <div class="card overflow-hidden">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
                        <h6 class="card-title mb-0">Where would you like to post?</h6>
                    </div>
                    <div class="row align-items-start mb-2">
                        <div class="col-md-7">
                            <button type="button" class="btn btn-primary btn-icon-text mb-1 mb-md-0">
                                <i class="btn-icon-prepend" data-feather="facebook"></i>
                                Facebook
                            </button>
                            <button type="button" class="btn btn-danger btn-icon-text mb-1 mb-md-0">
                                <i class="btn-icon-prepend" data-feather="instagram"></i>
                                Instagram
                            </button>
                        </div>

                    </div>



                    <?php
                    for($i=1; $i<=10; $i++){ ?>
                    <div class="myslides" id="row<?php echo $i?>" style="display: none;">
                        <div class="row">
                            <div class="col-md-6 col-xl-6">
                                <div class="card-body">
                                    <img class="img-fluid" src="{{ url('https://via.placeholder.com/453x283') }}" alt="">
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-6">
                                <div class="card-body">
                                    <div class="description">
                                        <p>Description will display here <?php echo $i?></p>
                                    </div>
                                    <div style="margin: 10px;">
                                        <button class="btn btn-success btn-lg" onclick="plusSlides(1);">Post now for $5.00 <?php echo $i?></button>
                                    </div>
                                    <div style="margin: 10px;">
                                        <button class="btn btn-danger btn-lg" onclick="plusSlides(1);">Ignore</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>




                    {{--          <div class="myslides" id="row2"style="display: none;">--}}
                    {{--              <div class="row">--}}
                    {{--                  <div class="col-md-6 col-xl-6">--}}
                    {{--                      <div class="card-body">--}}
                    {{--                          <img class="img-fluid" src="{{ url('https://via.placeholder.com/453x283') }}" alt="">--}}
                    {{--                      </div>--}}
                    {{--                  </div>--}}

                    {{--                  <div class="col-md-6 col-xl-6">--}}
                    {{--                      <div class="card-body">--}}
                    {{--                          <div class="description">--}}
                    {{--                              <p>Description will display here div2</p>--}}
                    {{--                          </div>--}}
                    {{--                          <div style="margin: 10px;">--}}
                    {{--                              <button class="btn btn-success btn-lg" onclick="plusSlides(1);">Post now for $5.00</button>--}}
                    {{--                          </div>--}}
                    {{--                          <div style="margin: 10px;">--}}
                    {{--                              <button class="btn btn-danger btn-lg" onclick="plusSlides(1);">Ignore</button>--}}
                    {{--                          </div>--}}


                    {{--                      </div>--}}
                    {{--                  </div>--}}
                    {{--              </div>--}}
                    {{--          </div>--}}


                    {{--          <div class="myslides" id="row3" style="display: none;">--}}
                    {{--              <div class="row">--}}
                    {{--                  <div class="col-md-6 col-xl-6">--}}
                    {{--                      <div class="card-body">--}}
                    {{--                          <img class="img-fluid" src="{{ url('https://via.placeholder.com/453x283') }}" alt="">--}}
                    {{--                      </div>--}}
                    {{--                  </div>--}}

                    {{--                  <div class="col-md-6 col-xl-6">--}}
                    {{--                      <div class="card-body">--}}
                    {{--                          <div class="description">--}}
                    {{--                              <p>Description will display here div3</p>--}}
                    {{--                          </div>--}}
                    {{--                          <div style="margin: 10px;">--}}
                    {{--                              <button class="btn btn-success btn-lg" onclick="plusSlides(1);">Post now for $5.00</button>--}}
                    {{--                          </div>--}}
                    {{--                          <div style="margin: 10px;">--}}
                    {{--                              <button class="btn btn-danger btn-lg" onclick="plusSlides(1);">Ignore</button>--}}
                    {{--                          </div>--}}


                    {{--                      </div>--}}
                    {{--                  </div>--}}
                    {{--              </div>--}}
                    {{--          </div>--}}
                </div>
            </div>
        </div>
    </div> <!-- row -->

    <script>

        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("myslides");

            //if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            slides[slideIndex-1].style.display = "block";

        }

    </script>




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
