<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NINDA KALKULATOR</title>
    <style>
        body {
            background-color: #A5DD9B;
            color: #240A34;
            font-family:"Comic Sans MS";
            padding: 0;
            margin: 0                           ;

        }
        .calculator-buttons input {
            width: 100px;
            height: 50px;
            font-size: 20px;
            margin: 5px;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.8);
            background-color: #344955;
            color: #fff; 
        }
    </style>
</head>
<body>
    <div class="calculator">
        <center><h1>KALKULATOR SEDERHANA</h1>
        <form action="{{route('proses.store')}}" method="post">
            @csrf
            <label for="a">Masukkan Angka Pertama</label><br>
            <input type="number" name="a" id="a"><br><br>
            <label for="b">Masukkan Angka Pertama</label><br>
            <input type="number" name="b" id="b"><br><br>

            <div class="calculator-buttons input">
            <input type="submit" value="Tambah" name="op">
            <input type="submit" value="Kurang" name="op">
            <input type="submit" value="Kali" name="op">
            <input type="submit" value="Bagi" name="op">
            <input type="submit" value="Reset" name="op"></center>
            </div>
    </form>
    </div>
</body>
</html>