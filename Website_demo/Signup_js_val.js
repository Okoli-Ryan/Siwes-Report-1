function check(str){

    request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if(this.readyState == 4 && this.status == 200) {
            if (this.responseText !== "already in use") {
                document.getElementById("submit_button").disabled = false;
                document.getElementById("username").style.borderBottomColor="#839bcb";

            }

            else {
                document.getElementById("username").style.borderBottomColor="red";
                document.getElementById("submit_button").disabled = true;
            }
        }
    };
    nocache = "&nocache=" + Math.random() * 1000000;
    request.open("GET", "List_users.php?q=" + str + nocache, true);
    request.send();

}