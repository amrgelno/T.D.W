<table  border="1"  class="table table-responsive"  id="#User_login" >

<tr class="trc" align='center'>
<th scope="col"><span align='center'> # </span></th>
<th scope="col">UID-رقم مستخدم</th>
<th scope="col">Name-أسم مستخدم</th>
<th scope="col">Transaction- رقم العملية </th>
<th scope="col">Transaction_Type- نوع العملية </th>
<th scope="col">التاريخ</th>

</tr>

<tr>

@php   $i=0;   @endphp

@foreach($activitylogs  as $activitylog)


<td> {{++$i}}     </td>


<td><input type='text'  name='Name' value='{{ $activitylog ->user->id ??'' }}' >  </td>

<td> <input type='text'  name='Email' value='{{ $activitylog ->user-> Name  }}' >  </td>

<td> <input type='text'  name='phone' value='{{ $activitylog -> Transaction_id  }}' >  </td>

<td> <input type='text'  name='phone' value='{{ $activitylog -> Transaction_Type  }}' >  </td>


<td> <input type='text'  name='passport_num' value='{{ $activitylog -> created_at	  }}' >  </td>

</div>
</td>
</tr>
    @endforeach
</table>
