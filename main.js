const { createApp } = Vue

createApp({
    data(){
        return{
            tasks: [],
            api_url: 'server.php'
        }
    },
    methods:{
        callApi(url){
            axios.get(url).then(response =>{
                console.log(response.data);
                this.tasks = response.data;

                console.log(this.tasks);
            }).catch(err =>{
                console.log(err.message);
            })
        }
    },
    mounted(){
        this.callApi(this.api_url);
    }
}).mount('#app')