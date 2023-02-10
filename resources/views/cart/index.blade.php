<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Rezervirajte svoje vozilo</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Custom stlylesheet -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <style>
        .section {
            position: relative;
            height: 100vh;
        }

        .section .section-center {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        #booking {
            font-family: 'Montserrat', sans-serif;
            background-image: url('https://images.unsplash.com/photo-1607853554439-0069ec0f29b6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=327&q=80');
            background-size: cover;
            background-position: center;
        }

        #booking::before {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            top: 0;
            background: rgba(0, 0, 0, 0.6);
        }

        .booking-form {
            max-width: 502px;
            width: 100%;
            margin: auto;
        }

        .booking-form .form-header {
            text-align: center;
            margin-bottom: 25px;
        }

        .booking-form .form-header h1 {
            font-size: 58px;
            text-transform: uppercase;
            font-weight: 700;
            color: #ffc001;
            margin: 0px;
        }

        .booking-form>form {
            background-color: #101113;
            padding: 30px 20px;
            border-radius: 3px;
        }

        .booking-form .form-group {
            position: relative;
            margin-bottom: 15px;
        }

        .booking-form .form-control {
            background-color: #f5f5f5;
            border: none;
            height: 45px;
            width: 200px;
            border-radius: 3px;
            -webkit-box-shadow: none;
            box-shadow: none;
            font-weight: 400;
            color: #101113;
        }

        .booking-form .form-control::-webkit-input-placeholder {
            color: rgba(16, 17, 19, 0.3);
        }

        .booking-form .form-control:-ms-input-placeholder {
            color: rgba(16, 17, 19, 0.3);
        }

        .booking-form .form-control::placeholder {
            color: rgba(16, 17, 19, 0.3);
        }

        .booking-form input[type="date"].form-control:invalid {
            color: rgba(16, 17, 19, 0.3);
        }

        .booking-form select.form-control {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .booking-form select.form-control+.select-arrow {
            position: absolute;
            right: 0px;
            bottom: 6px;
            width: 32px;
            line-height: 32px;
            height: 32px;
            text-align: center;
            pointer-events: none;
            color: #101113;
            font-size: 14px;
        }

        .booking-form select.form-control+.select-arrow:after {
            content: '\279C';
            display: block;
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        .booking-form .form-label {
            color: #fff;
            font-size: 12px;
            font-weight: 400;
            margin-bottom: 5px;
            display: block;
            text-transform: uppercase;
        }

        .booking-form .submit-btn {
            color: #101113;
            background-color: #ffc001;
            font-weight: 700;
            height: 50px;
            border: none;
            width: 100%;
            display: block;
            border-radius: 3px;
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                        <div class="form-header">
                            <h1>Rent a car</h1>
                        </div>
                        <form action="{{ route('spremi') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Ime</span>
                                        <input class="form-control" name="name" type="text"
                                            value="{{ Auth::user()->name }}" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Prezime</span>
                                        <input class="form-control" name="lastname" type="text" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Email</span>
                                        <span class="form-control"> {{ Auth::user()->email }}</span>
                                        {{-- <input class="form-control" type="email" name="email" value=" {{Auth::user()->email}} " required> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Broj mobitela</span>
                                <input class="form-control" type="tel" name="tel"
                                    placeholder="Unesite svoj broj mobitela" required>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Lokacija preuzimanja</span>

                                <select name="city" id="country-dropdown" class="form-control">
                                    @foreach ($gradovi as $grad)
                                        <option value="{{ $grad->name }}">{{ $grad->name }} </option>


                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <span class="form-label">Datum preuzimanja</span>
                                        <input class="form-control" name="res_date" type="date" required>
                                    </div>


                                    <div class="form-btn">
                                        <button class="submit-btn" type="submit">Rezerviraj</button>
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
