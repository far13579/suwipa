<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $jsonfile = file_get_contents("movies.json");
    ?>
    <script>
        function load_data(){
            var jSonEX = <?= $jsonfile;?>;
            alert("Load Json Completed");
            return jSonEX;
        }
    </script>
</body>
</html>