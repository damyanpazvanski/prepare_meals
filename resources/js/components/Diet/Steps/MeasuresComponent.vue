<template>
    <div class="col-12">
        <div class="row">
            <div class="col-6">
                <label for="age">Age <span class="required-field-star">*</span></label>
                <input type="number" v-model="measures.age" id="age" name="age" class="form-control" placeholder="Age">
            </div>
            <div class="col-6">
                <label for="height">Height <span class="required-field-star">*</span></label>
                <input type="number" v-model="measures.height" id="height" name="height" class="form-control" placeholder="Height (Centimeters)">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
                <label for="weight">Weight <span class="required-field-star">*</span></label>
                <input type="number" v-model="measures.weight" id="weight" name="weight" class="form-control" placeholder="Weight (Kilograms)">
            </div>
            <div class="col-6">
                <label for="wantedWeight">Wanted Weight <span class="required-field-star">*</span></label>
                <input type="number" v-model="measures.wantedWeight" id="wantedWeight" name="wanted_weight" class="form-control" placeholder="Wanted Weight (Kilograms)">
            </div>
        </div>
        <span class="required-field-star">Note: Wanted Weight should be in interval of 10-15 kilograms from the current Weight for best results.</span>
        <button class="btn btn-primary btn-block mt-3 mb-3" @click="select">Next</button>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                measures: {
                    age: '',
                    height: '',
                    weight: '',
                    wantedWeight: ''
                }
            }
        },
        methods: {
            select() {
                for (let key in this.measures) {
                    if (this.measures[key].length < 1 && this.measures[key] < 1) {
                        this.$emit('error');
                        return;
                    }
                }

                this.$emit('selected', {
                    'measures': this.measures
                })
            }
        }
    }
</script>
