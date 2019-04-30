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

const sampleMessages = [
    {
        id: 1,
        name: 'Banana',
        message: 'abcdefghijklnmopopopdfaksdfjiaej;ofaijdefjaoiefj',
        title: 'abcdef',
        date: '2019-04-28 23:15:00',
        comments: [
            {
                id: 1,
                name: 'Apple',
                message: 'sdfajiefjaijdfajeifjaoidjfiasjdfoiae',
                date: '2019-04-28 23:15:00',
            },
            {
                id: 2,
                name: 'Apple',
                message: 'sdfajiefjaijdfajeifjaoidjfiasjdfoiae',
                date: '2019-04-28 23:15:00',
            },
            {
                id: 3,
                name: 'Apple',
                message: 'sdfajiefjaijdfajeifjaoidjfiasjdfoiae',
                date: '2019-04-28 23:15:00',
            },
        ]
    },
    {
        id: 2,
        name: 'Banana',
        message: 'abcdefghijklnmopopopdfaksdfjiaej;ofaijdefjaoiefj',
        title: 'abcdef',
        date: '2019-04-28 23:15:00',
        comments: [
            {
                id: 4,
                name: 'Apple',
                message: 'sdfajiefjaijdfajeifjaoidjfiasjdfoiae',
                date: '2019-04-28 23:15:00',
            },
            {
                id: 5,
                name: 'Apple',
                message: 'sdfajiefjaijdfajeifjaoidjfiasjdfoiae',
                date: '2019-04-28 23:15:00',
            },
            {
                id: 6,
                name: 'Apple',
                message: 'sdfajiefjaijdfajeifjaoidjfiasjdfoiae',
                date: '2019-04-28 23:15:00',
            },
        ]
    },
    {
        id: 3,
        name: 'Banana',
        message: 'abcdefghijklnmopopopdfaksdfjiaej;ofaijdefjaoiefj',
        title: 'abcdef',
        date: '2019-04-28 23:15:00',
        comments: [
            {
                id: 7,
                name: 'Apple',
                message: 'sdfajiefjaijdfajeifjaoidjfiasjdfoiae',
                date: '2019-04-28 23:15:00',
            },
            {
                id: 8,
                name: 'Apple',
                message: 'sdfajiefjaijdfajeifjaoidjfiasjdfoiae',
                date: '2019-04-28 23:15:00',
            },
            {
                id: 9,
                name: 'Apple',
                message: 'sdfajiefjaijdfajeifjaoidjfiasjdfoiae',
                date: '2019-04-28 23:15:00',
            },
        ]
    },

]


export default {
    data() {
        return {
            threads: sampleMessages,
        }
    }
}
</script>


<style scoped>

.root
{
    margin: 0px 20%;
}

</style>
