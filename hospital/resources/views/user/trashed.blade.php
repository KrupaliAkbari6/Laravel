@extends('template.layout')

@push('title')
Recycle Bin 
@endpush

@section('content')
<h2>Trashed Data show here...</h2>
<table class="table table-primary table-hover table-bordered">
        <thead>
            <tr>
            <th>Patient Id</th>
            <th>Patient Name</th>
            <th>Patient Mobile no</th>
            <th>Patient Desiese</th>
            <th>Patient Medicine</th>
            <!-- <th>View</th> -->
            <th>Restore</th>
            <th>Delete</th>
            </tr>
        </thead>
        @forelse($data as $patients)
                <tbody>
                    <tr>
                    <td>{{$patients->id}}</td>
                    <td><a href="{{route('hospital.show',$patients->id)}}">{{$patients->Name}}</a></td>
                    <td>{{$patients->Moblileno}}</td>
                    <td>{{$patients->Disease}}</td>
                    <td>{{$patients->Medicines}}</td>
                    <!-- <td><button type=submit class="btn btn-primary"><a href="{{route('hospital.show',$patients->id)}}">view</a></button></td> -->
                    <td>
                        <form action="{{route('hospital.recover',$patients->id)}}" method="post">
                        @csrf
                        <button type=submit class="btn btn-danger">Recover</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{route('hospital.destroy',$patients->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type=submit class="btn btn-danger">Delete</button>
                        </form>
                    </td>

                    </tr>
                </tbody>
                    </tr>
                </tbody>
                @empty
                <ul>
                    <li>No Trash Data available</li>
                </ul>
        @endforelse
</table>


@endsection