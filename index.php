A SECTION QUE EU PRECISO... SE PRECISAR DO CÓDIGO TODO, PEDE, POR FAVOR:

  <!--- CADASTRO/LOGIN ----------------------->

       <section id="cadlog">


        <h3>CADASTRO/LOGIN </h3>

        <div class="container">
          <div class="login-box">
          <div class="row">

            <!--- LOGIN----------------->

            <div class="col-md-6 login-left">


              
              <h2>Login</h2>
              <form action="validar.php" method="post">
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" name="senha" class="form-control" required>
                  </div>
                  <button type="submit" class="btn btn-primary" id="entrar">Entrar</button>

              </form>

            </div>

            <!--- CADASTRO----------------->

            <div class="col-md-6 login-right">

                <h2>Cadastro</h2>
                <!--- MUDEI O ACTION PRA ESTA PÁGINA< VISTO QUE O CADASTRO.PHP ESTÁ INCLUSO AQUI----------------->
                <form action="" method="post">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                  </div>
                  <div class="form-group">
                      <label>Senha</label>
                      <input type="password" name="senha" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>

                </form>

              </div>

          </div>

        </div>
        </div>
        
  
       </section>
