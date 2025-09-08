<!DOCTYPE html>
<html>
<head>
<script>
  let xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if(this.readyState == 4 && this.status == 200) {
      console.log(this.responseText);
       data = JSON.parse(this.responseText);
      console.log(data.student);
    }
  };
  xhttp.open("POST","http://localhost/157-1.json",true);
  xhttp.send();
</script>
</head>
</html>
