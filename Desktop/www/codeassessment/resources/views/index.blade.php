@extends('layout')

@section('content')

  <div class="content">
      <div class="title m-b-md">
        Vierdagse runn
      </div>

      <div class="links">
        <p>
        <B><a href="/code/create">inschrijven</a></B>
       </p>
      </div>
      <div>
        @foreach($codeassessments as $codeassessment)

          <h3>{{ $codeassessment->Naam }}</h3>

            {{ $codeassessment->afstand }}


        @endforeach
      </div>
  </div>

@endsection
