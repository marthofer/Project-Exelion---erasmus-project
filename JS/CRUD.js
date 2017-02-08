
function edit_id(id)
{
 if(confirm('Are you sure that you want to edit this user?'))
 {
  window.location.href='edit_data.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Are you sure that you want to delete this user?'))
 {
  window.location.href='CRUD.php?delete_id='+id;
 }
}
