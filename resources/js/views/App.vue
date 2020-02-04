  
<template>
<div>
    <div class="ui pointing menu">
        <div class="ui container">
            <div class="item">
                <!-- <img src="" alt="brand"> -->
                BRAND
            </div>
            <div class="right menu">
                <router-link :to="{ name: 'dashboard' }" :class="[currentPage.includes('dashboard') ? activeClass : 'item']">
                    Dashboard
                </router-link>
                <router-link :to="{ name: 'messages' }" :class="[currentPage.includes('messages') ? activeClass : 'item']">
                    Messages
                </router-link>
                <router-link :to="{ name: 'configurations' }" :class="[currentPage.includes('configurations') ? activeClass : 'item']">
                    Configurations
                </router-link>
                <a href="/logout_request" class="item">
                    <i class="sign-out icon"></i>
                    Logout
                </a>
            </div>
            
        </div>
    </div>
    <div class="ui container">
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