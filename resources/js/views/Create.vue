<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand mx-auto">Input Sampah</a>
        </nav>
        <div class="container py-4">
            <div class="row">
                <div class="col-md-6">
                    <form action="">
                        <div class="form-group">
                            <label for="kategori">Kategori Sampah</label>
                            <select id="subject" class="form-control">
                                <option placeholder="Kategori Sampah">
                                    Kategori
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Sampah</label>
                            <input type="text"  id="title" class="form-control" placeholder="Nama Sampah">
                            <!-- <div v-if="theErrors.title" class="mt-2 text-danger">{{ theErrors.title[0]}}</div> -->
                        </div>
                        <button type="submit" class="btn btn-block btn-primary">Simpan</button>
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

<style>

</style>
