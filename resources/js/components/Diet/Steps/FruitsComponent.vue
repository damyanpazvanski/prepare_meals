<template>
    <div class="col-12 products-list">
        {{ title }}
        <div class="row mb-3" v-for="fruit in fruits.eatables">
            <div class="custom-checkbox custom-control">
                <input type="checkbox" :id="'fruit-' + fruit.id" :name="'fruit-' + fruit.id" :value="fruit.id" v-model="chosenFruits" class="custom-control-input">
                <label :for="'fruit-' + fruit.id" class="col-12 pl-4 custom-control-label">{{ fruit.translation.translation }}</label>
            </div>
        </div>

        <button class="btn btn-primary btn-block mt-3 mb-3" @click="select">Next</button>
    </div>
</template>
<script>
    export default {
        props: ['title', 'fruits'],
        data() {
            return {
                chosenFruits: []
            }
        },
        methods: {
            select() {
                if (this.chosenFruits.length < 1) {
                    this.$emit('error');
                    return;
                }

                this.$emit('selected', {
                    'fruits': this.chosenFruits
                })
            }
        }
    }
</script>
<style scoped>
    .products-list .row {
        border-bottom: 2px solid #d3d3d3;
    }
    .products-list input {
        height: 30px;
        width: 30px;
        margin: 3px;
    }
    .products-list label {
        cursor: pointer;
        word-wrap: break-word;
        word-break: break-all;
        min-height: 40px;
    }
    .custom-control-label::before {
        left: -1em!important;
        width: 2em!important;
        height: 2em!important;
    }
    .custom-control-label::after {
        left: -1em!important;
        width: 2em!important;
        height: 2em!important;
    }
</style>
