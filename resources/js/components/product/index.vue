<template>
    <div>
        <ol class="breadcrumb mt-3 shadow">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">All Product</li>
        </ol>
        <div class="card shadow" style="margin-bottom:2rem">
            <div class="card-header text-primary" style="font-size: 20px; font-weight:700;">
                <i class="fas fa-chart-area"></i>
                All Product
                <router-link to="/store-product" class="btn btn-primary shadow" id="add_new"> Add New</router-link>
            </div>
            <div class="card-body pt-0">
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="input-group mb-3" style="width:400px;">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                            <input type="text" v-model="searchTerm" class="form-control" placeholder="Search Product Name" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <table class="table table-striped table-hover" id="" width="100%" cellspacing="0" style="font-size:2vh">

                            <thead class="shadow">
                            <tr class="text-white" style="background-color:#7E2E95;">
                                <th>Product Name</th>
                                <th>Product Code</th>
                                <th>Image</th>
                                <th>Category</th>
                                <th>Sub-Catagory</th>
                                <th>Buying Price</th>
                                <th>Selling Price</th>
                                <th style="width:10%">Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr v-for="product in filtersearch" :key="product.id">
                                <td>{{ product.product_name}}</td>
                                <td>{{ product.product_code}}</td>
                                <td><img :src="product.image" id="em_photo"></td>
                                <td>{{ product.category_name }}</td>
                                <td>{{ product.root }}</td>
                                <td>{{ Number(product.buying_price).toLocaleString() }} IDR</td>
                                <td>{{ Number(product.selling_price).toLocaleString() }} IDR</td>
                                <td>
                                    <router-link :to="{name: 'edit-product', params:{id: product.id} }" class="btn btn-sm btn-warning shadow" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></router-link>
                                    <a @click="deleteProduct(product.id)" class="btn btn-sm btn-danger text-white shadow" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
        </div>
    </div>
</template>


<script>
    export default {
        mounted(){
            if (!User.loggedIn()) {
                this.$router.push({ name:'/' })
            }
        },
        created(){
            this.allProduct();
        },
        data(){
            return{
                products:[],
                searchTerm:'',
            }
        },
        computed:{
            filtersearch(){
                return this.products.filter(product => {
                    return product.product_name.match(this.searchTerm)
                })
            }
        },
        methods:{
            allProduct(){
                axios.get('/api/product/')
                    .then(({data}) => (this.products = data))
                    .catch()
            },
            deleteProduct(id){
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        axios.delete('/api/product/'+id)
                            .then(()=>{
                                this.products = this.products.filter(product =>{
                                    return product.id !=id
                                })
                            })
                            .catch(()=>{
                                this.$router.push({name: 'product'})
                            })
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })
            }
        },
    }
</script>


<style>
    #add_new{
        float: right;
    }
    #em_photo{
        height: 40px;
        width: 40px;
    }
</style>
