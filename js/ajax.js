function ajaxCheck(str) {
	if(str.length ==0){
		document.getElementById("uname").innerHTML="";
		return;
	} else {
		var request = new XMLHttpRequest();
		request.onreadystatechange = function() {
			if(request.readyState==4 && request.status==200) {
				document.getElementById("uname").innerHTML=request.responseText;
			}
		}
		request.open("GET","checkPassword.php?username="+str,true);
		request.send();
	}
	return;
}
function ajaxCheckPassword(str){
		if(str.length ==0){
		document.getElementById("pass").innerHTML="";
		return;
	} else {
		var request = new XMLHttpRequest();
		request.onreadystatechange = function() {
			if(request.readyState==4 && request.status==200) {
				document.getElementById("pass").innerHTML=request.responseText;
			}
		}
		request.open("GET","checkPassword2.php?password="+str,true);
		request.send();
	}
	return;
}
function toggleNavPanel(x) {
	var panel = document.getElementById(x);
	var arrow = document.getElementById("arrow");
	var maxH="300px";
	if(panel.style.height == maxH) {
		panel.style.height = "0px";
		arrow.innerHTML = "&#9662;";
	} else {
		panel.style.height = maxH;
		arrow.innerHTML ="&#9652;"
	}
}
function confirmText(id) {
	var xmlhttp = false;
		try {
			xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

			} catch (E) {
				xmlhttp = false;
			} finally {xmlhttp=false;}
		} finally {
			xmlhttp= false;
		}
		if(!xmlhttp && typeof XMLHttpRequest != 'undefined') {
			 xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if(xmlhttp.readyState==4 && xmlhttp.status==200) {
					if(xmlhttp.responseText=="1"){
						alert("Message sent");
						var x = document.getElementById(id);
						x.value="Confirmed";
						x.style.color="red";
						x.disabled=true;
					} else {
						alert("Message not sent");
					}
				}
			}
			xmlhttp.open("GET","send.php?id="+id,true);
			xmlhttp.send();
		}
	}
	function checkBalance() {
	var xmlhttp = false;
		try {
			xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

			} catch (E) {
				xmlhttp = false;
			} finally {xmlhttp=false;}
		} finally {
			xmlhttp= false;
		}
		if(!xmlhttp && typeof XMLHttpRequest != 'undefined') {
			 xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if(xmlhttp.readyState==4 && xmlhttp.status==200) {
					alert(xmlhttp.responseText);
				}
			}
			xmlhttp.open("GET","checkBalance.php",true);
			xmlhttp.send();
		}
	}
	function declineReservetion(id) {
		var xmlhttp = false;
		try {
			xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

			} catch (E) {
				xmlhttp = false;
			} finally {xmlhttp=false;}
		} finally {
			xmlhttp= false;
		}
		if(!xmlhttp && typeof XMLHttpRequest != 'undefined') {
			 xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if(xmlhttp.readyState==4 && xmlhttp.status==200) {
					if(xmlhttp.responseText=="1")
						alert("Message sent");
					else
						alert("Message not sent");
				}
			}
			xmlhttp.open("GET","decline.php?id="+id,true);
			xmlhttp.send();
		}
	}
	function notifyAdmin() {
		var xmlhttp = false;
		try {
			xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

			} catch (E) {
				xmlhttp = false;
			} finally {xmlhttp=false;}
		} finally {
			xmlhttp= false;
		}
		if(!xmlhttp && typeof XMLHttpRequest != 'undefined') {
			 xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if(xmlhttp.readyState==4 && xmlhttp.status==200) {
					if(xmlhttp.responseText=="1")
						alert("Message sent");
					else
						alert("Message not sent");
				}
			}
			xmlhttp.open("GET","notifyAdmin.php",true);
			xmlhttp.send();
		}
	}


