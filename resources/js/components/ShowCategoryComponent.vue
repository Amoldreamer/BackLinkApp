<template>
    <div>
        <div v-for="(category,index) in this.categories" :key="index">
            <h4>{{category.categoryname}}</h4>
            <ul>
                <li v-for="(subcat,index) in category.subcategories" :key="index">{{subcat.subcategoryname}}</li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        props:['categories'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
