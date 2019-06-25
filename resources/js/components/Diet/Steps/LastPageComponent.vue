<template>
    <ul class="activities col-12 text-center">
        <li class="bnt btn-primary">Calories: {{ calories }}</li>
        <li class="bnt btn-primary">New Calories: {{ newCalories }}</li>
    </ul>
</template>
<script>
    export default {
        props: ['data'],
        data () {
            return {
                calories: null,
                newCalories: null,
            }
        },
        methods: {
            calculateCurrentCaloriesIntake() {
                if (this.gender === 0) {
                    return this.woman(this.data.measures.weight, this.data.measures.height, this.data.measures.age);
                }

                return this.man(this.data.measures.weight, this.data.measures.height, this.data.measures.age);
            },
            man(weight, height, age) {
                return Math.round((13.397 * weight) + (4.799 * height) - (5.677 * age) + 88.362);
            },
            woman(weight, height, age) {
                return Math.round((9.247 * weight) + (3.098 * height) - (4.33 * age) + 447.593);
            },
            calculateNewCaloriesIntake() {
                if (this.gender === 0) {
                    return this.woman(this.data.measures.wantedWeight, this.data.measures.height, this.data.measures.age);
                }

                return this.man(this.data.measures.wantedWeight, this.data.measures.height, this.data.measures.age);
            },
        },
        mounted() {
            this.calories = this.calculateCurrentCaloriesIntake();
            this.newCalories = this.calculateNewCaloriesIntake();
        }
    }
</script>
