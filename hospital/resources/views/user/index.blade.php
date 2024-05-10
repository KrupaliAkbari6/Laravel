@extends('template.layout')

@section('content')

<h1>The Hospital Details here...</h1>
<button type=submit class="btn btn-primary float-end mb-3 ">
    <a href="{{route('hospital.create')}}" class="text-light">Add Case+</a>
</button>

<!-- {{Auth::user()}} -->
@auth
<p><mark>Welcome <b>{{Auth::user()->name}}</b> to myblog</mark></p>
@endauth

@guest
    <p>welcome Guest!! Please login for more Information <a href="http://localhost:8000/login">login</a></p>
@endguest
<table class="table table-primary table-hover table-bordered">
        <thead>
            <tr>
                <th>Patient Id</th>
                <th>Patient Name</th>
                <th>Patient Mobile no</th>
                <th>Patient Desiese</th>
                <th>Patient Medicine</th>
                <!-- <th>View</th> -->
                @auth
                <th>Edit</th>
                <th>Delete</th>
                @endauth
            </tr>
        </thead>
        @foreach($data as $patients)
                <tbody>
                    <tr>
                    <td>{{$patients->id}}</td>
                    <td><a href="{{route('hospital.show',$patients->id)}}">{{$patients->Name}}</a></td>
                    <td>{{$patients->Moblileno}}</td>
                    <td>{{$patients->Disease}}</td>
                    <td>{{$patients->Medicines}}</td>
                    <!-- <td><button type=submit class="btn btn-primary"><a href="{{route('hospital.show',$patients->id)}}">view</a></button></td> -->
                    @auth
                    <td><button type=submit class="btn btn-warning"><a href="{{route('hospital.edit',$patients->id)}}">Edit</a></button></td>
                    <td>
                        <form action="{{route('hospital.destroy',$patients->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type=submit class="btn btn-danger" value=trash>
                        </form>
                    </td>
                    @endauth

                    </tr>
                </tbody>
        @endforeach
</table>

{{$data->links()}}

@endsection