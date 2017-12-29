<template>
  <div class="message">
    {{ text }}
  </div>
</template>

<script>
export default {
  name: 'message',
  props: {
    text: {
      type: String,
      required: true
    }
  }
}
</script>

<style lang="scss" scoped>
</style>
