   function addtocart(proid){
	  /* alert(proid);
	  if (proid.length == 0) { 
        alert('No Item was selected');
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                alert(xmlhttp.responseText);
            }
        };
        xmlhttp.open("GET", "php/setidcookie.php?term=" + proid, true);
        xmlhttp.send();
    }*/
	/*var ele= ["item1","item2","it3m3"];
	if (typeof(Storage) !== "undefined") {
    // Store
    localStorage.setItem("lastname", ele);
    // Retrieve
    alert(localStorage.getItem("lastname"));
} else {
    alert("Sorry, your browser does not support Web Storage...");
}*/

Cookies.set('name', ["item1","item2","it3m3"]);
var ele= Cookies.getJSON('name');
alert(ele[2]);
 // => { foo: 'bar' }
 