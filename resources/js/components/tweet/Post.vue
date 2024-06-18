<template>
    <div>
        <form @submit.prevent="postTweet">
            <div class="form-group">
                <textarea id="" class="form-control mb-2" v-model="body"></textarea>
                <button class="btn btn-primary" type="submit">Tweet</button>
            </div>
        </form>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            body: ''
        }
    },

    props: {
        tweets: Array
    },

    methods: {
        postTweet() {
            axios.post('/tweet', {
                body: this.body
            }).then((response) => {
                this.tweets.unshift(response.data);
                this.body = '';
            }).catch((error) => {
                console.log(error);
            });
        }
    }
}
</script>
