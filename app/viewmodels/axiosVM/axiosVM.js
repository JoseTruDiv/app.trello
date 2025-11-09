class AxiosVM{
    index(url,e) {
        const axiosModel = new AxiosModel();
        const formData = new FormData(e.target);
        const ObjData = Object.fromEntries(formData);

        axiosModel.index(url,ObjData);
    }
}