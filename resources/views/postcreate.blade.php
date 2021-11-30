@extends('layouts.appv2')

@section('content')
    <div class="container" >
        <div class="row justify-content-center" >
            <div class="col-md-8" >
                <div class="card" style="bottom: -50px; color:black; background: #585858" >
                    <div class="card-header" style="color: black;">Sukurti temą</div>
                    <div class="card-body" style="background:#585858">
                        <form method="post" action="{{route('poststore')}}" enctype="multipart/form-data">
                            <div class="form-group">
                                @csrf
                                <label class="label">Leidėjas: </label>
                                <input placeholder="Leidėjas" type="text" name="brand" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label class="label">Modelis: </label>
                                <input placeholder="Telefono modelis" type="text" name="model" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label class="label">Ekrano dydis(inches): </label>
                                <input placeholder="Ekrano dydis(pvz. 6.1)"  type="text" name="screensize" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label class="label">RAM(GB): </label>
                                <input placeholder="RAM(pvz. 2)" type="number" name="ramsize" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label class="label">Talpos dydis(GB): </label>
                                <input placeholder="Talpos dydis(pvz. 64)"  type="number" name="storagesize" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label class="label">Spalva: </label>
                                <input placeholder="Spalva"  type="text" name="color" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label class="label">Kaina(USD): </label>
                                <input placeholder="Kaina(pvz. 500)"  type="number" name="price" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label class="label">Naudojimo laikotarpis: </label>
                                <input placeholder="Laikotarpis(pvz. 2 metai)"  type="text" name="year" class="form-control" required/>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Pateikti" />
                                <a href="{{ route('posts') }}" class="btn btn-primary">Atgal</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
