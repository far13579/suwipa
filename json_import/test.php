<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
   
    <button onclick="load_Data()">Load Data</button>
    year:<br>
    <select id="sel_year"></select><br>
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
            for ( y = 0; y < movie_year.size; y++) {
                var option = document.createElement("option");
                option.text = ref_year.next().value;
                doc.add(option);
                // const element = array[y];
                
            }
            

            // doc = document.getElementById("Movie_Title")
            // var option = document.createElement("option");
            // option.text = "N/A"
            // doc.add(option);
            // alert(jSonEX.length);
            // for (i=0;i<jSonEX.length;i++ ){
            //     var option = document.createElement("option");
            //     option.text = jSonEX[i].title;
            //     doc.add(option);
            
            return jSonEX;
        }
    </script>
</body>

</html>