<template>
    <ul class="activities col-12 text-center">
        {{ title }}
        <li class="bnt btn-outline-primary btn-sm" v-for="activity in activities" @click="select(activity.id)">{{ activity.translation.translation }}</li>
    </ul>
</template>
<script>
    export default {
        props: ['title', 'activities'],
        methods: {
            select(activityId) {
                this.$emit('selected', {
                    'activity': activityId
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
