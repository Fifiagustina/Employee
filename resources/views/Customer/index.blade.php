DATA
<br/>
  @foreach ($customer as $customerlist)
  {{ $customerlist->customer_id}}
  {{ $customerlist->name}}
  {{ $customerlist->address}}
    <a href="/Customer/{{$customerlist->customer_id}}">show</a>
<br/>
<!-- http://localhost:8000/Customer/3 -->
<a href="/Customer/{{$customerlist->customer_id}}/edit">edit</a>
<br/>

<form action="/Customer/
{{$customerlist->customer_id}}" method="post">
  {{csrf_field()}}
  {{method_field('DELETE')}}
  <button>X</button>
</form>
@endforeach

<a href="{{ url('Customer/create') }}">
back
</a>
