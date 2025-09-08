<!DOCTYPE html>
<html>
<head>
<script>
function emailCheck() {
  let xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if(this.readyState == 4 && this.status == 200) {

      let data = JSON.parse(this.responseText).result;
      if(data == 'none') {
        document.getElementById("status").innerText = "사용 가능";
      } else {
        document.getElementById("status").innerText = "사용 불가";
      }
    }
  };

  let emailAddress = document.getElementById("emailAddress").value;
  xhttp.open("POST","161-2-server.php",true);
  xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");

  xhttp.send("email="+emailAddress);
}

</script>
</head>
<body>
  <input type="email" id="emailAddress"/>
  <input type="button" value="중복 확인" onclick="emailCheck()"/>
  <p id="status"></p>
</body>
</html>
