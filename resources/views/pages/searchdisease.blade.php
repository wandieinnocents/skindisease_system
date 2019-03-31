@extends('layouts.app')

@section('title')

@endsection

@section('content')


<!-- search disease -->

<!-- <form action="{{ URL::to('/searchdisease') }}" method="POST" class="sidebar-form">
  {{ csrf_field() }}
  <div class="input-group">
    <input type="text" name="q" class="form-control" placeholder="Search...">
    <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
  </div>
</form> -->



<!--  -->
<br>



    @if(isset($details))
    <p>Search results for query <b>{{$query }} </b> are..</p>

    <center><h2>SHOWING SEARCH RESULTS HERE FOR YOUR QUERY... </h2>
</center>
.<table class='table table-striped table-bordered table-hover table-condensed'>
  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
        <th>Symptom</th>
          <th>Diagnosis</th>
          <th>Image</th>

    </tr>
  </thead>

<tbody>
    @foreach($details as $disease)
    <tr>
      <td>{{ $disease->id }}</td>
      <td>{{ $disease->disease_name }}</td>
      <td>{{ $disease->symptom }}</td>
      <td>{!! $disease->disease_diagnosis !!}</td>
      <td><a href="{{ $disease->disease_image }}"<button  class="btn btn-lg btn-danger ">VIEW DISEASE</button>
      </td>
    </tr>
    @endforeach
  </tbody>



</table>
  <!-- else if no details -->


   @elseif(isset($message))

   <center>  <p> {{ $message }}</p></center>

   

   @endif


<!-- end of diseases -->

@endsection
