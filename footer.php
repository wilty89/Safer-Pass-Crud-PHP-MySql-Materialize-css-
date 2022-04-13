


<footer class="page-footer #283593 indigo darken-3">
          
          <div class="footer-copyright">
            <div class="container">
            <div class="row">
              <div class="col l6 s12">
          <?php  
            echo "<p>Copyright &copy; 1999-" . date("Y") . " gslatam.com</p>";
            echo "Today is " . date("Y/m/d") . "<br>";
            define("GREETING","Hello you! How are you today?");
            echo constant("GREETING");
            ?>
            <?php echo $_SERVER['SERVER_SOFTWARE'] . "<br>" ?>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Enlaces</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                </ul>
              </div>
          </div>
            </div>
          </div>
        </footer>






