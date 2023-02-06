<!DOCTYPE html>
<html>
<head>
<title>Uredi korisnika</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"><h1>Korisnici</h1></div>
    
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            @auth
                                @if(Auth::user()->isSuperAdmin())
                                <form method="post" action="edit" accept-charset="UTF-8">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                                           
                                            <table>
                                                    <td>Role</td>
                                                    <td>
                                                        <input type = 'number' name = 'role'/>
    
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan = '2'>
                                                        <input type = 'submit' class="btn btn-primary" value = "Ažuriraj" />
                                                    </td>
                                                </tr>
                                            </table>
                                        </form>
    
    
    
                                @endif
    
                                @else nedam uci
    
                            @endauth
    
    
    
    
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>