DATA
<br>
  @foreach ($employee as $employeelist)
  {{ $employeelist->employee_id}}
  {{ $employeelist->employee_name}}
  {{ $employeelist->employee_address}}
  {{ $employeelist->employee_phone_number}}
  <br>
    <a href="/Employee/{{$employeelist->employee_id}}">show</a>
<br/>
<!-- http://localhost:8000/Customer/3 -->
<a href="/Employee/{{$employeelist->employee_id}}/edit">edit</a>
<br/>

<form action="/Employee/
{{$employeelist->employee_id}}" method="post">
  {{csrf_field()}}
  {{method_field('DELETE')}}
  <button>X</button>
</form>
@endforeach

<a href="{{ url('Employee/create') }}">
back
</a>
