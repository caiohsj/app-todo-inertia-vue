<template>
  <Layout>
    <div class="home">
      <div class="center">
        <Link
          class="btn btn-success button-add"
          href="/todos/create"
        >
          New
        </Link>
        <TodoList
          :list="todos"
          @toggle="toggleTodo"
        />
      </div>
    </div>
  </Layout>
</template>

<script lang="js">
import { Link } from '@inertiajs/inertia-vue';
import Layout from '../Layout';
import TodoList from '../components/lists/TodoList';

export default {
  name: 'Home',
  components: {
    Layout,
    TodoList,
    Link,
  },
  props: {
    todos: {
      type: Array,
      default: () => [],
    },
  },
  methods: {
    toggleTodo(todo) {
      const updatedTodo = {
        completed: !todo.completed,
      };
      this.$inertia.put(`/todos/${todo.id}`, updatedTodo);
    },
  },
};
</script>

<style lang="scss" scoped>
.home {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  padding-top: 20px;
  height: 100%;
  .center {
    width: 500px;
    .button-add {
      margin-bottom: 1rem;
      margin: auto;
    }
  }
}
</style>
