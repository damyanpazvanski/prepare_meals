<template>
    <div class="col-12 row">
        <div class="col-2"></div>
        <div class="col-5" v-for="gender in genders">
            {{ gender.translation.translation }}
            <img :src="'/images/' + gender.translation.key + '.png'" :alt="gender.translation.key" class="gender-img col-12" @click="select(gender.id)">
        </div>
    </div>
</template>
<script>
    export default {
        props: ['genders'],
        methods: {
            select(genderId) {
                this.$emit('selected', {
                    'gender': genderId
                })
            }
        }
    }
</script>
<style scoped>
    .gender-img {
        cursor: pointer;
        border: 7px solid #158ed7;
        max-width: 250px;
        height: 250px;
        transition: 0.3s;
    }
    .gender-img:hover {
        border: 7px solid #2bc0a4!important;
    }
</style>
