<header>
        <div class="header">
            <div class="header_title">Product List</div>
            <div class="header_buttons">
                <div class="header_button">
                <input type="button" onclick="document.location.href = 'addproduct'" name="ADD" id="ADD" value="ADD"/>
                <input type="button" onclick="alert('x')" id="x">
                 
                </div>
                <div class="header_button">
                <input type="button" onclick='deleteChecked()' id="delete-product-btn" value="MASS DELETE"/> 
                    
                </div>
            </div>
        </div>
    </header>
    <hr>
    <section>
        <div class="products">
            <div class="products_list">
                <?php        
                foreach($products as $product){
                    ?>
                    <div class="product">
                        <div class="product_checkbox">
                            <label class="product_container">
                                <input type="checkbox" id="<?php echo ($product['id']) ?>" class="delete-checkbox">
                                    <span class="product_checkmark"></span>
                            </label>
                        </div>
                        <div class="product_info">
                            <div class="product_id"><?php echo ($product['sku']) ?></div>
                            <div class="product_name"><?php echo ($product['name']) ?></div>
                            <div class="product_price"><?php echo ($product['price']) ?> $</div>
                            <?php
                                if($product['type'] == 'dvd'){
                                    ?>
                                <div class="product_atribute">Size:<?php echo ($product['size']) ?>MB</div>
                                    <?php
                                }elseif($product['type'] == 'book'){
                                    ?>
                                    <div class="product_atribute">Weight:<?php echo ($product['weight']) ?> kg</div>
                                    <?php
                                }elseif($product['type'] == 'furniture'){
                                    ?>
                                    <div class="product_atribute">Demension: <?php echo ($product['height'] . 'x' . $product['width'] . 'x' . $product['length'])?></div>
                                    <?php
                                }
                                
                            ?>                      
                            
                        </div>
                    </div>
                <?php
                    }
                ?>
            </div>
        </div>
        
    </section>
    <footer>
        <div class="footer">
            <hr>
            <div class="footer_title">
                <p>Scandiweb Test assigment</p>
            </div>
        </div>
    </footer>
   