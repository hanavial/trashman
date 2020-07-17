<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand mx-auto">Data Sampah</a>
        </nav>
        <div class="container py-4">
            <div class="row">
                <div class="col-md-6">
                    <h1>Home</h1>
                    <router-link class="nav-link" exact :to="{name: 'create'}">Create</router-link>
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
