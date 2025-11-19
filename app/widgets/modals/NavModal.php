
<?php

   function NavModal(){

?>
    
    <div class="nav-modal-user d-none" id="nav-modal-user">
        <div class="p-2" style="padding-bottom: 1rem;">
            <div class="pb-1">
                <p class="text" style="color: #96999E;font-size: 11px;font-weight: bold;">CUENTA</p>
            </div>
            <div class="d-flex align-center" style="gap: 5px;">
                <div>
                    <img width="30" src="https://trello-members.s3.amazonaws.com/6706cd4e4e0657e62ad8ff3d/d94f92f34779024745a5a1aea7e98448/50.png" alt="">
                </div>
                <div>
                    <p class="text" style="color: #96999E;"><?php echo $_SESSION['result']; ?></p>
                </div>
            </div>
        </div>
        
        <div>
            <a style="text-decoration: none;" href="#">
                <p class="text a-nav-ajustes" style="color: #96999E;">Ajustes</p>
            </a>
        </div>
        <div style="padding: 10px 1rem;">
            <hr style="border: 1px solid #96999e60;"></hr>
        </div>
        <div style="padding-bottom: 1rem;">
            <a style="text-decoration: none;" href="/closedSessionUser">
                <p class="text a-nav-ajustes" style="color: #96999E;">Cerrar sesion</p>
            </a>
        </div>
    </div>


   <style>
        .a-nav-ajustes{
            text-decoration: none;
            width: 100%;
            height: 100%;
            padding: 0.5rem 2rem;
        }
        .a-nav-ajustes:hover{
            background-color: #bfc1c423;
        }
    </style>


<?php
    }
?>
