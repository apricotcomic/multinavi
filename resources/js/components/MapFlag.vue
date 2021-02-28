<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>
                    <div class="card-body">
                        <ul>
                            <li v-for="shop in shops" :key="shop.id">{{ shop.shop_name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'
    export default {
        data(){
            return {
                shops: []
            }
        },
        mounted() {
            axios.get('/dataaccess/shopall').then(response => this.shops = response.data)
        }
    }
</script>
