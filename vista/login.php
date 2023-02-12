 <?php require_once("./index.php"); ?>

        <div id="contenedor">
            <div id="central">
                <div id="login">
                    <div class="titulo">
                        Bienvenido
                    </div>
                    <form action="controlador/CtrlLogin.php" method="POST">

                        <input type="text" name="usu" id="usu" placeholder="Usuario" required>
                        
                        <input type="password" placeholder="Contraseña" name="pass" id="pass" required>
                        
                        <button type="submit" title="Ingresar" name="Ingresar">Login</button>

                         <p style="color: white"> </p>
                    </form>
                </div>
            </div>
        </div>
            
    </body>
</html>