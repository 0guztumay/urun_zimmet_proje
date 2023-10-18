<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Urun Zimmetle</title>
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5 p-2">
        <h3 class="text-center">ÜRÜN ZİMMETLE</h3>
        <form action="{{route("zimmetle")}}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Ürün Adı</label>
                <input type="text" name="urun_adi" class="form-control" placeholder="Örnek: HP">
              </div>
              <div class="mb-3">
                <label class="form-label">Ürün Modeli</label>
                <input type="text" name="urun_modeli" class="form-control" placeholder="Örnek: V120">
              </div>
              <div class="mb-3">
                <label class="form-label">Ürün Tipi</label>
                <input type="text" name="urun_tipi" class="form-control" placeholder="Örnek: LAPTOP">
              </div>
              <div class="mb-3">
                <label class="form-label">Ürün Sayısı</label>
                <input type="number" name="urun_sayisi" class="form-control" placeholder="Örnek: 2">
              </div>
              <div class="mb-3">
                <label class="form-label">Zimmetlenen Kişi</label>
                <input type="text" name="zimmetlenen_kisi" class="form-control" placeholder="Örnek: Oguz">
              </div>
              <button type="submit" class="btn btn-primary">Zimmetle</button>
        </form>
    </div>
</body>
</html>