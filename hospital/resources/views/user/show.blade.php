@extends('template.layout')
@push('title')
Show page
@endpush
@section('content')
<h2>Show Patient Detail here...</h2>

<h3>Patient Id</h3>
<p>{{$hospital->id}}</p>

<h3>Patient Name</h3>
<p>{{$hospital->Name}}</p>

<h3>Patient Mobile No</h3>
<p>{{$hospital->Moblileno}}</p>

<h3>Patient Disease</h3>
<p>{{$hospital->Disease}}</p>

<h3>Patient Medicines</h3>
<p>{{$hospital->Medicines}}</p>

@php
    $i=1;
@endphp
<ul>
    @forelse($hospital->getVisits as $visit)
    
        <li>
            <h4>Visits  {{$i++}}</h4>
            <p>{{$visit->med_diseases}}</p>
        </li>
        @empty
        <ul>
            <li>No visits available</li>
        </ul>
    @endforelse
   
    
</ul>

<hr>
<form action="{{route('visit.store')}}" method="post">
    @csrf
    <input type="hidden" name="Patient_id" value="{{$hospital->id}}">
<div class="mb-3">
    <label  class="form-label"><h4>Visit History</h4></label>
    <textarea id="editor" name="med_diseases" class="form-control" ></textarea>
</div>
<button type="submit" class="btn btn-primary" >Visit Info</button>
</form> 
@endsection