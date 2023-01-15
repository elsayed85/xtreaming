<template #field>
  <img
    :src="'https://image.tmdb.org/t/p/w500' + fieldValue"
    :id="field.attribute"
    type="text"
  />
</template>

<script>
export default {
  props: ["resourceName", "field"],

  computed: {
    fieldValue() {
      return this.field.displayedAs || this.field.value;
    },
  },
};
</script>
