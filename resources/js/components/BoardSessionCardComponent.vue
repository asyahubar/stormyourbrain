<template>
    <div class="card" @click="goTo">
        <!--<div class="card-top"></div>-->
        <div class="card-body">
            <h5 class="card-title">Session title</h5>
            <p class="card-date">
                16 April 2019
            </p>
            <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
        </div>
    </div>
</template>

<script>
    export default {
        props: {
           data: Array
        },
        data() {
            return {

            }
        },
        methods: {
            goTo() {

            }
        }
    }
</script>
