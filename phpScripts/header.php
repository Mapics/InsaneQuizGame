<?php  
            if(isset($_SESSION['pseudo']) && (isset($_SESSION['email']))) {
                echo $_SESSION['pseudo'];
            } else {
                ?>
                <div class="connexion">
                    <a href="#" class="loginBtn">LOGIN</a>
                    <a href="#" class="registerBtn">REGISTER</a>
                </div>
                <?php
            }
            ?>