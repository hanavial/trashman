<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand mx-auto">Input Sampah</a>
        </nav>
        <div class="container py-4">
            <div class="row">
                <div class="col-md-12">
                    <form action="">
                        <div class="form-group">
                            <label for="kategori"><p>Kategori Sampah</p></label>
                            <select id="subject" class="form-control">
                                <option placeholder="Kategori Sampah">
                                    Kategori
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama"><p>Nama Sampah</p></label>
                            <input type="text"  id="title" class="form-control" placeholder="Nama Sampah">
                            <!-- <div v-if="theErrors.title" class="mt-2 text-danger">{{ theErrors.title[0]}}</div> -->
                        </div>
                        <button type="submit" class="btn btn-block btn-primary shadow">Simpan</button>
                    </form>
                    <router-link class="nav-link" exact :to="{name: 'home'}">Home</router-link>
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
    .navbar a{
        font-weight: 200;
    }
    .bg-primary{
        background-color: #0C325F !important;
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
    input, select{
        border-radius: 7px;
    }
    label{
        margin-bottom: 1px;
    }
    label p{
        margin-bottom: 0;
        font-size: 13px;
    }
</style>
