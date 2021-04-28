<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="/"><nav class="navbar navbar-light bg-light">
            <div class="container">
              <a class="navbar-brand" href="#">
                <img src="https://image.freepik.com/vecteurs-libre/cinema-logo_23-2147503279.jpg" alt="" width="30" height="24">
              </a>
            </div>
          </nav></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-md-auto">
            <?php
              if(isset($_SESSION['id'])){
              ?>
                 <li class= "nav-item">
                  <a class="nav-link" href="deconnexion.php">Deconnexion</a>
                  </li>

              <?php
              }else{
                ?> 
                  <li class= "nav-item">
                  <a class="nav-link" href="inscription.php">S'inscrire</a>
                  </li>
                  <li class= "nav-item">
                  <a class="nav-link" href="connexion.php">Se connecter</a>
                </li>
              <?php
                }
              ?>

            


            </ul>
            
          </div>
        </div>
      </nav>