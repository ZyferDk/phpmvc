<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>tabel</title>
</head>
<body>

    <form method="GET" action="rumus1.php" target="_self">
        <table>
            <tr>
                <td>
                    <label for="awal">Angka Awal</label> <br>
                    <input type="text" name="awal" id="awal" placeholder="angka awal">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="akhir">Angka Akhir</label> <br>
                    <input type="text" name="akhir" id="akhir" placeholder="angka akhir">
                </td>
            </tr>

            <tr>
                <td><input type="radio" name="pilihan" value="genap">bilangan genap</td>
                <td><input type="radio" name="pilihan" value="ganjil">bilangan ganjil</td>
                <td><input type="radio" name="pilihan" value="prima">bilangan prima</td>
                <td><input type="radio" name="pilihan" value="fibonacci">bilangan fibonacci</td>
            </tr>

            <tr>
                <td><button type="submit" name="submit">Hasil</button></td>
            </tr>
        </table>

    </form>

</body>
</html>