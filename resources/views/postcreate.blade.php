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
                                <label class="label">Brand: </label>
                                <input placeholder="Mobile phone brand" type="text" name="brand" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label class="label">Model: </label>
                                <input placeholder="Mobile phone Model" type="text" name="model" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label class="label">Screen size(inches): </label>
                                <input placeholder="Screen size(ex. 6.1)"  type="text" name="screensize" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label class="label">RAM size(GB): </label>
                                <input placeholder="RAM size(ex. 2)" type="number" name="ramsize" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label class="label">Storage size(GB): </label>
                                <input placeholder="Storage size(ex. 64)"  type="number" name="storagesize" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label class="label">Color: </label>
                                <input placeholder="Color"  type="text" name="color" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label class="label">Price(USD): </label>
                                <input placeholder="Price(ex. 500)"  type="number" name="price" class="form-control" required/>
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
