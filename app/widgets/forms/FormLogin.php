<?php
    require_once __DIR__.'/../sections/FooterBoxLogin.php';
?>

<?php function FormLogin(){?>

    <div class="p-2 d-flex justify-center align-center h-100">
        <div id="box-email" class="box-login">
            <form id="form01" action="#">
                    <div class="d-flex flex-column g-1">
                <div class="d-flex align-center flex-column">
                    <svg height="40" viewBox="0 0 113 32">
                        <path fill="var(--text-color, #1e1f21)" d="M104.97 25.64c-4.6 0-7.3-3.4-7.3-8s2.7-7.94 7.3-7.94c4.57 0 7.24 3.34 7.24 7.94s-2.67 8-7.24 8m0-13.49c-3.28 0-4.72 2.58-4.72 5.49s1.44 5.55 4.72 5.55c3.25 0 4.66-2.64 4.66-5.55s-1.41-5.49-4.66-5.49M96.21 25.3c-.21.06-.67.12-1.35.12-2.51 0-4.11-1.19-4.11-4.02V3.59h2.64V21.1c0 1.38.92 1.87 2.06 1.87.28 0 .46 0 .77-.03zm-8 0c-.21.06-.67.12-1.35.12-2.51 0-4.11-1.19-4.11-4.02V3.59h2.64V21.1c0 1.38.92 1.87 2.06 1.87.28 0 .46 0 .77-.03zM72.86 12.09c-2.79 0-4.2 1.81-4.48 4.48h8.56c-.15-2.85-1.44-4.48-4.08-4.48m5.89 12.64c-1.26.67-3.19.92-4.75.92-5.73 0-8.25-3.31-8.25-8 0-4.63 2.58-7.94 7.24-7.94 4.72 0 6.62 3.28 6.62 7.94v1.2H68.42c.37 2.61 2.05 4.29 5.67 4.29 1.78 0 3.28-.34 4.66-.83zm-19.48-8.44v9.05h-2.58V10h2.58v2.7c.89-1.81 2.42-3.1 5.43-2.91v2.58c-3.37-.34-5.43.67-5.43 3.93M40.28 5.19h15.09v2.64H49.2v17.51h-2.76V7.82h-6.16z"></path>
                        <path fill="var(--tile-color,#1558bc)" d="M0 8a8 8 0 0 1 8-8h16a8 8 0 0 1 8 8v16a8 8 0 0 1-8 8H8a8 8 0 0 1-8-8z"></path>
                        <path fill="var(--icon-color, white)" d="M12.9 24c.62 0 1.13-.49 1.13-1.1V9.1c0-.61-.5-1.1-1.13-1.1H8.13C7.51 8 7 8.49 7 9.1v13.8c0 .61.5 1.1 1.13 1.1zm10.97-6.34c.62 0 1.13-.49 1.13-1.1V9.1c0-.61-.5-1.1-1.13-1.1H19.1c-.62 0-1.13.49-1.13 1.1v7.47c0 .61.5 1.1 1.13 1.1z"></path>
                    </svg>
                    <p class="text text-center" style="color: black;font-weight: bold;margin-top: 5px;">Inicia sesión para continuar</p>
                </div>
                <div class="d-flex justify-center flex-column">
                    <input type="email" class="text input-login" name="emailLogin" id="emailLogin" placeholder="Introduce tu correo electrónico..." required>
                    <p class="text" style="margin-top: 10px;"><input type="checkbox" name="save-point" id="save-point"> Recordarme</p>
                </div>
                <div>
                    <button id="btn-email-login" class="btn-login" type="submit">Continuar</button>
                </div>
                <?= FooterBox(); ?>
            </form>
        </div>
    </div>
    









    <div id="box-password" class="box-login d-none">
        <form id="form-login" class="d-flex flex-column g-1" action="getUser" method="post">
            <div class="d-flex align-center flex-column">
                <svg height="40" viewBox="0 0 113 32">
                    <path fill="var(--text-color, #1e1f21)" d="M104.97 25.64c-4.6 0-7.3-3.4-7.3-8s2.7-7.94 7.3-7.94c4.57 0 7.24 3.34 7.24 7.94s-2.67 8-7.24 8m0-13.49c-3.28 0-4.72 2.58-4.72 5.49s1.44 5.55 4.72 5.55c3.25 0 4.66-2.64 4.66-5.55s-1.41-5.49-4.66-5.49M96.21 25.3c-.21.06-.67.12-1.35.12-2.51 0-4.11-1.19-4.11-4.02V3.59h2.64V21.1c0 1.38.92 1.87 2.06 1.87.28 0 .46 0 .77-.03zm-8 0c-.21.06-.67.12-1.35.12-2.51 0-4.11-1.19-4.11-4.02V3.59h2.64V21.1c0 1.38.92 1.87 2.06 1.87.28 0 .46 0 .77-.03zM72.86 12.09c-2.79 0-4.2 1.81-4.48 4.48h8.56c-.15-2.85-1.44-4.48-4.08-4.48m5.89 12.64c-1.26.67-3.19.92-4.75.92-5.73 0-8.25-3.31-8.25-8 0-4.63 2.58-7.94 7.24-7.94 4.72 0 6.62 3.28 6.62 7.94v1.2H68.42c.37 2.61 2.05 4.29 5.67 4.29 1.78 0 3.28-.34 4.66-.83zm-19.48-8.44v9.05h-2.58V10h2.58v2.7c.89-1.81 2.42-3.1 5.43-2.91v2.58c-3.37-.34-5.43.67-5.43 3.93M40.28 5.19h15.09v2.64H49.2v17.51h-2.76V7.82h-6.16z"></path>
                    <path fill="var(--tile-color,#1558bc)" d="M0 8a8 8 0 0 1 8-8h16a8 8 0 0 1 8 8v16a8 8 0 0 1-8 8H8a8 8 0 0 1-8-8z"></path>
                    <path fill="var(--icon-color, white)" d="M12.9 24c.62 0 1.13-.49 1.13-1.1V9.1c0-.61-.5-1.1-1.13-1.1H8.13C7.51 8 7 8.49 7 9.1v13.8c0 .61.5 1.1 1.13 1.1zm10.97-6.34c.62 0 1.13-.49 1.13-1.1V9.1c0-.61-.5-1.1-1.13-1.1H19.1c-.62 0-1.13.49-1.13 1.1v7.47c0 .61.5 1.1 1.13 1.1z"></path>
                </svg>
                <p class="text text-center" style="color: black;font-weight: bold;margin-top: 5px;">Inicia sesión para continuar</p>
            </div>
            <div class="d-flex justify-center flex-column">
                <input type="hidden" name="emailLogin" id="emailLoginHidden">
                <input type="hidden" name="savePoint" id="savePoint">
                <input type="password" class="text input-login" name="passwordLogin" id="passwordLogin" placeholder="password" required>
            </div>
            <div>
                <button class="btn-login" type="submit">Continuar</button>
            </div>
            <?= FooterBox(); ?>
        </form>
    </div>


</div>


<script src="<?php echo '/app/viewmodels/loginVM/sessionsLogin.js'; ?>"></script>

<script>
    const sessionLogin = new SessionLogin();
    const emailLogin = document.getElementById('emailLogin');
    const passwordLogin = document.getElementById('passwordLogin');
    const boxEmail = document.getElementById('box-email');
    const boxPassword = document.getElementById('box-password')
    document.getElementById('form01').addEventListener('submit',(e)=>{
        e.preventDefault();
        document.getElementById('savePoint').value = document.getElementById('save-point').checked ? '1' : '0';
    })
    document.getElementById('btn-email-login').addEventListener('click',(e)=>{
        document.getElementById('emailLoginHidden').value=emailLogin.value;
        boxPassword.classList.add('d-block');
        boxPassword.classList.remove('d-none');
        boxEmail.classList.add('d-none');
        boxEmail.classList.remove('d-block');
    })

    document.getElementById('form-login').addEventListener('submit',(e)=>{
        e.preventDefault();
        axiosVM = new AxiosVM();
        axiosVM.index(e.target.action,e);
    })

</script>



<?php }?>