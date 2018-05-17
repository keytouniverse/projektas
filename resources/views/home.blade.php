@extends('layouts.app')
<style>
    header
    {
        font-size: 30px;
        color: black;
        font-weight: bold;
        float: none;
        position: fixed;
        left: 50%; 
        margin-bottom: 300px;
    }
    button {
    border: none;
    color: white;
    text-align: center;
    width: 400px;
    height: 90px;
    font-size: 60px;
    background-color: #0B3861;
    border-radius: 100px;
    box-shadow: 5px 10px #888888;
    font-weight: bold;
    font-family: 'Arial';
}
.button:active {
  background-color: #086A87;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.button1:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
    background-color: #086A87;
}
th, td {
    padding: 15px;

}

    

}
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <!-- <div class="card"> nezinau ar reikia situ, bet bijau istrint :)
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hello. You are logged in!
                </div>
            </div>-->
            <header>Meniu</header>
            <br> <br> <br> <br>
            <table>
            <tbody>
        <tr>
               <td>
               <form>
                   <button  class="button button1" formaction="expenses">Expenses</button>
                </form> 
                </td> 
               <td>
               <form>
                   <button  class="button button1"  formaction="budget">Budget</button> 
                   </form>
                </td>
        </tr>
        <tr>
                <td>
                <form>
                    <button  class="button button1"  formaction="currency_converter">Currency Converter</button> 
                    </form>
                </td>
                <td>
                <form>
                    <button  class="button button1"  formaction="report">Report</button>
                    </form>
                 </td>
        </tr>
        <tr>
        <td>
        <form>
            <button  class="button button1"  formaction="graphs">Graphs & Diagrams</button>
            </form>
        </td>
        <td>
        <form>
            <button  class="button button1"  formaction="settings">Settings</button> 
            </form>
        </td>
        </tr>

            </tbody>
         </table>

        </div>
    </div>
</div>
@endsection
