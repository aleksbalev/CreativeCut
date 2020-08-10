<template>
  <span>
    {{ postTitle }} <br> {{ innetText }}
  </span>
</template>

<script>
export default {
  name: 'ExampleComponent',
  props: ['postTitle'],
  data() {
    return {
      innetText: 'ExampleComponent'
    }
  }

}
</script>
