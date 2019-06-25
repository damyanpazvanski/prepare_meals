<template>
    <div class="col-12 products-list">
        <div class="row mb-3" v-for="vegetableTitle in vegetablesTitles">
            <div class="custom-checkbox custom-control">
                <input type="checkbox" :id="vegetableTitle" :name="vegetableTitle" :value="vegetableTitle" v-model="vegetables" class="custom-control-input">
                <label :for="vegetableTitle" class="col-12 pl-4 custom-control-label">{{ vegetableTitle }}</label>
            </div>
        </div>

        <button class="btn btn-primary btn-block mt-3 mb-3" @click="select">Next</button>
    </div>
</template>
<script>
    export default {
        props: ['vegetablesTitles'],
        data() {
            return {
                vegetables: []
            }
        },
        methods: {
            select() {
                if (this.vegetables.length < 1) {
                    this.$emit('error');
                    return;
                }

                this.$emit('selected', {
                    'vegetables': this.vegetables
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
