  
<template>
    <div class="ui container">
        <div class="ui pointing menu">
            <router-link :to="{ name: 'home' }" :class="[currentPage.includes('home') ? activeClass : 'item']">
                Home
            </router-link>
            <router-link :to="{ name: 'hello' }" :class="[currentPage.includes('hello') ? activeClass : 'item']">
                Messages
            </router-link>
            <router-link :to="{ name: 'friends' }" :class="[currentPage.includes('friends') ? activeClass : 'item']">
                Friends
            </router-link>
            <div class="right menu">
                <div class="item">
                <div class="ui transparent icon input">
                    <input type="text" placeholder="Search...">
                    <i class="search link icon"></i>
                </div>
                </div>
            </div>
        </div>
        <div class="ui segment">
            <router-view></router-view>
        </div>
    </div>
</template>
<script>
    export default {
        computed: {
            currentPage() {
                return this.$route.name;
            }
        },
        data() {
            return {
                activeClass: 'active item',
            }
        },
    }
</script>