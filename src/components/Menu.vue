<template>
    <div id="menu">
        
        <div class="dd">
            <main>
                <div id="burger" class="hamburger" @click="myFilter()" :class="{'open':isActive }">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </main>
            <div class="dd-menu" :class="{'active':isActive }">
                <ul>
                    <li>Profile & status</li>
                    <li>Notification</li>
                    <li>Help</li>
                    <li>Log out</li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Menu',
    data() {
        return {
            isActive: false
        }
    },
    methods: {
        myFilter: function() {
      this.isActive = !this.isActive;
      // some code to filter users
    }
    }
}


</script>

<style scoped>
@import '../assets/css/menu.css';
</style>