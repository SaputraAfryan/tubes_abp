@extends('layouts.login')

@section('container')
<div class="container-category fluid" style="padding:20px;background-color: #60c5fc">
    <div class="container-category-header">
        <table style="width: 100%">
            <tr>
                <td>
                    <div class="d-flex justify-content-center" style="color: black">
                        <h2>Sign In</h2>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="d-flex justify-content-center">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-20">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" placeholder="username">
                                </div>
                                <div class="form-group col-md-20">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" placeholder="password">
                                </div>
                            </div>
                            <div class="btn-group mt-4">
                                <a href="/" class="btn btn-outline-succes">Back</a>
                                <a href="/" class="btn btn-primary">Sign In</a>
                                <a href="/signup" class="btn btn-outline-primary">Sign up</a>
                            </div>
                        </form>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection