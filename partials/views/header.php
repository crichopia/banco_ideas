<style>
    header{
        display:                             grid;
        grid-template-columns:        1fr 6fr 1fr;
        place-items:                       center;
        color:                             #fff;
        font-family: sans-serif, Arial, Helvetica;
        gap:                                 20px;
        margin:                                 0;
        max-width:                           100%;
        height:                             100px;
        background-color:               #463477;
        border-bottom:        #9254b8 solid 2px;
        padding-left:                          5%;
        & h1{
            margin:                             0;

        }
        @media (max-width: 800px) {
            display: grid;
            grid-template-columns: 1fr 2fr 1fr;
        }

    }
    #logo{
        height: 80px;
        width: 80px;
    }

    #logout{
        color:               #fff;
        border:                none;
        border-radius:         10px;
        background-color: #8e6ac4;
        font-size:             20px;
        padding:           5px 10px;
        cursor:             pointer;
    }

</style>

<header class="header">
    <img id="logo" src="/banco_ideas/img/logo.png" alt="logo">
    <h1 ><span>Crichopian Tools</span></h1>

    <?php if(isset($_SESSION['username'])){
        
    } ?>
    <?php if (isset($_SESSION['username'])) {?>
        <button id="logout" onclick="window.location.href='/banco_ideas/controllers/logout.php'">Logout</button>
    <?php } ?>

</header>