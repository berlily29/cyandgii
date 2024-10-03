
<table>
<tr>
<th> name </th>
<th> age </th>
</tr>
@foreach ($users as $user) 
<tr>
    <td>{{$user['name']}} </td>
    <td>{{$user['age']}} </td>
</tr>
@endforeach
</table>



<small>{{$otherData}}</small>