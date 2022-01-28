<template>
    <div class="follow-button">
        <button
            class="btn btn-primary ms-4"
            @click="followUser"
            v-text="buttonText"
        ></button>
    </div>
</template>

<script>
export default {
    props: ["userId", "follows"],

    mounted() {
        console.log("CompFonent mounted.");
    },

    data: function () {
        return {
            status: this.follows,
        };
    },

    methods: {
        followUser() {
            axios
                .post("/follow/" + this.userId)
                .then((response) => {
                    this.status = !this.status;
                    console.log(response.data);
                })
                .catch((error) => {
                    if (error.response.status == 401) {
                        window.location = "/login";
                    }
                });
        },
    },

    computed: {
        buttonText() {
            return this.status ? "Unfollow" : "Follow";
        },
    },
};
</script>
