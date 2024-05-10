@extends('template.layout')
@push('title')
Form page
@endpush
@section('content')
<h3>Fill the Patients Details...</h3>
<hr>
<form action="{{route('hospital.store')}}" method="post">
    @csrf
  <div class="mb-3">
    <label  class="form-label">Patient Name</label>
    <input type="text" class="form-control" name="Name" required  >
   
  </div>
  <div class="mb-3">
    <label  class="form-label">Patient Mobile no</label>
    <input type="text" class="form-control" name="Moblileno"  >
    @error('Moblileno')
    <ul><li><b><mark>{{$message}}</mark></b></li></ul>
    @enderror
  </div>
  <div class="mb-3">
    <label  class="form-label">Patient Desiese</label>
    <input type="text" class="form-control" name="Disease"  >
    @error('Disease')
    <ul><li>{{$message}}</li></ul>
    @enderror
  </div>
  <div class="mb-3">
    <label  class="form-label">Patient Medicine</label>
    <textarea id="editor" class="form-control" name="Medicines" ></textarea>
    @error('Medicines')
    <ul><li>{{$message}}</li></ul>
    @enderror
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
    <label  class="form-label">Slug</label>
    <input type="text" class="form-control" name="slug"  >
    @error('slug')
    <ul><li>{{$message}}</li></ul>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection