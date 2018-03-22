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


                        <select name="Language" class="selectbigger">
                            <option value="Lithuanian">Lithuanian</option>
                            <option value="English">English</option>
                        </select>
                        <button type="button" class="btn" >Change</button>

                </div>



            </div>
        </div>
    </div>
</div>
@endsection