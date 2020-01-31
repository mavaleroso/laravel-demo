<template>
  <div>
    <div class="ui segment">
      <h1 class="ui header">My Message</h1>
      <vcl-facebook></vcl-facebook>
    </div>
  </div>
</template>
<script>
import VclFacebook from 'vue-content-loading';
export default {
  components: {
    VclFacebook,
  }
}
</script>