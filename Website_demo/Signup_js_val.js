function ajaxRequest()
{
    try // Non-IE browser?
    {
        request = new XMLHttpRequest()
    }
    catch(e1)
    {
        try // IE 6+?
        {
            request = new ActiveXObject("Msxml2.XMLHTTP")
        }
        catch(e2)
        {
            try // IE 5?
            {
                request = new ActiveXObject("Microsoft.XMLHTTP")
            }
            catch(e3) // There is no Ajax support
            {
                request = false
            }
        }
    }
    return request
}

function check(str){

    var request = ajaxRequest();

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
