
<!-- Dynamically generating cards based off of param input--->
<?php                
                if (isset($_GET['cards'])){
                        $checker = range(1,100);
                        foreach ($checker as $key => $number) {
                            $check = array();
                            array_push($check,(int)$number);
                        }
                        $cards = $_GET['cards'];
                        foreach ($checker as $key => $value) {
                            if($value==$cards){
                                $cards = (int)$cards;
                                for ($i=0; $i < $cards; $i++) { 
                                    ?> 
                                    <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="img/tea.jpg" alt="Card image cap">
                                    <div class="card-body">
                                      <h5 class="card-title">tea</h5>
                                      <p class="card-text">Percolator grounds redeye qui caffeine frappuccino whipped spoon. Irish est eu filter flavour aromatic, steamed pumpkin spice affogato brewed shop.</p>
                                    </div>
                                    </div>
                                    <?php
                                }

                            }
                        }
                        }
?> 