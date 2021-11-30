<template>
  <Layout>
    <TodoList :list="todos" />
  </Layout>
</template>

<script lang="js">
import Layout from '../Layout';
import TodoList from '../components/lists/TodoList';

export default {
  name: 'Home',
  components: {
    Layout,
    TodoList,
  },
  props: {
    todos: {
      type: Array,
      default: () => [],
    },
  },
};
</script>

<style lang="scss" scoped>

</style>
