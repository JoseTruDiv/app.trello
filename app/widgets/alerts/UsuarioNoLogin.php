<?php
    function UsuarioNoLogin(){
?>


<div id="alert-red-user" class="alert-red">
    <div>
        Error, usuario inválido, vuelva a introducir su usuario.
    </div>
    <div>
        <a id="animation-closed" style="color: #510f0f;" class="a" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
            </svg>
        </a>
    </div>
</div>

<script>
    document.getElementById('animation-closed').addEventListener('click',(e)=>{
        e.preventDefault();
        document.getElementById('alert-red-user').classList.add('animation-alert-closed');
    })
</script>

<?php

    }
?>