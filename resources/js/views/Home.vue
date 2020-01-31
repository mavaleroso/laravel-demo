<template>
  <div>
    <div class="ui segment">
      <h1 class="ui header">My Home</h1>
      <vcl-twitch></vcl-twitch>
    </div>
  </div>
</template>
<script>
import VclTwitch from 'vue-content-loading';
export default {
  components: {
    VclTwitch,
  }
}
</script>