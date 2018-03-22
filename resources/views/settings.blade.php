@extends('layouts.app')

<!--
 * Created by PhpStorm.
 * User: Tomas
 * Date: 2018-03-22
 * Time: 00:03
 -->
@section('content')
<div class="container" xmlns:padding-left="http://www.w3.org/1999/xhtml">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Settings</div>
                <div class="card-body">

                    <label>Default currency:</label>
                        <select name="Default currency" class="selectbigger">
                            <option value="">Select...</option>
                            <option value="EUR">EUR</option>
                            <option value="USD">USD</option>
                            <option value="GPB">GPB</option>
                            <option value="RUB">RUB</option>
                        </select>
                        <button type="button" class="btn" >Change</button>
                        <br>
                        <br>

                    <label>Income day:</label>
                        <select name="Income day" class="selectbigger">
                            <option value="">Select...</option>
                        <?php for ($i = 1; $i <= 31; $i++) : ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php endfor; ?>
                        </select>
                        <button type="button" class="btn" >Select</button>

                </div>



            </div>
        </div>
    </div>
</div>
@endsection