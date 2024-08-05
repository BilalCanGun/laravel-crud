<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ürün düzenle</title>
</head>
<body>
    <h1>Ürün düzenle</h1>
    <form action="/urunler/duzenle/{{$product->id}}" method="POST">
        @csrf
        <input type="name" name="name" value="{{$product->name}}" placeholder="ürün adı">
        <br>
        <textarea name="description" id="" cols="30" rows="10" placeholder="açıklama">{{$product->description}}</textarea>
        <br>
        <input type="number" name="price" placeholder="fiyat" value="{{$product->price}}" >
        <br>

        <input type="number" name="qty" placeholder="Stok bilgisi" value="{{$product->qty}}">
        <br>
        <input type="checkbox" name="is_published"  {{$product->is_published ? 'checked':''}}> YAYINLA
        <br>
        <button>Güncelle</button>
    </form>

</body>
</html>