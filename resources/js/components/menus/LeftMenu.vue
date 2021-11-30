<template>
  <header class="left-menu">
    <Link href="/">
      <i class="bi bi-house"></i>
      Home
    </Link>
    <Link href="/about">
      <i class="bi bi-file-earmark-person"></i>
      About
    </Link>
  </header>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue';

export default {
  name: 'LeftMenu',
  components: {
    Link
  },
};
</script>

<style lang="scss" scoped>
.left-menu {
  overflow: auto;
  background: linear-gradient(to right, #9553e9, #6d74ed);
  height: 100%;
  width: 260px;
  display: flex;
  flex-direction: column;
  box-shadow: 2px 0px 10px 2px rgba(0, 0, 0, 0.5);
  a {
    padding: 18px;
    text-decoration: none;
    font-weight: bold;
    color: white;
    font-size: 18px;
    transition: all 0.2s ease-in-out;
    &:hover {
      background: #fff;
      color: #9553e9;
    }
  }
}
</style>
