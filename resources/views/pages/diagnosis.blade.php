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
      CATEGORIES -
        <small>Skin Diseases</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">CATEGORIES</li>
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
                  <th>Category</th>



                </tr>
                </thead>
                <tbody>
                  @foreach($skin_dcategories as $skin_category)
                <tr>
                  <td>{{ $skin_category->id }}</td>

                  <td>{{ $skin_category->name }}</td>

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
