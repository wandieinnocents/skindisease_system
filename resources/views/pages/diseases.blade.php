@extends('layouts.app')

@section('title')

@endsection

@section('content')
<div class="wrapper">

  @include('includes.header')
  <!-- Left side column. contains the logo and sidebar -->

  <!--- sidebar -->

  @include('includes.sidebar')
  <!-- end of sidebar -->




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      DISEASES -
        <small>Skin Diseases</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">DISEASES</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">SKIN DISEASES CATEGORIES</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>

                  <th>Disease</th>
                  <th>Symptom</th>
                  <th>Diagnosis</th>

                  <th>Image</th>



                </tr>
                </thead>
                <tbody>
                  @foreach($skin_diseases as $skin_disease)

                  <div class="modal fade" id="modal-default">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close btn-success" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">MODAL</h4>
                        </div>
                        <div class="modal-body">
                          <p>{{  $skin_disease->disease_name  }}&hellip;</p>
                        </div>
                        <img src="{{ $skin_disease->disease_image }}" style="width:100%;">
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>


                <tr>
                  <td>{{ $skin_disease->id }}</td>



                  <td>{{ $skin_disease->disease_name }} </td>
                  <td>{{ $skin_disease->symptom }} </td>
                  <td>{!! $skin_disease->disease_diagnosis !!}</td>


                <!-- <td> {!! str_limit($skin_disease->disease_diagnosis, 4) !!}</td> -->
                <!-- <td> {!! str_limit($skin_disease->disease_diagnosis, $limit = 6, $end = '')  !!}</td> -->




                  <td>
                  <a href="{{ $skin_disease->disease_image }}">  <buttion class="btn btn-success">
                    VIEW DISEASE IMAGE</button></a>


                    <!-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                      Launch Default Modal
                    </button> -->



                  </td>

                  <!-- <td>
                    <img src="{{ $skin_disease->disease_image }}" style="width: 20%;height: 20%;">
                  </td> -->







                </tr>

                @endforeach


                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->





          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
