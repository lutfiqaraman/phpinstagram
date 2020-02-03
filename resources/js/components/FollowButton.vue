<template>
    <div>
        <button
            type="button"
            class="btn btn-outline-primary btn-sm ml-4"
            @click="followUser">
            Follow
        </button>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log("Component mounted.");
    },

    methods: {
        followUser() {
            axios.post('/follow/1').then((result) => {
                alert(result.data);
            });
        }
    }
};
</script>
