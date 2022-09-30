<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>
  
    <div id="ganjil_genap"></div>
    <div id="change"></div>
    <script>
        window.$('#ganjil_genap').html(ganjil_genap(1));
        window.$('#change').html(change(true))

        function ganjil_genap(angka){
            if(angka%2 == 0){
                return 'angka genap'
            }else{
                return 'angka ganjil'
            }

            // return angka % 2 == 0 ? 'Genap' : 'Ganjil';
        }

        function change(data){
            if(data == true){
                return 'yes'
            }else{
                return 'no'
            }

            // return data ? 'Yes' : 'No'; 
        }

        console.log(change(true));
        console.log(ganjil_genap(10));

    </script>
</body>
</html>