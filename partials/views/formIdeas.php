<?php require_once __DIR__ . '/../../config/db.php'; ?>

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
    form textarea{
        display: flex;
        border:        none;
        border-radius: 20px;
        margin-bottom: 10px;
        padding:        5px;
        resize: none;
        max-width:          95%;
        min-height:         100px;
    }

    form select{
        margin:                              5px 0;
        padding:                          8px 10px;
        border-radius:                         25px;
        border:                                none;
        background-color:                 #bd8fda;
        font-weight:                           bold;
        color:                               #fff;
        cursor:                             pointer;
        width:                                  60%;
        @media (max-width: 800px) {
            width: 70%;
        }
    }

    form button{
        margin:                              5px 0;
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
        <h1>Guardar Idea</h1>
        <form action="/banco_ideas/controllers/crud_ideas.php" method="POST">
            <h2>Titulo</h2>
            <input type="text" name="title" required placeholder="titulo">

            <h2>Descripcion</h2>
            <textarea name="description" placeholder="descripcion"></textarea>

            <div>
                <select name="categoria" required>
                    <?php
                    $query = "SELECT * FROM categorias ORDER BY id ASC";
                    $result_tasks = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_assoc($result_tasks)) {
                        echo '<option value="' . htmlspecialchars($row['categoria']) . '">' . htmlspecialchars($row['categoria']) . '</option>';
                    }
                    ?>
                </select>
            <div class="centerTheDamnButton">
                <button type="submit" name="save_idea">guardar</button>
            </div>
        </form>
    </article>
</div>
