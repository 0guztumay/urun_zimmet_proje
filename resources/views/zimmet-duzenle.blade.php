<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 mb-3 mb-lg-5">
                <div class="overflow-hidden card table-nowrap table-card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Düzenlenecek Ürün</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="small text-uppercase bg-body text-muted">
                                <tr>
                                    <th>Ürün Adı</th>
                                    <th>Ürün Modeli</th>
                                    <th>Ürün Tipi</th>
                                    <th>Ürün Sayısı</th>
                                    <th>Zimmetlenen Kişi</th>
                                    <th>Zimmetleme Tarihi</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="align-middle">
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="h6 mb-0 lh-1">{{$urun_adi}}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$urun_modeli}}</td>
                                    <td><span class="d-inline-block align-middle">{{$urun_tipi}}</span></td>
                                    <td>{{$urun_sayisi}}<span></span></td>
                                    <td>{{$zimmetlenen_kisi_id}}</td>
                                    <td>{{$created_at}}</td>
                                    <td class="text-end">
                                        <a href="{{route("sil", ["urun_id" => $urun_id])}}"><button type="button" class="btn btn-danger">Sil</button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div><br>

                <h3 class="text-center">ZİMMET GÜNCELLE</h3>
                <div class="container mt-4">
                    <form action="{{route("guncelle", ["urun_id" => $urun_id])}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Ürün Adı</label>
                            <input type="text" name="urun_adi" class="form-control" value="{{$urun_adi}}">
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Ürün Modeli</label>
                            <input type="text" name="urun_modeli" class="form-control" value="{{$urun_modeli}}">
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Ürün Tipi</label>
                            <input type="text" name="urun_tipi" class="form-control" value="{{$urun_tipi}}">
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Ürün Sayısı</label>
                            <input type="number" name="urun_sayisi" class="form-control" value="{{$urun_sayisi}}">
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Zimmetlenen Kişi</label>
                            <input type="number" name="zimmetlenen_kisi" class="form-control" value="{{$zimmetlenen_kisi_id}}">
                          </div>
                          <button type="submit" class="btn btn-primary">Guncelle</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>