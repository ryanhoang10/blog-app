<template>
    <!-- <div v-for="(item, blog) in blogs" :key="blog">
        <div v-if="blog == 0" class="mt-4 border border-sky-500">
            <h3 class="text-center text-lg">{{ item.title }}</h3>
            <div>
                <h5 class="text-center my-2">{{ item.category }}</h5>
                <p class="p-2">{{ item.body }}</p>
                <div class="flex justify-end">
                    <p class="mr-2"><b>Written By:</b>  {{ item.author }}</p>   
                </div>
                <div class="flex justify-between m-2">
                    <p>{{ item.likes }}</p>
                    <p>{{ item.created_at }}</p>    
                </div>
            </div>      
        </div>
    </div> -->
    <div class="grid grid-cols-3 gap-3">
        <div v-for="(item, blog) in blogs" :key="blog">
                <h3 class="text-center text-lg">{{ item.title }}</h3>
                <div>
                    <h5 class="text-center my-2">{{ item.category }}</h5>
                    <p class="p-2">{{ item.body }}</p>
                    <div class="flex justify-end">
                        <p class="mr-2"><b>Written By:</b>  {{ item.author }}</p>   
                    </div>
                    <div class="flex justify-between m-2">
                        <p>{{ item.likes }}</p>
                        <p>{{ item.created_at }}</p>    
                    </div>
                </div>      
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('ello mounted.')
        },
        props: {
            blogs: Array
        }
    }
</script>
