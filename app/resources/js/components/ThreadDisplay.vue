<template>
    <div>
        <div class="root">
            <h2 class="thread-title">{{ title }}</h2>
            <div class="thread">
                <div class="properties">
                    <span class="property">{{ name }}</span>
                    <span class="property">{{ date }}</span>
                </div>
                <p class="message-body">
                    {{ message }}
                </p>
            </div>
            <div class="comments">
                <comment-display
                    v-for="comment in comments"
                    :key="comment.id"
                    :name="comment.name"
                    :date="comment.date"
                    :message="comment.message"
                />
                <comment-form/>
            </div>
            <div>
                <input type="button" value="+" @click="inc">
                ={{ count }}=
            </div>
        </div>
    </div>
</template>

<script>
import { mapState } from 'vuex';

export default {
    props: {
        title: '',
        name: '',
        date: '',
        message: '',
        comments: '',
    },
    computed: {
        ...mapState([
            'count',
        ])
    },
    methods: {
        inc() {
            this.$store.commit('inc');
        }
    }
}
</script>


<style scoped>

.root
{
    margin: 1em 0px;
    border: 1px solid gray;
}

.thread
{
    position: relative;
}

.thread-title
{
    background: gray;
    color: white;
    margin: 0px;
    padding-left: 1em;
}

.properties
{
    text-align: right;
    position: absolute;
    top: 0;
    right: 0;
    width: 100%;
}

.property
{
    font-size: 80%;
    margin-right: 1px;
}

.message-body
{
    margin: 0;
}


</style>

