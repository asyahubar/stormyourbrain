<template>
    <div class="wrapping">
        <nav class="navbar">
            <div class="containr">
                <a class="navbar-brand" href="/">
                    STORM
                    YOUR
                    BRAIN
                </a>
                <span @click="newSession" class="new-session">+</span>
                <div class="logout-section">
                    <span class="nickname">
                        <div class="nickname-section">
                            <p @dblclick="changeNickname"">
                                <slot name="nickname" v-model="nickname">you</slot>
                            </p>
                            <el-input @keyup.enter="saveNickname" :class="{ hide: toHide, 'nickname-input': alwaysTrue }" placeholder="Enter nickname and press enter" v-model="newNickname"></el-input>
                        </div>
                    </span>

                    <el-button size="mini" class="logout-link" @click="logout">Log out</el-button>

                    <form id="logout-form" action="/logout" method="POST" ref="form" @submit="submit" style="display: none;">
                        <slot name="csrf"></slot>
                    </form>
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                nickname: "",
                newNickname: "",
                toHide: true,
                alwaysTrue: true
            }
        },
        methods: {
            logout(event) {
                event.preventDefault();
                this.submit();
            },
            submit() {
                this.$refs.form.submit();
            },
            changeNickname() {
                //input field shows up
            },
            saveNickname() {
                // on enter sends a request to the db to update nickname field
            },
            newSession() {
                //TODO: create new session
                // sends a request to db
                // receives a link to new session and redirects to it

                //or leads to a page w/ a simple form where user inputs
                //title of the sessions and creates it
            }
        }
    }
</script>

<style>

</style>