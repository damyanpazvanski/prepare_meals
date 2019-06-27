<template>
    <ul class="activities col-12 text-center">
        {{ title }}
        <li class="bnt btn-outline-primary btn-sm" v-for="routine in routines" @click="select(routine.id)">{{ routine.translation.translation }}</li>
    </ul>
</template>
<script>
    export default {
        props: ['title', 'routines'],
        methods: {
            select(routineId) {
                this.$emit('selected', {
                    'routine': routineId
                })
            }
        }
    }
</script>
<style scoped>
    .activities li {
        cursor: pointer;
        margin-bottom: 10px;
        font-weight: 700;
        border: 2px solid;
        transition: 0.3s;
    }
</style>
