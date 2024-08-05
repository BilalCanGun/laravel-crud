<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ürün Ekle</title>
</head>
<body>
    <h1>Ürün ekle </h1>

    <form action="/urunler/ekle" method="POST">
        @csrf
        <input type="name" name="name" placeholder="ürün adı">
        <br>
        <textarea name="description" id="" cols="30" rows="10" placeholder="açıklama"></textarea>
        <br>
        <input type="number" name="price" placeholder="fiyat">
        <br>

        <input type="number" name="qty" placeholder="Stok bilgisi">
        <br>
        <input type="checkbox" name="is_published" > YAYINLA
        <br>
        <button>Ekle</button>
    </form>

</body>
</html>