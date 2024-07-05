<?php

<form id="myform" action="proses" method="post" target="_self">
    <input type="text" name="user_name" id="user_name"></input>
    <input type="submit" value="next">
</form>

<script>
var user_name=document.getElementById("user_name");

 var formData=document.getElementById("myform");
 formData.addEventListener("submit", (event) => {

    var Data = new FormData();
    Data.append("user_name", user_name.value);

    var chr = new XMLHttpRequest();
    chr.open("POST", "../../booking/booking_user/process_temp.php", true);
    chr.send(Data);
    chr.onreadystatechange = function() {
    

      if (chr.readyState === 4 && chr.status === 200) {
        console.log(this.status);
        console.log(this.responseText);
      }
    };
    event.preventDefault();
 });
</script>


?>