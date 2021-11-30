<template>
  <Layout>
    <div class="home">
      <div class="center">
        <button
          class="btn btn-success button-add"
        >
          New
        </button>
        <TodoList
          :list="todos"
          @toggle="toggleTodo"
        />
      </div>
    </div>
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
