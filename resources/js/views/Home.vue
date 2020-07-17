<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand mx-auto">Data Sampah</a>
        </nav>
        <div class="container py-4">
            <div class="row">
                <div class="col-md-6">
                    <router-link class="btn btn-block btn-primary py-2" exact :to="{name: 'create'}">Tambah</router-link>
                    <!-- <h1>Home</h1> -->
                    <div class="card mt-2">
                        <div class="card-body">
                            <p>Kertas HVS</p>
                        </div>
                    </div>
                    <div class="card mt-2">
                        <div class="card-body">
                            <p>Plastik PET</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {

}
</script>

<style scoped>
    .container{
        background-color: #EEEEEE;
    }
    .navbar a{
        font-weight: 200;
    }
    .bg-primary{
        background-color: #0C325F !important;
    }
    .btn-primary{
        background-color: #30AEE4;
        border: none;
    }
    .btn-primary:hover{
        background-color: #23a6df;
        border: none;
    }
    /* #0C325F
        #30AEE4
        #EEEEEE
     */
</style>
