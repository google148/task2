<h1>This is all list of tables</h1>
 
<table border="1">
<tr>
    <td>id</td>
    <td>lectures_name</td>
    <td>gender</td>
    <td>phone</td>
    <td>email</td>
    <td>address</td>
    <td>faculty</td>
</tr>

@foreach ($teachers as $teacher)
<tr>
    <td>{{$teacher ['id'] }}</td>
    <td>{{$teacher ['lectures_name']}}</td>
    <td>{{$teacher ['gender']}}</td>
    <td>{{$teacher ['phone']}}</td>
    <td>{{$teacher ['email_id']}}</td>
    <td>{{$teacher ['address']}}</td>
    <td>{{$teacher ['faculty']}}</td>
</tr>
    
@endforeach

</table>

{{-- <a href="#" class="btn btn-primary" >Export as CSV</a> --}}

<span>
    {{$teachers -> links()}}
</span>
<style>.w-5{
    display: none;
}</style>