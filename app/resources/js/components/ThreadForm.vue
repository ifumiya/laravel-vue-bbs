<template>
    <div>
        <div class="root">
            <div class="name-row labeled-input">
                <label>Name:</label>
                <input type="text" class="name-input" v-model="name">
            </div>
            <div class="title-row labeled-input">
                <label>Title:</label>
                <input type="text" class="title-input" v-model="title">
            </div>
            <textarea class="message-input" v-model="message"></textarea>
            <input type="submit" class="submit-button" @click="preparePost">
        </div>
    </div>
</template>

<script>
import {mapActions} from 'vuex';

export default {
    data() {
        return {
            name: '',
            title: '',
            message: '',
        };
    },
    computed: {
        thread() {
            return {
                name: this.name,
                title: this.title,
                message: this.message,
            };
        }

    },
    methods: {
        ...mapActions(['postThread']),
        preparePost() {
            this.postThread(this.thread);
        }
    }

}
</script>


<style scoped>

.root
{
    border: 1px solid gray;
    padding: 4px;
}

.labeled-input
{
    display: flex;
}

.labeled-input label
{
    width: 6em;
    text-align: right;
}

.labeled-input input
{
    flex-grow: 1;
}
.message-input
{
    width: 100%;
    height: 12em;
    box-sizing: border-box;
}


</style>

