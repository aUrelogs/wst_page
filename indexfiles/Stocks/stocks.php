<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="design_stocks.css">
    <title> Stocks Status</title>

</head>
<body>

    <header>
      
        
        <img src="images/logo.png" class="logo" style="width: 100px;">
        <img class="logo" src="images/logoname.png" alt="logo" style="margin-right: 300px;">
        <nav>
            <ul class ="nav_links">
                <li> <img src="images/userlogoo.png" class="logo" style="width: 20px;"> | <a href="">Admin Log Out</a></li>
            </ul>
        </nav>
    </header>


    <div class="name_of_page">
        <div id="title">Stocks Information</div>
    </div>

    <main>

        <section class="glass">

            <div class="product_one">

                <h2>SMALL CONTAINER ICE CREAM</h2>

                   
                <table>

                    <tr>
                        <td>
                            <h3>Sizes</h3>                         
                        </td>

                        <td>
                            <h3>Flavors</h3>
                        </td>
                    </tr>

                    <tr>
                        <td>
                                <label for="ten_oz">10 oz:</label>
                                <input type="number" name = "ten_oz" value="" placeholder="No. Stock">
                                &nbsp;
                                <input type="submit" value="UPDATE">
                        </td>

                        <td>
                                <label for="straw">Strawberry:</label>
                                <input type="number" name = "straw" value="" placeholder="No. Stock">
                                &nbsp;
                                <input type="submit" value="UPDATE">
                        </td>
                    </tr>

                    <tr>
                        <td>

                                <label for="sixteen_oz">16 oz:</label>
                                <input type="number" name = "sixteen_oz" value="" placeholder="No. Stock">
                                &nbsp;
                                <input type="submit" value="UPDATE">
                        </td>

                        <td>
                                <label for="choco">Chocolate:</label>
                                <input type="number" name = "choco" value="" placeholder="No. Stock">
                                &nbsp;
                                <input type="submit" value="UPDATE">

                        </td>
                    </tr>

                    <tr>
                        <td>
                                <label for="twentysix_oz">26 oz:</label>
                                <input type="number" name = "twentysix_oz" value="" placeholder="No. Stock">
                                &nbsp;
                                <input type="submit" value="UPDATE">
                        </td>

                        <td>                       
                                <label for="mint">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mint:</label>
                                <input type="number" name = "mint" value="" placeholder="No. Stock">
                                &nbsp;
                                <input type="submit" value="UPDATE">

                        </td>
                    </tr>
                           
                    <tr>
                        <td>    
                                <label for="thirtytwo_oz">32 oz:</label>
                                <input type="number" name = "thirtytwo_oz" value="" placeholder="No. Stock">
                                &nbsp;
                                <input type="submit" value="UPDATE">
                        </td>
                    </tr>

                </table>

                <br>
                <br>

                <h3>Current Stocks:</h3>

                <table>

                    <tr>
                        <td>
                            <h3>Sizes</h3>                         
                        </td>

                        <td>
                            <h3>Flavors</h3>
                        </td>
                    </tr>

                    <tr>

                        <td>
                            <div id="current_stock">

                                <p>10 oz:</p>
                                <p>16 oz:</p>
                                <p>26 oz:</p>
                                <p>32 oz:</p>
            
                            </div>
                        </td>

                        <td>
                            <div id="current_stock">

                                <p>Strawberry:</p>
                                <p>Chocolate:</p>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mint:</p>
                                
                            </div>

                        </td>

                    </tr>
    
                </table>

            </div>
        
        </section>

    </main>

    <br>

    <main>

        <section class="glass_one">

            <div class="product_two">
                
                <h2>TUB AND LID CONTAINER ICE</h2>

                <table>

                    <tr>
                        <td>
                            <h3>Size</h3>
                        </td>

                        <td>
                            <h3>Flavors</h3>
                        </td>
                    </tr>

                    <tr>
                        <td>
                                <label for="four_hundred_thirty_ml">430 ml:</label>
                                <input type="number" name = "four_hundred_thirty_ml" value="" placeholder="No. Stock">
                                &nbsp;
                                <input type="submit" value="UPDATE">
                        </td>

                        <td>
                                <label for="straw">Strawberry:</label>
                                <input type="number" name = "straw" value="" placeholder="No. Stock">
                                &nbsp;
                                <input type="submit" value="UPDATE">
                        </td>
                    </tr>

                    <tr>
                        <td>
                                <label for="one_l">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 L:</label>
                                <input type="number" name = "one_l" value="" placeholder="No. Stock">
                                &nbsp;
                                <input type="submit" value="UPDATE">
                        </td>

                        <td>
                                <label for="choco">Chocolate:</label>
                                <input type="number" name = "choco" value="" placeholder="No. Stock">
                                &nbsp;
                                <input type="submit" value="UPDATE">
                        </td>
                    </tr>

                    <tr>
                        <td>
                                <label for="two_hundred_thirty_l">&nbsp;&nbsp;&nbsp;230 L:</label>
                                <input type="number" name = "two_hundred_thirty_l" value="" placeholder="No. Stock">
                                &nbsp;
                                <input type="submit" value="UPDATE">
                        </td>

                        <td>
                                <label for="mint">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mint:</label>
                                <input type="number" name = "mint" value="" placeholder="No. Stock">
                                &nbsp;
                                <input type="submit" value="UPDATE">
                        </td>
                    </tr>

                    <tr>
                        <td>
                                <label for="three_point_eight_l">&nbsp;&nbsp;&nbsp;&nbsp;3.8 L:</label>
                                <input type="number" name = "four_hundred_thirty_ml" value="" placeholder="No. Stock">
                                &nbsp;
                                <input type="submit" value="UPDATE">
                        </td>
                    </tr>
           
                </table>

                <br>
                <br>

                <h3>Current Stocks:</h3>

                <table>

                    <tr>
                        <td>
                            <h3>Sizes</h3>                         
                        </td>

                        <td>
                            <h3>Flavors</h3>
                        </td>
                    </tr>

                    <tr>

                        <td>
                            <div id="current_stock">
    
                                <p>430 ml:</p>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1L:</p>
                                <p>&nbsp;&nbsp;&nbsp;230 L:</p>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;3.8 L:</p>
            
                            </div>
                        </td>
    
                        <td>
                            <div id="current_stock">
    
                                <p>Strawberry:</p>
                                <p>Chocolate:</p>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mint:</p>
                                
                            </div>
    
                        </td>
    
                    </tr>

                </table>

            </div>
   
        </section>

    </main>

    <br>

    <main>

        <section class="glass_two">
            
            <div class="product_three">

                <h2>CONE ICE CREAM (CLASSIC SORBETES)</h2>
                
                <table> 

                    <tr>
                        <td>
                            <h3>Flavors</h3>
                        </td>

                        <td>
                            <h3>Toppings</h3>
                        </td>
                    </tr>

                    <tr>
                        <td>
                                <label for="avocado_macchiato">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Avocado Macchiato:</label>
                                <input type="number" name = "avocado_macchiato" value="" placeholder="No. Stock">
                                &nbsp;
                                <input type="submit" value="UPDATE">
                        </td>

                        <td>
                                <label for="marshmallow">Marshmallow:</label>
                                <input type="radio" name = "marshmallow" value="No Stock"> No Stock
                                <input type="radio" name = "marshmallow" value="Have Stock">Have Stock
                                &nbsp;
                                <input type="submit" value="UPDATE">
                        </td>
                    </tr>

                    <tr>
                        <td>
                                <label for="macapuno_caramel">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Macapuno Caramel:</label>
                                <input type="number" name = "macapuno_caramel" value="" placeholder="No. Stock">
                                &nbsp;
                                <input type="submit" value="UPDATE">
                        </td>

                        <td>
                                <label for="sprinkles">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sprinkles:</label>
                                <input type="radio" name = "sprinkles" value="No Stock">No Stock
                                <input type="radio" name = "sprinkles" value="Have Stock">Have Stock
                                &nbsp;
                                <input type="submit" value="UPDATE"> 
                        </td>
                    </tr>

                    <tr>
                        <td>
                                <label for="mango_dark_chocolate">&nbsp;&nbsp;&nbsp;Mango Dark Chocolate:</label>
                                <input type="number" name = "mango_dark_chocolate" value="" placeholder="No. Stock">
                                &nbsp;
                                <input type="submit" value="UPDATE">
                        </td>
                    </tr>

                    <tr>
                        <td>
                                <label for="mango_salted_chocolate">Mango Salted Chocolate:</label>
                                <input type="number" name = "mango_salted_chocolate" value="" placeholder="No. Stock">
                                &nbsp;
                                <input type="submit" value="UPDATE">      
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="ube_caramelized_sugar">&nbsp;&nbsp;&nbsp;Ube Caramelized Sugar:</label>
                            <input type="number" name = "ube_caramelized_sugar" value="" placeholder="No. Stock">
                            &nbsp;
                            <input type="submit" value="UPDATE">      
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="ube_keso">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ube Keso:</label>
                            <input type="number" name = "ube_keso" value="" placeholder="No. Stock">
                            &nbsp;
                            <input type="submit" value="UPDATE">      
                        </td>
                    </tr>

                </table>

                <br>
                <br>

                <h3>Current Stocks:</h3>

                <table>

                    <tr>
                        <td>
                            <h3>Flavors</h3>                         
                        </td>

                        <td>
                            <h3>Toppings</h3>
                        </td>
                    </tr>

                    <tr>

                        <td>
                            <div id="current_stock">
    
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Avocado Macchiato:</p>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Macapuno Caramel:</p>
                                <p>&nbsp;&nbsp;&nbsp;Mango Dark Chocolate:</p>
                                <p>Mango Salted Chocolate:</p>
                                <p>&nbsp;&nbsp;&nbsp;Ube Caramelized Sugar:</p>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ube Keso:</p>
            
                            </div>
                        </td>
    
                        <td>
                            <div id="current_stock">
    
                                <p>Marshmallow:</p>
                                <p>Sprinkles:</p>
                                
                                
                            </div>
    
                        </td>
    
                    </tr>

                </table>       

            </div>

        </section>

    </main>

    <br>

    <main>

        <section class="glass_three">
            
            <div class="product_four">

                <h2>JAR ICE CREAM</h2>
                
                <table> 

                    <tr>
                        <td>
                            <h3>Flavors</h3>
                        </td>

                        <td>
                            <h3>Toppings</h3>
                        </td>
                    </tr>

                    <tr>
                        <td>
                                <label for="kids_mix">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;90's Kids Mix:</label>
                                <input type="number" name = "kids_mix" value="" placeholder="No. Stock">
                                &nbsp;
                                <input type="submit" value="UPDATE">
                        </td>

                        <td>
                                <label for="marshmallow">Marshmallow:</label>
                                <input type="radio" name = "marshmallow" value="No Stock">No Stock
                                <input type="radio" name = "marshmallow" value="Have Stock">Have Stock
                                &nbsp;
                                <input type="submit" value="UPDATE">
                        </td>
                    </tr>

                    <tr>
                        <td>
                                <label for="brown_sugar_milk_tea">Brown Sugar Milk Tea:</label>
                                <input type="number" name = "brown_sugar_milk_tea" value="" placeholder="No. Stock">
                                &nbsp;
                                <input type="submit" value="UPDATE">
                        </td>

                        <td>
                                <label for="sprinkles">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sprinkles:</label>
                                <input type="radio" name = "sprinkles" value="No Stock">No Stock
                                <input type="radio" name = "sprinkles" value="Have Stock">Have Stock
                                &nbsp;
                                <input type="submit" value="UPDATE"> 
                        </td>
                    </tr>

                    <tr>
                        <td>
                                <label for="campfire_smores">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Campfire Smores:</label>
                                <input type="number" name = "campfire_smores" value="" placeholder="No. Stock">
                                &nbsp;
                                <input type="submit" value="UPDATE">
                        </td>
                    </tr>

                    <tr>
                        <td>
                                <label for="choco_butternut">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Choco Butternut:</label>
                                <input type="number" name = "choco_butternut" value="" placeholder="No. Stock">
                                &nbsp;
                                <input type="submit" value="UPDATE">      
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="cookie_cheesecake">&nbsp;Cookie Cheesecake:</label>
                            <input type="number" name = "cookie_cheesecake" value="" placeholder="No. Stock">
                            &nbsp;
                            <input type="submit" value="UPDATE">      
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="mango_graham">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mango Graham:</label>
                            <input type="number" name = "mango_graham" value="" placeholder="No. Stock">
                            &nbsp;
                            <input type="submit" value="UPDATE">      
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="milk_cookies">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Milk and Cookies:</label>
                            <input type="number" name = "milk_cookies" value="" placeholder="No. Stock">
                            &nbsp;
                            <input type="submit" value="UPDATE">      
                        </td>
                    </tr>

                </table>

                <br>
                <br>

                <h3>Current Stocks:</h3>

                <table>

                    <tr>
                        <td>
                            <h3>Flavors</h3>                         
                        </td>

                        <td>
                            <h3>Toppings</h3>
                        </td>
                    </tr>

                    <tr>

                        <td>
                            <div id="current_stock">
    
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;90's Kids Mix:</p>
                                <p>Brown Sugar Milk Tea:</p>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Campfire Smores:</p>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Choco Butternut:</p>
                                <p>&nbsp;Cookie Cheesecake:</p>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mango Graham:</p>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Milk and Cookies:</p>
            
                            </div>
                        </td>
    
                        <td>
                            <div id="current_stock">
    
                                <p>Marshmallow:</p>
                                <p>Sprinkles:</p>
                                
                                
                            </div>
    
                        </td>
    
                    </tr>

                </table>       

            </div>

        </section>

    </main>

    <br>
    
    <main>

        <section class="glass_four">

            <div class="product_five">

                <h2>Bread Ice Cream</h2>

                <table>

                    <tr>
                        <td>
                            <h3>Flavors</h3>
                        </td>

                        <td>
                            <h3>Toppings</h3>
                        </td>
                    </tr>

                    <tr>
                        <td>
                                <label for="pandesal">Pandesal Ice Cream:</label>
                                <input type="number" name = "pandesal" value="" placeholder="No. Stock">
                                &nbsp;
                                <input type="submit" value="UPDATE">
                        </td>

                        <td>
                                <label for="marshmallow">Marshmallow</label>
                                <input type="radio" name = "marshmallow" value="No Stock">No Stock
                                <input type="radio" name = "marshmallow" value="Have Stock">Have Stock
                                &nbsp;
                                <input type="submit" value="UPDATE">
                        </td>
                    </tr>

                    <tr>
                        <td>
                                <label for="straw_pandesal">Strawberry Pandesal:</label>
                                <input type="number" name = "straw_pandesal" value="" placeholder="No. Stock">
                                &nbsp;
                                <input type="submit" value="UPDATE">
                        </td>

                        <td>
                                <label for="sprinkles">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sprinkles:</label>
                                <input type="radio" name = "sprinkles" value="No Stock">No Stock
                                <input type="radio" name = "sprinkles" value="Have Stock">Have Stock
                                &nbsp;
                                <input type="submit" value="UPDATE"> 
                        </td>
                    </tr>

                    <tr>
                        <td>
                                <label for="ube_pandesal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ube Pandesal:</label>
                                <input type="number" name = "ube_pandesal" value="" placeholder="No. Stock">
                                &nbsp;
                                <input type="submit" value="UPDATE">
                        </td>
                    </tr>

                    <tr>
                        <td>
                                <label for="mochi">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mochi:</label>
                                <input type="number" name = "mochi" value="" placeholder="No. Stock">
                                &nbsp;
                                <input type="submit" value="UPDATE">      
                        </td>
                    </tr>
           
                </table>

                <br>
                <br>

                <h3>Current Stocks:</h3>

                <table>

                    <tr>
                        <td>
                            <h3>Flavors</h3>                         
                        </td>

                        <td>
                            <h3>Toppings</h3>
                        </td>
                    </tr>

                    <tr>

                        <td>
                            <div id="current_stock">
    
                                <p>Pandesal Ice Cream:</p>
                                <p>Strawberry Pandesal:</p>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ube Pandesal:</p>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mochi:</p>
                              
            
                            </div>
                        </td>
    
                        <td>
                            <div id="current_stock">
    
                                <p>Marshmallow:</p>
                                <p>Sprinkles:</p>
                                
                                
                            </div>
    
                        </td>
    
                    </tr>

                </table>       

            </div>

        </section>

    </main>

    <br>

    <main>

        <section class="glass_five">

            <div class="product_six">

                <h2>ICE CREAM COMBO PACKAGES</h2>

                <table>
                    
                    <tr>
                        <td>
                            <h3>Flavors</h3>                         
                        </td>
                    </tr>

                    <tr>
                        <td>
                                <label for="package_one">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;90's Kids Mix + Pandesal Ice Cream W/ Marshmallow & Sprinkles:</label>
                                <input type="number" name = "mochi" value="" placeholder="No. Stock">
                                &nbsp;
                                <input type="submit" value="UPDATE">      
                        </td>
                    </tr>

                    <tr>
                        <td>
                                <label for="package_two">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Brown Sugar Milk Tea + Mochi w/ Marshmallow & Sprinkles:</label>
                                <input type="number" name = "mochi" value="" placeholder="No. Stock">
                                &nbsp;
                                <input type="submit" value="UPDATE">      
                        </td>
                    </tr>

                    <tr>
                        <td>
                                <label for="package_three">Campfire Smores + Strawberry Pandesal w/ Marshmallow & Sprinkles:</label>
                                <input type="number" name = "mochi" value="" placeholder="No. Stock">
                                &nbsp;
                                <input type="submit" value="UPDATE">      
                        </td>
                    </tr>

                    <tr>
                        <td>
                                <label for="package_four">&nbsp;Choco Butternut + Strawberry Pandesal w/ Marshmallow & Sprinkles:</label>
                                <input type="number" name = "mochi" value="" placeholder="No. Stock">
                                &nbsp;
                                <input type="submit" value="UPDATE">      
                        </td>
                    </tr>

                    <tr>
                        <td>
                                <label for="package_five">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ube Caramelized Sugar + Ube Pandesal:</label>
                                <input type="number" name = "mochi" value="" placeholder="No. Stock">
                                &nbsp;
                                <input type="submit" value="UPDATE">      
                        </td>
                    </tr>

                    <tr>
                        <td>
                                <label for="package_six">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mango Dark Chocolate + Mochi:</label>
                                <input type="number" name = "mochi" value="" placeholder="No. Stock">
                                &nbsp;
                                <input type="submit" value="UPDATE">      
                        </td>
                    </tr>

                </table>

                <br>
                <br>

                <h3>Current Stocks:</h3>

                <table>

                    <tr>
                        <td>
                            <h3>Flavors</h3>                         
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div id="current_stock">
    
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;90's Kids Mix + Pandesal Ice Cream W/ Marshmallow & Sprinkles:</p>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Brown Sugar Milk Tea + Mochi w/ Marshmallow & Sprinkles:</p>
                                <p>Campfire Smores + Strawberry Pandesal w/ Marshmallow & Sprinkles:</p>
                                <p>&nbsp;Choco Butternut + Strawberry Pandesal w/ Marshmallow & Sprinkles:</p>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ube Caramelized Sugar + Ube Pandesal:</p>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mango Dark Chocolate + Mochi:</p>
            
                            </div>
                        </td>
                    </tr>

                </table>       


            </div>

        </section>

    </main>

</body>
</html>