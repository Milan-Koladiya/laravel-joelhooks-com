<x-header title="This is header component"/>

// include other file
@include('test',["name"=> "Milan"])

// If-Else condition
@if(count($user) > 0 )
    <h1>Hello Your user is more than 0</h1>
@else 
    <h2>Sorry Your user is less then 0</h2> 
@endif

@foreach ($user as $use)
<h1>{{$use}}</h1>
@endforeach

// Fotter component
<x-footer title="This is footer component" />

<script>
    console.log("Hello This is laravel");
</script>

<style>
    h1 {
        color: red
    }
</style>