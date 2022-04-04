<template>
    <div>
    <form action="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 text-center" @submit.prevent="onSubmit">
        <div class="mb-4">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Title:</label>
            <input type="text" id="title" v-model="form.title" class="mr-1 appearance-none border rounded py-1 px-3 text-gray-700">
        </div>
        <div class="mb-4">
            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Category: </label>
            <select v-model="form.category" id="category" class="border rounded py-1 px-2">
                <option value="">Category</option>
                <option v-for="category in categories" :key="category.id">{{ category.category }}</option>
            </select>  
        </div>
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400" for="body">Body:</label>
        <div class="mb-4">
            <textarea class="shadow appearance-none border" cols="50" rows="10" v-model="form.body"></textarea>
        </div>
        <div class="mb-4">
            <label for="author" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Author:</label>
            <input type="text" v-model="form.author" class="mr-1 appearance-none border rounded py-1 px-3 text-gray-700">
        </div>
        <div>
            <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Edit</button>
        </div>
    </form>   
</div>
</template>

<script>
import axios from 'axios';

export default {
    mounted() {
        console.log(this.blog[0].id)
    },
    data() {
        return {
            form: {
                title: this.blog[0].title,
                category: this.blog[0].category,
                body: this.blog[0].body,
                author: this.blog[0].author,
            }
        }
    },
    props: {
        categories: Array,
        blog: Array,
    }, 
    methods: {
        onSubmit: function() {
            axios.post('edit-'+this.blog[0].id, this.form)
                .then((response) => {
                    alert(response.data.message);
                    location.reload();
                })
                .catch((error) => {
                    console.log(error);
                })
        }
    }
}
</script>