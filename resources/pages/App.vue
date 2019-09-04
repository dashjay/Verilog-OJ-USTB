<template>
    <div>
        <NavBar></NavBar>
        <div class="content-app">
            <transition name="fadeInUp" mode="out-in">
                <router-view></router-view>
            </transition>
            <div class="footer">
                <p v-html="website.footer"></p>
                <p>Powered by <a href="https://github.com/dashjay/Verilog-OJ-USTB">Verilog OJ</a>
                    <span v-if="version">&nbsp; Version: {{ version }}</span>
                </p>
            </div>
        </div>
        <BackTop></BackTop>
    </div>
</template>

<script>
    import {mapActions, mapState} from 'vuex'
    import NavBar from '@/pages/components/NavBar.vue'

    export default {
        data() {
            return {
                version: '0.0.1'
            }
        },
        components: {
            NavBar
        }, mounted() {
        },
        computed: {
            ...mapState(['website'])
        },
    }
</script>

<style lang="less">

    * {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    a {
        text-decoration: none;
        background-color: transparent;
        &:active, &:hover {
            outline-width: 0;
        }
    }


    .content-app {
        margin-top: 80px;
        padding: 0 2%;
    }

    .footer {
        margin-top: 20px;
        margin-bottom: 10px;
        text-align: center;
        font-size: small;
    }

    .fadeInUp-enter-active {
        animation: fadeInUp .8s;
    }


</style>
