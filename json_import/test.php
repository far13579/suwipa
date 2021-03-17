<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <button onclick="load_data()">Load Data</button>
    year:<br>
    <select id="sel_year" onchange="load_title"></select><br>
    movie title:<br>
    <select id="Movie_Title"></select><br>
    <div id="out"></div>
    <script>
        let jSonEX;
        function load_data() {
            jSonEX = <?= file_get_contents("movies.json") ?>;
            var movie_year = new Set();
            var doc = document.getElementById("sel_year");
            for(i=0;i<jSonEX.length; i++){
                movie_year.add(jSonEX[i].year);
            }
            alert("Total Year "+movie_year.size);
            const ref_year = movie_year.values();
            for ( y = 0; y<movie_year.size;y++) {
                var option = document.createElement("option");
                option.text = ref_year.next().value;
                doc.add(option);  
            }
            return jSonEX;
        }
        function load_title(){
            alert("Year Change");
            // alert("Total Year "+movie_year.size);
            var doc = document.getElementById("Movie_Title");
            var doc = document.getElementById("sel_year");
            alert(y.value);
            // const ref_year = movie_year.values();
            // for ( y = 0; y<movie_year.size;y++) {
            //     var option = document.createElement("option");
            //     option.text = ref_year.next().value;
            //     doc.add(option);  
            // }
        }
    </script>
</body>

</html>