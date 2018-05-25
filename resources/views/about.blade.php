@extends('layouts.app')
<!--
 * Created by PhpStorm.
 * User: Ignas
 * Date: 2018.03.22
 * Time: 10:54
 -->

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">About</div>
                    <br></br>
                    <?php
                        echo "<h1>User Manual</h1>";
                    ?>
                    <br></br>
                    <?php
                        echo "<h2>1. Your Income </h2>";
                        echo "<h>Set your income on the 'Budget' page.</h>";
                    ?>
                    <html>
                        <img src="/images/save_income.png" width="280" height="125" title="How to set income" alt="How to set income" />
                    </html>
                    <br></br>
                    <?php
                        echo "<h2>2. Expenses </h2>";
                        echo "Add your daily expenses on the 'Expenses' page.<br>";
                        
                    ?>
                    <html>
                        <img src="/images/add_expense.png" width="280" height="125" title="How to add expense" alt="How to add expense" />
                    </html>
                    <br></br>
                    <?php
                        echo "If you enter a small amount of income, enter the missing part in the 'Add to income:' field.<br>";
                        echo "If you enter an excessive amount, enter the amount you want to deduct with the minus sign in the 'Add to income' field.<br>";
                        echo "The amounts you enter are accumulated.<br>";
                        
                    ?>
                    <br></br>
                     <?php

                        echo "<h2>3. Summary</h2>";
                        echo "When you set your revenue and add cost records, you'll see a summary on the 'Expenses' page.<br>";
                        echo "The 'Income' box shows the amount of income you set.<br>";
                        echo "In the 'Expenses total' box, you see a total of the current month's expense.<br>";
                        echo "Balance is displayed in the 'Balance' box.<br>";
                        
                    ?>
                    <br></br>
                     <?php

                        echo "<h2>4. Report</h2>";
                        echo "Here you can see all expense records according to the selected date range.<br>";                      
                    ?>
                    <html>
                        <img src="/images/add_expense.png" width="280" height="125" title="Report page" alt="Report page" />
                    </html>
                    <br></br>
                    <?php

                        echo "<h2>5. Graphs & Diagrams</h2>";
                        echo "A linear graph displays the amount of spending per day for the selected month.<br>";
                        echo "The bar graph shows the difference between the planned spend on money and how much you actually spent on the selected time period.<br>";                      
                    ?>
                    <html>
                        <img src="/images/add_expense.png" width="280" height="125" title="Diagrams" alt="Graphs & Diagrams" />
                    </html>
                    <br></br>
                     <?php
                        echo "<h1>Created by : </h1>";
                        echo "Rugilė Ivoškaitė, IFF-6/1<br>";
                        echo "Kristina Staliauskaitė, IFF-6/1<br>";
                        echo "Tomas Jurevičius, IFF-6/2<br>";
                        echo "Ignas Danielius, IFF-6/2<br>";
                        echo "Skaistė Ramanauskaitė, IFF-6/5<br>";
                        echo "Dinas Janisovas, IFF-6/5<br>";
                    ?>
                </div>
            </div>
        </div>
    </div>

@endsection