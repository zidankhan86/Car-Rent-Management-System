@extends('backend.master')

@section('content')


<br><strong class="text-info">Booking Table</strong><br>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">User Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Location</th>
        <th scope="col">City</th>
        <th scope="col">Road</th>
        <th scope="col">Orders Time</th>
        <th>Assign</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($userBooking as $item)


      <tr>
        <th scope="row">{{ $item->id }}</th>
        <td>{{ $item->name }}</td>
        <td>{{ $item->phone }}</td>
        <td>{{ $item->location }}</td>
        <td>{{ $item->city }}</td>
        <td>{{ $item->road }}</td>
        <td>{{ $item->created_at->diffForHumans() }}</td>
        <td>




                @if (auth()->user()->role == 'admin')
            {{-- @if ($item->status == 'Assigned' 'Confiremd') --}}

            @if ($item->status == 'Assigned' || $item->status == 'Confirmed')

                Assigned
            @else
                <a href="{{ route('assigned', $item->id) }}" class="btn btn-success">Assign</a>
            @endif
            @else
            @if ($item->status == 'Confirmed')
                <button class="btn btn-danger">Picked</button> By <strong>{{ auth()->user()->name }}</strong>
            @else
                <a href="{{ route('Confirmed', $item->id) }}" class="btn btn-success" @if ($item->status == 'Confirmed') disabled @endif>Pick Ride</a>
            @endif
            @endif



       </td>



      </tr>
      @endforeach
    </tbody>
  </table>

@endsection
