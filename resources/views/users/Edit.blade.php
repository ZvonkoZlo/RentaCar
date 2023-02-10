<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Uredi Korisnika</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        .wrapper {

            padding: 20px;
        }

        .toggle_radio {
            position: relative;
            background: rgba(255, 255, 255, .1);
            margin: 4px auto;
            overflow: hidden;
            padding: 0 !important;
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
            border-radius: 50px;
            position: relative;
            height: 40px;
            width: 318px;
        }

        .toggle_radio>* {
            float: left;
        }

        .toggle_radio input[type=radio] {
            display: none;
            /*position: fixed;*/
        }

        .toggle_radio label {
            font: 90%/1.618 "Source Sans Pro";
            color: black;
            z-index: 0;
            display: block;
            width: 100px;
            height: 20px;
            margin: 3px 3px;
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
            border-radius: 50px;
            cursor: pointer;
            z-index: 1;
            /*background: rgba(0,0,0,.1);*/
            text-align: center;
            /*margin: 0 2px;*/
            /*background: blue;*/
            /*make it blue*/
        }

        .toggle_option_slider {
            /*display: none;*/
            /*background: red;*/
            width: 100px;
            height: 30px;
            position: absolute;
            top: 1px;
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
            border-radius: 50px;
            -webkit-transition: all .4s ease;
            -moz-transition: all .4s ease;
            -o-transition: all .4s ease;
            -ms-transition: all .4s ease;
            transition: all .4s ease;
        }

        #first_toggle:checked~.toggle_option_slider {
            background: rgba(49, 10, 245, 0.3);
            left: 3px;
        }

        #second_toggle:checked~.toggle_option_slider {
            background: rgba(49, 10, 245, 0.3);
            left: 109px;
        }

        #third_toggle:checked~.toggle_option_slider {
            background: rgba(49, 10, 245, 0.3);
            left: 215px;
        }





        body {
            color: #566787;
            background: #f5f5f5;
            font-family: 'Varela Round', sans-serif;
            font-size: 13px;
        }

        .table-responsive {
            margin: 30px 0;
        }

        .table-wrapper {
            background: #fff;
            padding: 20px 25px;
            border-radius: 3px;
            min-width: 1000px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .table-title {
            padding-bottom: 15px;
            background: #435d7d;
            color: #fff;
            padding: 16px 30px;
            min-width: 100%;
            margin: -20px -25px 10px;
            border-radius: 3px 3px 0 0;
        }

        .table-title h2 {
            margin: 5px 0 0;
            font-size: 24px;
        }

        .table-title .btn-group {
            float: right;
        }

        .table-title .btn {
            color: #fff;
            float: right;
            font-size: 13px;
            border: none;
            min-width: 50px;
            border-radius: 2px;
            border: none;
            outline: none !important;
            margin-left: 10px;
        }

        .table-title .btn i {
            float: left;
            font-size: 21px;
            margin-right: 5px;
        }

        .table-title .btn span {
            float: left;
            margin-top: 2px;
        }

        table.table tr th,
        table.table tr td {
            border-color: #e9e9e9;
            padding: 12px 15px;
            vertical-align: middle;
        }

        table.table tr th:first-child {
            width: 60px;
        }

        table.table tr th:last-child {
            width: 100px;
        }

        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }

        table.table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }

        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }

        table.table td:last-child i {
            opacity: 0.9;
            font-size: 22px;
            margin: 0 5px;
        }

        table.table td a {
            font-weight: bold;
            color: #566787;
            display: inline-block;
            text-decoration: none;
            outline: none !important;
        }

        table.table td a:hover {
            color: #2196F3;
        }

        table.table td a.edit {
            color: #FFC107;
        }

        table.table td a.delete {
            color: #F44336;
        }

        table.table td i {
            font-size: 19px;
        }

        table.table .avatar {
            border-radius: 50%;
            vertical-align: middle;
            margin-right: 10px;
        }

        .pagination {
            float: right;
            margin: 0 0 5px;
        }

        .pagination li a {
            border: none;
            font-size: 13px;
            min-width: 30px;
            min-height: 30px;
            color: #999;
            margin: 0 2px;
            line-height: 30px;
            border-radius: 2px !important;
            text-align: center;
            padding: 0 6px;
        }

        .pagination li a:hover {
            color: #666;
        }

        .pagination li.active a,
        .pagination li.active a.page-link {
            background: #03A9F4;
        }

        .pagination li.active a:hover {
            background: #0397d6;
        }

        .pagination li.disabled i {
            color: #ccc;
        }

        .pagination li i {
            font-size: 16px;
            padding-top: 6px
        }

        .hint-text {
            float: left;
            margin-top: 10px;
            font-size: 13px;
        }

        /* Custom checkbox */
        .custom-checkbox {
            position: relative;
        }

        .custom-checkbox input[type="checkbox"] {
            opacity: 0;
            position: absolute;
            margin: 5px 0 0 3px;
            z-index: 9;
        }

        .custom-checkbox label:before {
            width: 18px;
            height: 18px;
        }

        .custom-checkbox label:before {
            content: '';
            margin-right: 10px;
            display: inline-block;
            vertical-align: text-top;
            background: white;
            border: 1px solid #bbb;
            border-radius: 2px;
            box-sizing: border-box;
            z-index: 2;
        }

        .custom-checkbox input[type="checkbox"]:checked+label:after {
            content: '';
            position: absolute;
            left: 6px;
            top: 3px;
            width: 6px;
            height: 11px;
            border: solid #000;
            border-width: 0 3px 3px 0;
            transform: inherit;
            z-index: 3;
            transform: rotateZ(45deg);
        }

        .custom-checkbox input[type="checkbox"]:checked+label:before {
            border-color: #03A9F4;
            background: #03A9F4;
        }

        .custom-checkbox input[type="checkbox"]:checked+label:after {
            border-color: #fff;
        }

        .custom-checkbox input[type="checkbox"]:disabled+label:before {
            color: #b8b8b8;
            cursor: auto;
            box-shadow: none;
            background: #ddd;
        }

        /* Modal styles */
        .modal .modal-dialog {
            max-width: 400px;
        }

        .modal .modal-header,
        .modal .modal-body,
        .modal .modal-footer {
            padding: 20px 30px;
        }

        .modal .modal-content {
            border-radius: 3px;
            font-size: 14px;
        }

        .modal .modal-footer {
            background: #ecf0f1;
            border-radius: 0 0 3px 3px;
        }

        .modal .modal-title {
            display: inline-block;
        }

        .modal .form-control {
            border-radius: 2px;
            box-shadow: none;
            border-color: #dddddd;
        }

        .modal textarea.form-control {
            resize: vertical;
        }

        .modal .btn {
            border-radius: 2px;
            min-width: 100px;
        }

        .modal form label {
            font-weight: normal;
        }
    </style>
    <script>
        $(document).ready(function() {
            // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // Select/Deselect checkboxes
            var checkbox = $('table tbody input[type="checkbox"]');
            $("#selectAll").click(function() {
                if (this.checked) {
                    checkbox.each(function() {
                        this.checked = true;
                    });
                } else {
                    checkbox.each(function() {
                        this.checked = false;
                    });
                }
            });
            checkbox.click(function() {
                if (!this.checked) {
                    $("#selectAll").prop("checked", false);
                }
            });
        });
    </script>
