<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand mx-auto">Input Sampah</a>
        </nav>
        <div class="container py-4">
            <div class="row">
                <div class="col-md-12">
                    <form action="#" method="POST" @submit.prevent="store">
                        <div class="form-group">
                            <label for="kategori"><p>Kategori Sampah</p></label>
                            <select v-model="form.kategori_id" id="kategori" class="form-control">
                                <option value="" disabled selected>Kategori</option>
                                <option v-for="kategori in kategori_sampah" :key="kategori.id" :value="kategori.id"  placeholder="Kategori Sampah">
                                    {{kategori.kategori_nama}}
                                </option>
                            </select>
                            <div v-if="theErrors.kategori_id" class="mt-2 text-danger">{{ theErrors.kategori_id[0]}}</div>
                        </div>
                        <div class="form-group">
                            <label for="nama"><p>Nama Sampah</p></label>
                            <input v-model="form.nama"  type="text"  id="nama" class="form-control" placeholder="Nama Sampah">
                            <div v-if="theErrors.nama" class="mt-2 text-danger">{{ theErrors.nama[0]}}</div>
                        </div>
                        <button type="submit" class="btn btn-block btn-primary shadow">Simpan</button>
                    </form>
                    <!-- <router-link class="nav-link" exact :to="{name: 'home'}">Home</router-link> -->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            form: {
                kategori_id: '',
                nama: ''
            },
            kategori_sampah: [],
            theErrors: [],
        }
    },

    mounted(){
        this.getKategori();
    },

    methods:{
        async getKategori(){
            let response = await axios.get('/api/kategori')
            if (response.status === 200) {
                this.kategori_sampah = response.data
            }
        },

        async store(){
            try {
                let response = await axios.post('/api/sampah/new', this.form)
                if (response.status == 200) {
                    this.theErrors = []
                    this.$router.push('/')
                }
            } catch (e) {
                this.theErrors = e.response.data.errors;
            }
        }
    }
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
        padding-top: 0.7rem !important;
        padding-bottom: 0.7rem !important;
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
    .form-control{
        height: calc(1.6em + 0.75rem + 10px);
    }
    input, select{
        border-radius: 7px;
        padding-top: 0.7rem !important;
        padding-bottom: 0.7rem !important;
    }
    label{
        margin-bottom: 1px;
    }
    label p{
        margin-bottom: 0;
        font-size: 13px;
    }
</style>
