<template>
    <ul class="activities col-12 text-center">
        {{ title }}
        <li class="bnt btn-outline-primary btn-sm" v-for="meal in meals" @click="select(meal.id)">{{ meal.translation.translation }}</li>
    </ul>
</template>
<script>
    export default {
        props: ['title', 'meals'],
        methods: {
            select(mealId) {
                this.$emit('selected', {
                    'meals': mealId
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
