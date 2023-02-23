<h1>{{$heading}}</h1>
@if(count($jobs)==0)
 <p>No listings found.</p>
@endif
@foreach($jobs as $job)
    <h2>{{$job["title"]}}</h2>
    <p>{{$job["description"]}}</p>
@endforeach
