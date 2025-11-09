class AxiosModel{
    index(url,obj){
        axios.post(url,obj)
        .then(res=>{
            window.location.href=res.data.redirect;
        })
    }
}