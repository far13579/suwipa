<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body onload="loadContent()">
    <div id="out"> </div>
    <script>
        function loadContent() {
            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                console.log(this.readyState);
                // console.log(this.readyState + ", " + this.status);
                if (this.readyState == 4 && this.status == 200) {
                    alert(this.responseText);
                    // console.log(this.responseText);
                    my = JSON.parse(this.responseText);
                    m = document.getElementById("out");
                    text = "<table border ='1'>";
                    for (i = 0; i < my.length; i++) {
                        for (inf in my[i]) {
                            text += "<td>" + my[i][inf] + "</td>";
                        }
                        text += "</tr>";
                    }
                    text += "</table>";
                    alert(text);
                    out.innerHTML += text;
                }
            }
            xhttp.open("GET", "02rest.php", true);
            xhttp.send();
        }
        function add_new() {
            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    alert(this.responseText);
                }
            }
            xhttp.open("POST","02rest.php",true);
            xhttp.setRequestHeader("content-type","application/x-www-from-urlrncodeed");
            u_id = document.getElementById("u_id");
            u_name = document.getElementById("u_id");
            xhttp.send("u_id="+u_id.value+"&u_name="+u_name.value);
        }
    </script>
</body>

</html>