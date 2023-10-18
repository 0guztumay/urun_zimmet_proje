<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zimmetlenmiş Ürünler</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 mb-3 mb-lg-5">
                    <div class="overflow-hidden card table-nowrap table-card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Zimmetlenen Ürünler</h5>
                            <a href="#!" class="btn btn-light btn-sm">View All</a>  
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
                                    @foreach ($zimmetlenenUrunler as $urunler)
                                    <tr class="align-middle">
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <div class="h6 mb-0 lh-1">{{$urunler -> urun_adi}}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{$urunler -> urun_modeli}}</td>
                                        <td><span class="d-inline-block align-middle">{{$urunler -> urun_tipi}}</span></td>
                                        <td><span>{{$urunler -> urun_sayisi}}</span></td>
                                        <td>{{$urunler -> kisiler() -> first() -> ad}}</td>
                                        <td>{{$urunler -> created_at}}</td>
                                        <td class="text-end">
                                            <div class="actionButton">  
                                                <a href="{{route('zimmet-duzenle', ["urun_id" => $urunler -> urun_id])}}">
                                                    <button type="button" class="btn btn-danger">Düzenle</button>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
