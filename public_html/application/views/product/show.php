<header>
        <div class="header">
            <div class="header_title">Product Add</div>
            <div class="header_buttons">
                <div class="header_button">
                <input type="submit"  form="product_form" onclick='addProduct()' value="Save" id="add"/>
                </div>
                <div class="header_button">
                <input type="reset"  form="product_form" onclick="document.location.href = '/'" value="Cancel"/> 
                </div>
            </div>
        </div>
    </header>
    <hr>
    <section>
        <form id="product_form">
            
            <table>
                <tr>
                    <td>
                        <label>SKU </label> 
                    </td>
                    <td>
                        <input type="text" name="sku" id="sku"  class="input">
                    </td>
                    
                       
                
                </tr>
                
                
                <tr>
                    <td>
                        <label>Name </label>    
                    </td>
                    <td>
                        <input type="text" name="name" id="name" class="input">
                    </td>
                </tr>
                <tr>
                    <td>
                    <label>Price ($) </label> 
                    </td>
                    <td>
                    <input type="text" name="price" id="price" class="input">
                    </td>
                </tr>
            </table>
            <br>
            <div>
            <label>Type Switcher</label> 
            <select id="productType" name="productType" onchange='changeAction(this.value)' class="input">
                <option value="" name="default" ></option>
                <option value="dvd" name="dvd" id="dvd">DVD</option>
                <option value="book" name="book" id="book">Book</option>
                <option value="furniture" name="furniture" id="furniture">Furniture</option>
            </select>
            </div>
            
            <br>
            <div id="selectTable">

            </div>
            
        </form>
        <p class="result" style="color:red"></p>
    </section>
    <footer>
        <div class="footer">
            <hr>
            <div class="footer_title">
                <p>Scandiweb Test assigment</p>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="../public/js/valid.js"></script>