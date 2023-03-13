<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Formulaire de modification</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Build whatever layout you need with our Architect framework.">
    <meta name="msapplication-tap-highlight" content="no">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
    <link href="./main.css" rel="stylesheet">
</head>

<body>
    <div class="app-theme-white  ">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="">VENTE DES VIEUX OBJETS</div>
            </div>
        </div>
    </div>

    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title "> MODIFICATION </h5>
                    <form class="">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="nom" class="">Nom</label>
                                    <input name="nom" id="nom" placeholder="" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="nom" class="">Nom</label>
                                    <input name="nom" id="nom" placeholder="" type="text" class="form-control">
                                </div>
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="email" class="">Email</label>
                                    <input name="email" id="email" placeholder="" type="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="telephone" class="">Téléphone</label>
                                    <input name="email" id="exampleEmail11" placeholder="" type="number" class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="password" class="">Password</label>
                                    <input name="password" id="password" placeholder="password placeholder" type="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <button class="mt-2 btn btn-primary m-auto"> Enregistrer </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('./assets/scripts/main.js')}}"></script>
</body>

</html>