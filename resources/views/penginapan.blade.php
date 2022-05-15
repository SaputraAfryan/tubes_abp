<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Easycation</title>
    <link rel="icon" type="image/x-icon" href="logo_size.jpg">
    
  </head>
  <body style="background-color: rgb(199, 238, 255)">
    @include('partials.navbar')

    <div class="container-fluid mt-4">
        <div class="container-category" style="padding:20px;background-color: #60c5fc">
            <table style="width: 100%">
                <tr>
                    <td align="left">
                        <div style="color: #330066">
                            <div class="d-flex justify-content-between">
                                <h2>Rekomendasi Penginapan</h2>
                                <a href="/" class="btn btn-outline-danger">Back</a>
                            </div>
                            <div class="d-flex justify-content-center" style="padding: 20px;background-color:#60c5fc">
                                <table style="width: 100%; border-collapse: separate;border-spacing: 15px;">
                                    <tr>
                                        <td><div class="d-flex" style="width: 150px;height:150px; background-color: bisque"></div></td>
                                        <td><div class="d-flex" style="width: 150px;height:150px; background-color: bisque"></div></td>
                                        <td><div class="d-flex" style="width: 150px;height:150px; background-color: bisque"></div></td>
                                        <td><div class="d-flex" style="width: 150px;height:150px; background-color: bisque"></div></td>
                                        <td><div class="d-flex" style="width: 150px;height:150px; background-color: bisque"></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="d-flex" style="width: 150px;height:150px; background-color: bisque"></div></td>
                                        <td><div class="d-flex" style="width: 150px;height:150px; background-color: bisque"></div></td>
                                        <td><div class="d-flex" style="width: 150px;height:150px; background-color: bisque"></div></td>
                                        <td><div class="d-flex" style="width: 150px;height:150px; background-color: bisque"></div></td>
                                        <td><div class="d-flex" style="width: 150px;height:150px; background-color: bisque"></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="d-flex" style="width: 150px;height:150px; background-color: bisque"></div></td>
                                        <td><div class="d-flex" style="width: 150px;height:150px; background-color: bisque"></div></td>
                                        <td><div class="d-flex" style="width: 150px;height:150px; background-color: bisque"></div></td>
                                        <td><div class="d-flex" style="width: 150px;height:150px; background-color: bisque"></div></td>
                                        <td><div class="d-flex" style="width: 150px;height:150px; background-color: bisque"></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="d-flex" style="width: 150px;height:150px; background-color: bisque"></div></td>
                                        <td><div class="d-flex" style="width: 150px;height:150px; background-color: bisque"></div></td>
                                        <td><div class="d-flex" style="width: 150px;height:150px; background-color: bisque"></div></td>
                                        <td><div class="d-flex" style="width: 150px;height:150px; background-color: bisque"></div></td>
                                        <td><div class="d-flex" style="width: 150px;height:150px; background-color: bisque"></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="d-flex" style="width: 150px;height:150px; background-color: bisque"></div></td>
                                        <td><div class="d-flex" style="width: 150px;height:150px; background-color: bisque"></div></td>
                                        <td><div class="d-flex" style="width: 150px;height:150px; background-color: bisque"></div></td>
                                        <td><div class="d-flex" style="width: 150px;height:150px; background-color: bisque"></div></td>
                                        <td><div class="d-flex" style="width: 150px;height:150px; background-color: bisque"></div></td>
                                    </tr>
                                </table>  
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
  </body>
</html>