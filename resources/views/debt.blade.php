<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Debt management system</title>
</head>
<body>
@include("debtnavbar")


<div class="row header-container justify-content-center">
    <div class="header">
        <h1>Debt Management System</h1>
    </div>
</div>

@if($layout == 'index')
    <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-8">
                    @include("debtlist")
                </section>
            </div>
        </div>
    </div>
@elseif($layout == 'create')
    <div class="container-fluid mt-4 " id="create-form">
        <div class="row">
            <section class="col-md-7">
                @include("debtlist")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img
                        src="https://marketplace.canva.com/MAB7yqsko0c/1/screen_2x/canva-smart-little-schoolgirl--MAB7yqsko0c.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Enter the information of the new Debt</h5>
                        <form action="{{ url('/debt/store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>First Name</label>
                                <input name="firstName" type="text" class="form-control"
                                       placeholder="Enter the first name">
                            </div>


                            <div class="form-group">
                                <label>Last Name</label>
                                <input name="lastName" type="text" class="form-control" placeholder="Enter second name">
                            </div>

                            <div class="form-group">
                                <label>Debt</label>
                                <input name="debt" type="text" class="form-control" placeholder="Enter the Age">
                            </div>
                            <div class="form-group">
                                <label>Payment</label>
                                <input name="payment" type="text" class="form-control" placeholder="Enter the payment">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-info" value="Save">
                                <input type="reset" class="btn btn-warning" value="Reset">
                            </div>
                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
@elseif($layout == 'show')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include("showdebt")
            </section>
            <section class="col"></section>
        </div>
    </div>
@elseif($layout == 'indebted')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include("debtstatus")
            </section>
            <section class="col"></section>
        </div>
    </div>
@elseif($layout == 'studentsort')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include("debtstatus")
            </section>
            <section class="col"></section>
        </div>
    </div>
@elseif($layout == 'paymentsort')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include("debtstatus")
            </section>
            <section class="col"></section>
        </div>
    </div>
@elseif($layout == 'historysort')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include("debtstatus")
            </section>
            <section class="col"></section>
        </div>
    </div>
@elseif($layout == 'paid')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include("debtstatus")
            </section>
            <section class="col"></section>
        </div>
    </div>
@elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("debtlist")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img
                        src="https://marketplace.canva.com/MAB7yqsko0c/1/screen_2x/canva-smart-little-schoolgirl--MAB7yqsko0c.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Update informations of Debt</h5>
                        <form action="{{ url('/debt/update/'.$debt->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <div class="form-group">
                                    <label>debt</label>
                                    <input value="{{ $debt->payment }}" name="payment" type="text" class="form-control"
                                           placeholder="Enter the payment">
                                </div>
                                <input type="submit" class="btn btn-info" value="Update">
                                <input type="reset" class="btn btn-warning" value="Reset">
                            </div>
                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
@endif

<footer></footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
