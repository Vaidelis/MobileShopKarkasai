@extends('layouts.appv2')

@section('content')


    <div class="container" >
        <div class="row justify-content-center" >
            <div class="col-md-8" >
                <div class="card" style="bottom: -50px; color:black; background: #585858" >
                    <div class="card-header" style="color: black;">Paieška</div>
                    <div class="card-body" style="background:#585858">
                    <form type='POST' action="{{route('postsearch')}}"  enctype="multipart/form-data">
                        <div class="form-group">

                            <label class="label">Brand: </label>
                            <input type="text" name="brand" id="brand" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label class="label">Model: </label>
                            <input type="text" name="model" id="model" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label class="label">Screen size: </label>
                            <input type="text" name="screensize" id="screensize" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label class="label">RAM size: </label>
                            <input type="text" name="ramsize" id="ramsize" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label class="label">Price(min): </label>
                            <input type="text" name="color" id="color" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label class="label">Price(max): </label>
                            <input type="text" name="color1" id="color1" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="action" value='html' class="btn btn-primary">Ieškoti</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
