@extends('layouts.app')

<!--
 * Created by PhpStorm.
 * User: Tomas
 * Date: 2018-03-22
 * Time: 00:03
 -->
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Settings</div>
                <div class="card-body">

                    <div class="dropdown">
                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                            Change Language
                        </button>
                        <button type="button" class="btn">Change</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Lithuanian</a>
                            <a class="dropdown-item" href="#">English</a>
                        </div>
                    </div>
                    <ul class="button-right">

                    </ul>
                </div>



            </div>
        </div>
    </div>
</div>
@endsection