<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">Timeline</div>

                <div class="card-body">

                    <post :tweets="tweets"></post>
                    
                    <hr>
                    <div class="media mb-3"  v-for="(tweets, index) in tweets" :key="index">
                        <img class="mr-3" src="https://via.placeholder.com/64" />

                        <div class="media-body">
                            <h5 class="mt-0">{{ tweets.user.name }}</h5>
                            {{tweets.body}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Post from "./Post";

    export default {
        data () {
    return {
        tweets: []
    }
},

components: {
    Post
},
mounted() {
    axios.get('/tweet').then((response) => {
        this.tweets = response.data
    }).catch((error) => {
        console.log(error);
    })
},
    }
</script>
