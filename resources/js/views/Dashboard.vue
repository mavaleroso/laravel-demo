<template>
    <div class="dash-logs ui card">
      <div class="content">
        <div class="ui breadcrumb">
          <a class="active section">Dashboard</a>
          <div class="divider"> / </div>
        </div>
      </div>
      <div class="content">
        <vue-content-loading :width="300" :height="150">
          <rect x="10" y="13" rx="2" ry="2" width="40" height="6" />
          <rect x="55" y="13" rx="2" ry="2" width="230" height="6" />
          <rect x="55" y="20" rx="2" ry="2" width="115" height="6" />

          <rect x="10" y="30" rx="2" ry="2" width="40" height="6" />
          <rect x="55" y="30" rx="2" ry="2" width="230" height="6" />
          <rect x="55" y="37" rx="2" ry="2" width="115" height="6" />

          <rect x="10" y="47" rx="2" ry="2" width="40" height="6" />
          <rect x="55" y="47" rx="2" ry="2" width="230" height="6" />
          <rect x="55" y="54" rx="2" ry="2" width="115" height="6" />

          <rect x="10" y="64" rx="2" ry="2" width="40" height="6" />
          <rect x="55" y="64" rx="2" ry="2" width="230" height="6" />
          <rect x="55" y="71" rx="2" ry="2" width="115" height="6" />

          <rect x="10" y="81" rx="2" ry="2" width="40" height="6" />
          <rect x="55" y="81" rx="2" ry="2" width="230" height="6" />
          <rect x="55" y="88" rx="2" ry="2" width="115" height="6" />

          <rect x="10" y="98" rx="2" ry="2" width="40" height="6" />
          <rect x="55" y="98" rx="2" ry="2" width="230" height="6" />
          <rect x="55" y="105" rx="2" ry="2" width="115" height="6" />

          <rect x="10" y="115" rx="2" ry="2" width="40" height="6" />
          <rect x="55" y="115" rx="2" ry="2" width="230" height="6" />
          <rect x="55" y="122" rx="2" ry="2" width="115" height="6" />

          <rect x="10" y="132" rx="2" ry="2" width="40" height="6" />
          <rect x="55" y="132" rx="2" ry="2" width="230" height="6" />
          <rect x="55" y="139" rx="2" ry="2" width="115" height="6" />      
        </vue-content-loading>
      </div>
    </div>
</template>
<script>
import VueContentLoading from 'vue-content-loading';
export default {
  components: {
    VueContentLoading,
  }
}
</script>