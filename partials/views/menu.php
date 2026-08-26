<style>
.menuDeHerramientas{
    width:                        100%;
    display:                      grid;
    grid-template-columns: 1fr 1fr;
    place-items: center;
    gap: 10px;

    @media (max-width: 800px) {
        display: flex;
        flex-direction: column;
    }
}

.herramienta{
    background-color:       #463477;
    width:                        80%;
    height:                      80px;
    border:       #bd6def solid 2px;
    border-radius:               15px;
    box-shadow: 0px 0px 5px #bd6def;
    display:                     flex;
    align-items:               center;
    padding:                   0 20px;
}

.herramienta a{
    text-decoration: none;
    color:        inherit;
    font-size:       20px;
}

.herramientaHeader{
    width:                    100%;
    display:                  grid;
    grid-template-columns: 2fr 1fr;
    place-items:            center;    
}
/* .herramientaHeader a{
    cursor: pointer;
} */
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

</style>

<div class="cardContainer">
    <div class="card ">

        <h1>Menu</h1>
        <div class="menuDeHerramientas">

            <div class="herramienta">
                <div class="herramientaHeader">
                    <a href="/banco_ideas/dashboards/IdeaBankDashboard.php">Banco de ideas</a> 
                </div>
            </div>
        </div>
    </div>
</div>
