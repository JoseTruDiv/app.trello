class SessionLogin{
    sessionEmail(email){
        sessionStorage.getItem('loginPermanent')===1?localStorage.setItem('email',email):sessionStorage.setItem('email',email)
    }

    sessionPassword(password){
         sessionStorage.getItem('loginPermanent')===1?localStorage.setItem('password',password):sessionStorage.setItem('password',password)
    }

    sessionPermanent(bool){
        if (bool === 1) {
            sessionStorage.setItem('loginPermanent',true);
        }else{
            sessionStorage.setItem('loginPermanent',false);
        }
    }

}