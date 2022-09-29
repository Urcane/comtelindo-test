<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
</head>
<body>
  
    <script>
        function ganjil_genap(angka){
            if(angka%2 == 0){
                return 'angka genap'
            }else{
                return 'angka ganjil'
            }
        }

        function change(data){
            if(data == true){
                return 'yes'
            }else{
                return 'no'
            }
        }

        console.log(change(true))
        console.log(ganjil_genap(10));

    </script>
</body>
</html>