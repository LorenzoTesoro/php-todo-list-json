const { createApp } = Vue

createApp({
    data(){
        return{
            tasks: [],
            api_url: 'read-tasks.php', // endpoint solo per leggere le task
            newTask: ''
        }
    },
    methods:{
        readTasks(url){
            axios.get(url).then(response =>{
                console.log(response.data);
                this.tasks = response.data;

                console.log(this.tasks);
            }).catch(err =>{
                console.log(err.message);
            })
        },
        saveTask(){
            const data = {
                title: this.newTask // dati da trasmettere nella richiesta post
            }

            axios.post('store-tasks.php', data, {
                headers: {'Content-Type': 'multipart/form-data'}
            }).then(response =>{
                console.log(response);
                this.tasks = response.data;
            }).catch(err =>{
                console.log(err.message);
            })
            newTask = ' ';
        }
    },
    mounted(){
        this.readTasks(this.api_url);
    }
}).mount('#app')