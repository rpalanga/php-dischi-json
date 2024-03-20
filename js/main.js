const { createApp } = Vue;


createApp({
    data() {
        return {
            Discs:[],
        }
    },

    mounted() {

        axios.get('./server.php').then(res => {
            console.log(res.data);

            this.Discs = res.data;
        });

    },
}).mount('#app');