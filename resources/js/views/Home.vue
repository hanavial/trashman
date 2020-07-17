<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand mx-auto">Data Sampah</a>
        </nav>
        <div class="container py-3">
            <div class="row">
                <div class="col-md-12">
                    <router-link class="btn btn-block btn-primary py-2 mb-3 shadow" exact :to="{name: 'create'}">Tambah</router-link>
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
                    <div class="card mt-2">
                        <div class="card-body">
                            <p>Plastik Kresek</p>
                        </div>
                    </div>
                    <div class="card mt-2">
                        <div class="card-body">
                            <p>Baja Ringan</p>
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
    .card-body{
        border: none;
        border-radius: 100px;
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
    /* #0C325F
        #30AEE4
        #EEEEEE
     */
</style>
