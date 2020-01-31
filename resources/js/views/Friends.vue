<template>
  <div>
    <div class="ui segment">
      <h1 class="ui header">My Friend</h1>
      <vcl-instagram></vcl-instagram>
    </div>
  </div>
</template>
<script>
import VclInstagram from 'vue-content-loading';
export default {
  components: {
    VclInstagram,
  }
}
</script>