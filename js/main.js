const { createApp } = Vue;


createApp({
    data() {
        return {
            Discs:[],
            clickedFoto:[],
            overFoto: false,
        }
    },

    methods:{
        overLay(currentIndex){
            axios.get('./server.php').then(res => {
                console.log(res.data[currentIndex]);

                this.clickedFoto = res.data[currentIndex];
                this.overFoto = true;
            })
        }
    },

    mounted() {

        axios.get('./server.php').then(res => {
            console.log(res.data);

            this.Discs = res.data;
        });

    },
}).mount('#app');