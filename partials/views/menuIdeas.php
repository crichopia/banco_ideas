<?php require_once __DIR__ . '/../../config/db.php'; ?>

<style>
.menuDeIdeas{
    margin:                     10px 0;
    width:                        100%;
    display:                      grid;
    grid-template-columns:     1fr 1fr;
    place-items:                center;
    gap:                          10px;

    @media (max-width: 800px) {
        display:          flex;
        flex-direction: column;
    }
}

.Idea{
    background-color:       #463477;
    width:                        80%;
    min-height:                  80px;
    border:       #bd6def solid 2px;
    border-radius:               15px;
    box-shadow: 0px 0px 5px #bd6def;
    display:                     flex;
    flex-direction:            column;
    align-items:               center;
    justify-content:           center;
    padding:                10px 20px;
    padding-top:                 15px;
    transition: all 0.5s ease;

}

.Idea h1{
    text-decoration: none;
    color:        inherit;
    font-size:       20px;
}

a {
    color:         #fff;
    font-size:       20px;
}
.IdeasHeader{
    width:                    100%;
    display:                  grid;
    grid-template-columns: 2fr 1fr;
    place-items:            center;    
}

.IdeasDescription{
    align-self: baseline;
    text-align: justify;
    max-height: 0;
    opacity: 0;
    overflow: hidden;
    transition: max-height 0.4s ease, opacity 0.4s ease, padding 0.4s ease;
    padding-top: 0;
    padding-bottom: 0;
}


.icono-rotar {
    background-color:    none;
    cursor:           pointer;
    transition: all 0.5s ease;
    font-size: 25px;
}

/* Esta clase se añadirá con JavaScript al hacer clic */
.icono-rotar:hover {
    scale: 1.4;
    
}
.rotado{
    transform: rotate(180deg);

}

.hidden {
    /* Animated collapse instead of display:none */
    display: block !important;
    max-height: 0 !important;
    opacity: 0 !important;
    overflow: hidden !important;
    padding-top: 0 !important;
    padding-bottom: 0 !important;
    transition: max-height 0.4s ease, opacity 0.4s ease, padding 0.4s ease;
}

.IdeasDescription:not(.hidden) {
    max-height: 400px;
    opacity: 1;
    padding-top: 10px;
    padding-bottom: 10px;
}

#filtros{
    margin: 10px 0;
}
select{
    margin:                                   0;
    padding:                           8px 10px;
    border-radius:                         25px;
    border:                                none;
    background-color:                 #bd8fda;
    font-weight:                           bold;
    color:                               #fff;
    cursor:                             pointer;
    /* width:                                  60%; */
}

button{
    margin:                                   0;
    padding:                           8px 10px;
    border-radius:                         25px;
    border:                                none;
    background-color:                 #bd8fda;
    font-weight:                           bold;
    color:                               #fff;
    cursor:                             pointer;
}

#mostrarTodas{
    display: none;
}

#volver{
    align-self:             flex-start;
    font-size:                    25px;
    color:                      #fff;
    background-color:         #463477;
    border-radius:                100%;

}
</style>

<div class="cardContainer">
    <div class="card ">
        <!--<a href="/banco_ideas/index.php" id="volver"><i class="fa-solid fa-arrow-left"></i></a>-->
        <h1>Ideas</h1>

        <div id="filtros">
            <select id="filtroCategoria" onchange="filtrarIdeas()">
                <option value="">Todas las categorías</option>
                <?php
                $query = "SELECT * FROM categorias ";
                $result_tasks = mysqli_query($conn, $query);
                
                while ($row = mysqli_fetch_assoc($result_tasks)) {
                    echo '<option value="' . htmlspecialchars($row['categoria']) . '">' . htmlspecialchars($row['categoria']) . '</option>';
                }
                ?>
            </select>
            <button onclick="ideaAleatoria()">Idea Aleatoria</button>
            <button onclick="window.location.href='dashboards/addIdeaDashboard.php'">Nueva Idea</button>

        </div>

        <div class="menuDeIdeas">
            <?php
                $query = "SELECT * FROM ideas WHERE autor = '{$_SESSION['username']}' ORDER BY id ASC";
                $result_tasks  = mysqli_query($conn, $query);
                if (!$result_tasks) {
                    die('Error en la consulta: ' . mysqli_error($conn));
                }
                while($row = mysqli_fetch_array($result_tasks)){?>
                    <div class="Idea <?php echo $row['categoria']; ?>">
                        <div class="IdeasHeader">
                            <h1 href=""><?php echo $row['titulo'];?></h1> 
                            <i class="fa-solid fa-angle-down icono-rotar" onclick="rotarIcono(this), abrirDescripcion( <?php echo "desc" . $row['id'] ?> )"></i>
                        </div>
                        <div class="IdeasDescription hidden" id="<?php echo "desc" . $row['id'] ?>">
                            <p><?php echo $row['descripcion'];?></p>
                            <div class="centerTheDamnButton">
                                <a href="/banco_ideas/controllers/crud_ideas.php?delId= <?php echo $row['id']; ?>" onclick="return confirm('¿Estás seguro de que deseas eliminar esta idea?')"><i class="fa-solid fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
            <?php } ?>

        </div>
        <div class="centerTheDamnButton">
            <a href="" onclick="mostrarTodasLasIdeas()" id="mostrarTodas">Mostrar Todas</a>
        </div>

    </div>
</div>
