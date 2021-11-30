<template>
  <main>
    <LeftMenu />
    <article>
      <slot />
    </article>
  </main>
</template>

<script>
import LeftMenu from './components/menus/LeftMenu.vue';

export default {
  name: 'Layout',
  components: {
    LeftMenu,
  },
};
</script>

<style lang="scss" scoped>
main {
  display: flex;
  article {
    width: 100%;
  }
}
</style>
