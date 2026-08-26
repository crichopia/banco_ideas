<style>
    /* forms */
    form{
        display:                             flex;
        flex-direction:                    column;
        /* place-items:                       center; */
        justify-content:                   center;
        width:                                60%;
        @media (max-width: 800px) {
            width: 90%;
        }
    }
    form input{
        margin:                               5px 0;
        padding:                           8px 10px;
        border-radius:                         25px;
        border:                                none;
    }
    form button{
        margin:                              10px 0;
        padding:                          12px 10px;
        border-radius:                         25px;
        border:                                none;
        background-color:                 #bd8fda;
        font-weight:                           bold;
        color:                               #fff;
        cursor:                             pointer;
        width:                                  60%;
        @media (max-width: 800px) {
            width: 70%;
            padding: 15px 10px;
        }
    }

</style>

<div class="cardContainer">
    <article class="card">
        <h1>Iniciar sesión</h1>
        <form action="/banco_ideas/controllers/login.php" method="POST">
            <h2>Usuario</h2>
            <input type="text" name="username" required >

            <h2>Contraseña</h2>
            <input type="password" name="password" required>

            <div class="centerTheDamnButton">
                <button type="submit" name="login">Iniciar sesión</button>
            </div>
        </form>
    </article>
</div>
