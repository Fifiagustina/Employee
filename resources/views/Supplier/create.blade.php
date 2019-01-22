ini create dari view

<form action="{{route('Supplier.store')}}" method="post">
  {{csrf_field() }}
  <input type="text" name="txt_id" /><br />
  <input type="text" name="txt_name" /><br />
  <input type="text" name="txt_address"/><br />

  <input type="submit" name="sbm_save" id="sbm_name" value="simpen" />
</form>
