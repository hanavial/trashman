<template>
    <a ref="deleteSampah" @click="destroySampah" class="nav-link pull-right delete">Hapus</a>
</template>

<script>
export default {
    props: ['endpoint'],
    methods: {
        async destroySampah(){
            let q = window.confirm("Apakah anda yakin ?");

            if (q == true) {
                let response = await axios.delete(`/api/sampah/${this.endpoint}/delete`);
                if (response.status == 200) {
                    this.$refs.deleteSampah.parentNode.parentNode.parentNode.remove();
                }
            }
        }
    }
}
</script>

<style>

</style>
