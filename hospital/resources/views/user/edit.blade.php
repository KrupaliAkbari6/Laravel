@extends('template.layout')
@push('title')
Edit page
@endpush
@section('content')
<h3>Fill the Patients Details...</h3>
<hr>
<form action="{{route('hospital.update',$hospital->id)}}" method="post">
    @csrf
    @method('patch')
  <div class="mb-3">
    <label  class="form-label">Patient Name</label>
    <input type="text" class="form-control" name="Name" value="{{$hospital->Name}}">
  </div>
  <div class="mb-3">
    <label  class="form-label">Patient Mobile no</label>
    <input type="text" class="form-control" name="Moblileno"  value="{{$hospital->Moblileno}}">
    
  </div>
  <div class="mb-3">
    <label  class="form-label">Patient Desiese</label>
    <input type="text" class="form-control" name="Disease"  value="{{$hospital->Disease}}">
  </div>
  <div class="mb-3">
    <label  class="form-label">Patient Medicine</label>
    <textarea id="editor" class="form-control" name="Medicines">{{$hospital->Medicines}}</textarea>
    <script>
          ClassicEditor
          .create( document.querySelector( '#editor' ) )
          .then( editor => {
                console.log( editor );
          } )
          .catch( error => {
                console.error( error );
          } );
    </script>
  </div>
  <div class="mb-3">
    <label  class="form-label">slug</label>
    <input type="text" class="form-control" name="slug" value="{{$hospital->slug}}" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection