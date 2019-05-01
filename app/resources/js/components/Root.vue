<template>
    <div class="root">
        <h1> L.V. BSS</h1>
        <thread-form/>
        <thread-paginator/>
        <thread-display
            v-for="thread in threads"
            :key="thread.id"
            :title="thread.title"
            :date="thread.date"
            :name="thread.name"
            :message="thread.message"
            :comments="thread.comments"
        />
        <thread-paginator/>
    </div>
</template>

<script>
import {mapActions, mapState} from 'vuex';

export default {
    computed: {
        ...mapState([
            'threads',
        ]),
    },
    methods: {
        ...mapActions([
            'selectThreadPage',
        ]),
    },
    created() {
        this.selectThreadPage(1);
    }
}
</script>


<style scoped>

.root
{
    margin: 0px 20%;
}

</style>
