class AxiosModel{
    index(url,obj){
        axios.post(url,obj)
        .then(res=>{
            console.log(res);
        })
    }
}