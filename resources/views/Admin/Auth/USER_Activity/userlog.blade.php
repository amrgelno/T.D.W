<table  border="1"  class="table table-responsive"  id="#User_login" >

<tr class="trc" align='center'>
    <th scope="col"><span align='center'> # </span> UID-رقم مستخدم</th>
<th scope="col">Name-أسم مستخدم</th>
<th scope="col">logintime-وقت دخول</th>
<th scope="col">logouttime- وقت خروج </th>

</tr>



@php   $i=0;   @endphp

@foreach($logtimes  as $logtime)

<tr>
<td> {{++$i}}     </td>


<td><input type='text'  name='Name' value='{{ $logtime ->user->Name ?? '' }}'  disabled>  </td>

<td> <input type='text'  name='Email' value='{{ $logtime -> logintime  }}'   disabled>  </td>

<td> <input type='text'  name='phone' value='{{ $logtime -> logouttime  }}' disabled >  </td>

</tr>
    @endforeach
</table>
