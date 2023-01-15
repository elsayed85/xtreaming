<template>
  <DefaultField
    :field="field"
    :errors="errors"
    :show-help-text="showHelpText"
    :full-width-content="fullWidthContent"
  >
    <template #field>
      <img
        :src="'https://image.tmdb.org/t/p/w500' + field.displayedAs"
        :id="field.attribute"
        type="text"
        style="height: 220px"
      /> </template
  ></DefaultField>
</template>
<script>
export default {
  props: ["index", "resource", "resourceName", "resourceId", "field"],
};
</script>
