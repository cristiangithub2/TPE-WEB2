{include file="./header.tpl"}



<div class="d-flex justify-content-evenly">
    <div class="p-2 bd-highlight">
        <h2 class="text-center"> Inicio de sesión</h2>
        <form method="POST" action="validar">
            <div class="mb-3 text-center">
                <input placeholder="Ingrese su email" type="text" name="email" required>
            </div>
            <div class="mb-3 text-center">
                <input placeholder="Ingrese su contraseña" type="password" name="password" id="password" required>
            </div>
            <div class="mb-3 text-center">
                <input type="submit" class="btn-submit" value="Iniciar sesión">
            </div>
        </form>
        <h4 class="alerta text-center">{$error}</h4>
    </div>
</div>





{include file="./footer.tpl"}