<template>
  <div ref="map" style="width: 100%; height: 400px;"></div>
</template>

<script>
export default {
  mounted() {
    this.initMap();
  },
  methods: {
    initMap() {
      const coord = { lat: 15.734382, lng: -88.596939 };
      const map = new google.maps.Map(this.$refs.map, {
        zoom: 10,
        center: coord,
      });
      new google.maps.Marker({
        position: coord,
        map: map,
      });
    },
  },
};
</script>

<style scoped>
/* Ya no es necesario el ID map en el CSS */
</style>
