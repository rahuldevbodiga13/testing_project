<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <script src="foodmenu.js"></script>
        <title>Food Menu</title>
        <link rel="stylesheet" type="text/css" href="FoodMenuStyle.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <style>
        body{
            background-image: linear-gradient( 68.4deg,  rgba(248,182,204,1) 0.5%, rgba(192,198,230,1) 49%, rgba(225,246,240,1) 99.8% );
        }

        .logo{
    height: 100%;
    width: 100%;
    max-width: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left: -820px;
    position: relative;
  }
  ul {
    position: fixed;
  top: 0;
  width: 100%;
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #4CA1AF;
  float: right;
}

li {
  float: right;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: white;
  color: black;
}
.btn{
    border-radius: 50%;
}
button:focus{
    outline: none;
    border: none;
}
span{
    font-size: 20px;
}
tr td:nth-child(2){
    font-size: 20px;
}
        </style>
    </head>
    <body>
    <ul>
  <li><a class="active" href="#home"><i class="fa fa-fw fa-home"></i>Home</a></li>
</ul>
    <?php echo "<h3 style=\"margin-top:20px;\">".$_SESSION['user']."</h3>"?>

    <?php echo "<h3 style=\"margin-top:20px;\">".$_SESSION['rollnum']."</h3>"?>
        <h1>CHOOSE YOUR DISH</h1>
    <!--    <INPUT TYPE="button" VALUE="Back" onClick="history.go(-1);">  --> 
        <div id="tiffins">
            <h2>TIFFINS:</h2>
            <table>
                <tr>
                    <th>ITEM</th>
                    <th>COST</th>
                    <th>QUANTITY</th>
                </tr>
                <tr>
                    <td class="item-name" id="idli"><img src="Images/Idli.jpg" alt="Idli"><br>Idli </td>
                    <td id="idli-cost">25/-</td>
                    <td>
                        <button onclick="decrement('idli-qty','idli-cost','idli')" class="btn btn-success">-</button>
                            <span id="idli-qty">0</span>
                        <button onclick="increment('idli-qty','idli-cost','idli')" class="btn btn-success">+</button>
                    </td>
                </tr>
                <tr>
                    <td class="item-name" id="wada"><img src="Images/Wada.jpg" alt="Wada"><br>Wada </td>
                    <td id="wada-cost">25/-</td>
                    <td>
                        <button onclick="decrement('wada-qty','wada-cost','wada')" class="btn btn-success">-</button>
                            <span id="wada-qty">0</span>
                        <button onclick="increment('wada-qty','wada-cost','wada')" class="btn btn-success">+</button>
                    </td>
                </tr>
                                             
                <tr>
                    <td class="item-name" id='puri'><img src="Images/Puri.jpg" alt="Puri"><br>Puri </td>
                    <td id="puri-cost">25/-</td>
                    <td>
                        <button onclick="decrement('puri-qty','puri-cost','puri')" class="btn btn-success">-</button>
                            <span id="puri-qty">0</span>
                        <button onclick="increment('puri-qty','puri-cost','puri')" class="btn btn-success">+</button>
                    </td>
                </tr>
                <tr>
                    <td class="item-name" id="dosa"><img src="Images/Dosa.jpg" alt="Dosa"><br>Dosa </td>
                    <td id="dosa-cost">25/-</td>
                    <td>
                        <button onclick="decrement('dosa-qty','dosa-cost','dosa')" class="btn btn-success">-</button>
                            <span id="dosa-qty">0</span>
                        <button onclick="increment('dosa-qty','dosa-cost','dosa')" class="btn btn-success">+</button>
                    </td>
                </tr>
                <tr>
                    <td class="item-name" id="bonda"> <img src="Images/Bonda.jpg" alt="Bonda"><br>Bonda</td>
                    <td id="bonda-cost">25/-</td>
                    <td>
                        <button onclick="decrement('bonda-qty','bonda-cost','bonda')" class="btn btn-success">-</button>
                            <span id="bonda-qty">0</span>
                        <button onclick="increment('bonda-qty','bonda-cost','bonda')" class="btn btn-success">+</button>
                    </td>
                </tr>
            </table>
        </div>
        <p align="center">
