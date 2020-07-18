<template>
    <div class="home">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand mx-auto">Data Sampah</a>
        </nav>
        <div class="container py-3">
            <div class="row">
                <div class="col-md-12">
                    <router-link class="btn btn-block btn-primary py-2 mb-3 shadow" exact :to="{name: 'create'}">Tambah</router-link>
                    <div class="card mt-2" v-for="sampah in sampahs" :key="sampah.id">
                        <div class="card-body">
                            <p class="name-title">{{sampah.nama}}</p>
                            <div class="row about">
                                <p class="name-category">{{sampah.kategori_nama}}</p>
                                <delete-sampah :endpoint="sampah.id"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import DeleteSampah from './Delete'

export default {
    components:{
        DeleteSampah
    },

    data(){
        return{
            sampahs:[],
        }
    },
    mounted(){
        this.getSampah();
    },
    methods:{
        async getSampah(){
            let {data} = await axios.get('/api/sampah');
            this.sampahs = data.data
        }
    }

}
</script>

<style scoped>
    .home{
        background-color: #EEEEEE;
    }
    .py-3{
        padding-bottom: 200px !important;
    }
    .navbar a{
        font-weight: 200;
    }
    .bg-primary{
        background-color: #0C325F !important;
    }
    .card{
        border: none;
        border-radius: 7px;
        box-shadow: 0 0.9rem 1rem rgba(168, 168, 168, 0.15) !important
    }
    .card-body{
        padding: 0.7rem 0.9rem;
    }
    .btn{
        border-radius: 7px;
    }
    .btn-primary{
        background-color: #30AEE4;
        border: none;
    }
    .btn-primary:hover{
        background-color: #23a6df;
        border: none;
    }
    .shadow{
        box-shadow: 0 0.9rem 1rem rgb(48, 174, 228, 0.15) !important;
    }
    .name-title{
        margin-bottom: 0.2rem;
        font-size: 14px;
    }
    .name-category{
        margin-bottom: 0;
        color: #777777;
    }
    .nav-link{
        padding: 0;
        margin-left: auto;
    }
    .row .about{
        margin: 2px 0;
        font-size: 13px;
    }
    .delete{
        color: #ff1717;
    }
    /*
    #0C325F
    #30AEE4
    #EEEEEE
     */
</style>
