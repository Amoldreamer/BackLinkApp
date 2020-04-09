<template>
    <div>
        <form action="">
            <div class="form-group">
                <label for="category">Select a category</label>
                <select class="form-control" id="category" v-model="form.category_id">
                    <option v-for="(category,index) in this.categories" :value="category.id" :key="index">
                        {{category.categoryname}}
                    </option>
                </select>
            </div>
            <div class="form-group">
                <label for="subcategory">Select a category if you wish</label>
                <select class="form-control" id="subcategory" v-model="subcategory_id">
                    <option v-for="subcategory in filterSubcategories" :value="subcategory.id">{{subcategory.subcategoryname}}</option>
                </select>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" placeholder="Please enter you email address">
                </div>
                <div class="form-group col-md-6">
                    <label for="url">Enter you domain URL</label>
                    <input type="text" class="form-control" placeholder="https://your-domain.com">
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="text" id="img" class="form-control-file">
            </div>
            <div class="form-group">
                <label for="title">Title of your Domain</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="shortdesc">Short Description</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <vue-editor/>
            </div>
            <button type="submit" class="btn btn-success">Submit your Domain</button>
        </form>
    </div>
</template>
<script>
export default {
    props: ['categories','subcategories'],
    data(){
        return{
            form: new Form({
                email: '',
                title: '',
                url: '',
                shortdesc: '',
                desc: '',
                category_id: '',
                subcategory_id: '',
            })
        }
    },
    computed:{
        filteredSubcategoires:function(){
            return this.subcategories.filter((item) => item.category_id == this.form.category_id);
        }
    }
}
</script>