<button type="button" style="margin-left:auto;margin-right:auto;display:block;margin-top:2%;margin-bottom:0%" onclick="cost()" class="btn btn-primary">Proceed</button>
     </p>
        <div id="Lunch">
            <h2>LUNCH MENU</h2>
            <table>
                <tr>
                    <th>ITEM</th>
                    <th>COST</th>
                    <th>QUANTITY</th>
                </tr>
                <tr>
                    <td class="item-name" id="chickenbiryani"><img src="Images/ChickenBiryani.jpg" alt="ChickenBiryani">  <br>Chicken Biryani</td>
                    <td id="chickenbiryani-cost">130/-</td>
                    <td>
                        <button onclick="decrement('chknbr-qty','chickenbiryani-cost','chickenbiryani')" class="btn btn-success">-</button>
                            <span id="chknbr-qty">0</span>
                        <button onclick="increment('chknbr-qty','chickenbiryani-cost','chickenbiryani')" class="btn btn-success">+</button>
                    </td>
                </tr>
                <tr>
                    <td class="item-name" id="vegbiryani"> <img src="Images/VegBiryani.jpg" alt="VegBiryani"><br>Veg Biryani</td>
                    <td id="vegbiryani-cost">100/-</td>
                    <td>
                        <button onclick="decrement('vegbiryani-qty','vegbiryani-cost','vegbiryani')" class="btn btn-success">-</button>
                            <span id="vegbiryani-qty">0</span>
                        <button onclick="increment('vegbiryani-qty','vegbiryani-cost','vegbiryani')" class="btn btn-success">+</button>
                    </td>
                </tr>
                <tr>
                    <td class="item-name" id="vegfriedrice"><img src="Images/VegFriedRice.jpg" alt="VegFriedRice"><br> Veg Fried Rice </td>
                    <td id="vegfriedrice-cost">40/-</td>
                    <td>
                            <button onclick="decrement('vegfr-qty','vegfriedrice-cost','vegfriedrice')" class="btn btn-success">-</button>
                            <span id="vegfr-qty">0</span>
                        <button onclick="increment('vegfr-qty','vegfriedrice-cost','vegfriedrice')" class="btn btn-success">+</button>
                    </td>
                </tr>
                <tr>
                    <td class="item-name" id="Vegmanchurian"> <img src="Images/VegManchuria.jpg" alt="VegManchuria"><br>Veg Manchuria</td>
                    <td id="vegmanchuria-cost">40/-</td>
                    <td>
                        <button onclick="decrement('vegm-qty','vegmanchuria-cost','Vegmanchuria')" class="btn btn-success">-</button>
                            <span id="vegm-qty">0</span>
                        <button onclick="increment('vegm-qty','vegmanchuria-cost','Vegmanchuria')" class="btn btn-success">+</button>
                    </td>
                </tr>
                <tr>
                    <td class="item-name" id="chickenfriedrice"><img src="Images/ChickenFriedRice.jpg" alt="ChickenFriedRice"> <br>Chicken Fried Rice</td>
                    <td id="chickenfriedrice-cost">60/-</td>
                    <td>
                        <button onclick="decrement('chkfr-qty','chickenfriedrice-cost','chickenfriedrice')" class="btn btn-success">-</button>
                            <span id="chkfr-qty">0</span>
                        <button onclick="increment('chkfr-qty','chickenfriedrice-cost','chickenfriedrice')" class="btn btn-success">+</button>
                    </td>
                </tr>
                <tr>
                    <td class="item-name" id="chickennoodles"><img src="Images/ChickenNoodles.jpg" alt="ChickenNoodles"><br>Chicken Noodles </td>
                    <td id="chickennoodles-cost">60/-</td>
                    <td>
                        <button onclick="decrement('chkn-qty','chickennoodles-cost','chickennoodles')" class="btn btn-success">-</button>
                            <span id="chkn-qty">0</span>
                        <button onclick="increment('chkn-qty','chickennoodles-cost','chickennoodles')" class="btn btn-success">+</button>
                    </td>
                </tr>
                <tr>
                    <td  class="item-name" id="manchurianrice"><img src="Images/ManchurianRice.jpg" alt="ManchurianRice"> <br>Manchurian Rice</td>
                    <td id="manchurianrice-cost">50/-</td>
                    <td>
                        <button onclick="decrement('manrc-qty','manchurianrice-cost','manchurianrice')" class="btn btn-success">-</button>
                            <span id="manrc-qty">0</span>
                        <button onclick="increment('manrc-qty','manchurianrice-cost','manchurianrice')" class="btn btn-success">+</button>
                    </td>
                </tr>
                <tr>
                    <td class="item-name" id="manchuriannoodles"><img src="Images/ManchurianNoodles.jpg" alt="ManchurianNoodles"><br>Manchurian Noodles </td>
                    <td id="manchuriannoodles-cost">50/-</td>
                    <td>
                    <button onclick="decrement('mno-qty','manchuriannoodles-cost','manchuriannoodles')" class="btn btn-success">-</button>
                        <span id="mno-qty">0</span>
                    <button onclick="increment('mno-qty','manchuriannoodles-cost','manchuriannoodles')" class="btn btn-success">+</button>
                    </td>
                </tr>
                <tr>
                    <td class="item-name" id="vegnoodles"> <img src="Images/VegNoodles.jpg" alt="VegNoodles"><br>Veg Noodles</td>
                    <td id="vegnoodles-cost">40/-</td>
                    <td>
                        <button onclick="decrement('vegn-qty','vegnoodles-cost','Vegnoodles')" class="btn btn-success">-</button>
                            <span id="vegn-qty">0</span>
                        <button onclick="increment('vegn-qty','vegnoodles-cost','Vegnoodles')" class="btn btn-success">+</button>
                    </td>
                </tr>
                <tr>
                    <td class="item-name" id="eggnoodles"><img src="Images/EggNoodles.jpg" alt="EggNoodles"> <br>Egg Noodles </td>
                    <td id="eggnoodles-cost">50/-</td>
                    <td>
                        <button onclick="decrement('eggn-qty','eggnoodles-cost','eggnoodles')" class="btn btn-success">-</button>
                            <span id="eggn-qty">0</span>
                        <button onclick="increment('eggn-qty','eggnoodles-cost','eggnoodles')" class="btn btn-success">+</button>
                    </td>
                </tr>
                <tr>
                    <td class="item-name" id="eggfriedrice"> <img src="Images/EggFriedRice.jpg" alt="EggFriedRice"><br>Egg Fried Rice</td>
                    <td id="eggfriedrice-cost">50/-</td>
                    <td>
                        <button onclick="decrement('eggfr-qty','eggfriedrice-cost','eggfriedrice')" class="btn btn-success">-</button>
                            <span id="eggfr-qty">0</span>
                        <button onclick="increment('eggfr-qty','eggfriedrice-cost','eggfriedrice')" class="btn btn-success">+</button>
                    </td>
                </tr>
                <tr>
                    <td class="item-name" id="meals"><img src="Images/Meals.jpg" alt="Meals"><br>Meals </td>
                    <td id="meals-cost">50/-</td>
                    <td>
                    <button onclick="decrement('meals-qty','meals-cost','meals')" class="btn btn-success">-</button>
                        <span id="meals-qty">0</span>
                    <button onclick="increment('meals-qty','meals-cost','meals')" class="btn btn-success">+</button>
                </td>
                </tr>
                <tr>
                    <td class="item-name" id="coke"><img src="Images/Coke.jpg" alt="Coke"><br>Coke </td>
                    <td id="coke-cost">20/-</td>
                    <td>
                        <button onclick="decrement('coke-qty','coke-cost','coke')" class="btn btn-success">-</button>
                            <span id="coke-qty">0</span>
                        <button onclick="increment('coke-qty','coke-cost','coke')" class="btn btn-success">+</button>
                    </td>
                </tr>
                                    
            </table>
            <p align="center">
<button type="button" style="margin-left:auto;margin-right:auto;display:block;margin-top:2%;margin-bottom:0%" onclick="cost()" class="btn btn-primary">Proceed</button>
     </p>


        </div>
    </body>
</html>