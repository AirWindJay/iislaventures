<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>IislaVentures</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        footer 
        {
            left: 0;
            bottom: 0;
            width: 100%;
            background-image: linear-gradient(#CDCDCD, #01DFA5);
            color: white;
            text-align: center;
        }
    </style>
    @yield('styles')
</head>


<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark shadow-sm">
            <div class="container pull-left row">
                {{-- <img src="{{asset('/img/iisa_logo.jpg')}}" height="100px"> --}}
                <h1>Logo</h1>
            </div>
            <div class="row">
                <div class="col-md-3"><a class="active" href="#home">Home</a></div>
                <div class="col-md-3"><a href="#news">News</a></div>
                <div class="col-md-3"><a href="#contact">Contact</a></div>
                <div class="col-md-3"><a href="#about">About</a></div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
<footer>
    <div class="row" style="padding-top: 50px">
        <div class="col-md-4">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="">
                    <table>
                        <tr>
                            <td style="color:black">
                                <label for="">Message/Call Us</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" class="form-control" placeholder="Name">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" class="form-control" placeholder="E-mail">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" class="form-control" placeholder="Phone Number">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <textarea rows="15" cols="50" class="form-control" placeholder="Message">
                                   
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>

        <div class="col-md-4">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <label style="color:black" for="email">Subscribe to out Newsletter</label>
                <input type="text" name="email" id="email" placeholder="E-mail" class="form-control">
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>

            <div class="mt-5">
                <label style="color:black" for="">Follow Us</label>
                <div class="row">
                    <div class="col">
                        <a target="_blank" href="https://www.facebook.com/IISLAVentures/">
                            <h1>
                            <i class="fab fa-facebook-square"></i>
                            </h1>
                        </a>
                        </div>
                        <div class="col">
                        <a target="_blank" href="https://twitter.com/IISLA_Ventures">
                            <h1>
                            <i class="fab fa-twitter-square"></i>
                            </h1>
                        </a>
                        </div>
                        <div class="col">
                        <a target="_blank" href="https://www.instagram.com/iisla_ventures/">
                            <h1>
                            <i class="fab fa-instagram-square"></i>
                            </h1>
                        </a>
                        </div>
                        <div class="col">
                        <a target="_blank" href="https://www.linkedin.com/company/isla-investments-ltd/">
                            <h1>
                            <i class="fab fa-linkedin"></i>
                            </h1>
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <table style="width: 100%" style="text-align: center;">
                    <tr>
                        <td>
                            <a href=""><button style="width: 150px" class="btn btn-secondary">FAQs</button></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href=""><button style="width: 150px" class="btn btn-secondary">Terms & Conditions</button></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href=""><button style="width: 150px" class="btn btn-secondary">Our Farmers</button></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href=""><button style="width: 150px" class="btn btn-secondary">Our Community</button></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href=""><button style="width: 150px" class="btn btn-secondary">How it works</button></a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <hr>
    <div class="row" style="padding-bottom: 50px; text-align: center">
        <div class="col-md-12">
            All Rights Reserved | Copyright IISLAVENTURES
        </div>
    </div>
</footer>
</html>