</head>


<body>

    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('users.update', $korisnik->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                {{-- <input type="hidden" name="id" value="{{ $korisnik->id }}"> --}}
                <div class="modal-header">
                    <h4 class="modal-title">Uredi Korisnika</h4>
                    <a href="{{ route('korisnici') }}"> <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button></a>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Ime</label>
                        <input type="text" class="form-control" required value="{{ $korisnik->name }}"
                            name="name" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" required value="{{ $korisnik->email }}"
                            name="email" />
                    </div>
                    {{-- <label for="role">Uloga</label>
                            <input type = 'number' min="0" max="2" class="form-control" required  value="{{$korisnik->is_admin}}"  name = "uloga"/> --}}
                    <h3>Odaberi ulogu</h3>



                    <div class="wrapper">
                        <div class="toggle_radio">
                            <input type="radio" class="toggle_option" id="first_toggle" name="uloga" value="2">
                            <input type="radio" checked class="toggle_option" id="second_toggle" name="uloga"
                                value="1">
                            <input type="radio" class="toggle_option" id="third_toggle" name="uloga" value="0">
                            <label for="first_toggle">
                                <h6>Super Admin</h6>
                            </label>
                            <label for="second_toggle">
                                <h6>Admin</h6>
                            </label>
                            <label for="third_toggle">
                                <h6>Korisnik</h6>
                            </label>
                            <div class="toggle_option_slider">
                            </div>
                        </div>

                        {{-- <div class="toggle_radio">

							<input type="radio" id="SuperAdmin" name="uloga" value="2" class="toggle_option">
							<input type="radio" id="Admin" name="uloga" value="1" class="toggle_option">
							<input type="radio" id="Korisnik" name="uloga" value="0" class="toggle_option">

							<label for="SuperAdmin">Super Admin</label>
							<label for="Admin">Admin</label>
							<label for="Korisnik">Korisnik</label>

							<div class="toggle_option_slider">
							</div>
							</div> --}}


                    </div>

                    <div class="modal-footer">
                        <a href="{{ route('korisnici') }}"><input type="button" class="btn btn-default"
                                value="Odustani"></a>
                        <button type="submit"
                            class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg ">Ažuriraj</button>
                    </div>
            </form>
        </div>
    </div>

</body>

</html>
