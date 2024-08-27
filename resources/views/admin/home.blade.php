@extends('admin.layouts.main')
@section('title', 'لوحة التحكم | الصفحة الرئيسية')

@section('content')

<div class="body flex-grow-1 px-3">
    <div class="container-lg">
      <div class="row">

        <div class="col-sm-6 col-lg-3">
          <div class="card mb-4 text-white bg-primary">
            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
              <div>
                <div class="fs-4 fw-semibold"><span class="fs-6 fw-normal">( -12.4% <i
                      class="fa-solid fa-arrow-down-long icon"></i> )</span></div>
                <div> 26K المستخدمين</div>
              </div>
            </div>
            <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
              <canvas class="chart" id="card-chart1" height="70"></canvas>
            </div>
          </div>
        </div>

        <!-- /.col-->
        <div class="col-sm-6 col-lg-3">
          <div class="card mb-4 text-white bg-info">
            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
              <div>
                <div class="fs-4 fw-semibold"> <span class="fs-6 fw-normal">( 40.9% <i
                      class="fa-solid fa-arrow-down-long icon"></i> )</span></div>
                <div> $6.200 الدخل</div>
              </div>
            </div>
            <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
              <canvas class="chart" id="card-chart2" height="70"></canvas>
            </div>
          </div>
        </div>

        <!-- /.col-->
        <div class="col-sm-6 col-lg-3">
          <div class="card mb-4 text-white bg-warning">
            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
              <div>
                <div class="fs-4 fw-semibold"> <span class="fs-6 fw-normal">( 84.7% <i
                      class="fa-solid fa-arrow-down-long icon"></i> )</span></div>
                <div> 2.49% معدل التقييم</div>
              </div>
            </div>
            <div class="c-chart-wrapper mt-3" style="height:70px;">
              <canvas class="chart" id="card-chart3" height="70"></canvas>
            </div>
          </div>
        </div>

        <!-- /.col-->
        <div class="col-sm-6 col-lg-3">
          <div class="card mb-4 text-white bg-danger">
            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
              <div>
                <div class="fs-4 fw-semibold"> <span class="fs-6 fw-normal">( -23.6% <i
                      class="fa-solid fa-arrow-down-long icon"></i> )</span></div>
                <div> 44K الدورات</div>
              </div>
              <div class="dropdown">
                <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <svg class="icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                  </svg>
                </button>
                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a
                    class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else
                    here</a></div>
              </div>
            </div>
            <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
              <canvas class="chart" id="card-chart4" height="70"></canvas>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
    </div>
  </div>
  @endsection
