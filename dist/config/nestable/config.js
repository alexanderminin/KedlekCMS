$('#nestable').nestable({maxDepth: '3'}).on('change', function() {
  var json_text = JSON.stringify($('#nestable').nestable('serialize'));
  $.post("/admin/menu/updateactive", {
    data: json_text
  }, function(response){
    //alert(response);
  });
});

$('#nestable2').nestable({maxDepth: '1'}).on('change', function() {
  var json_text = JSON.stringify($('#nestable2').nestable('serialize'));
  $.post("/admin/menu/update", {
    data: json_text
  }, function(response){
    //alert(response);
  });
});