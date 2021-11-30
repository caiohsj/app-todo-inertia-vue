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
          @edit="editTodo"
          @delete="doDeleteTodo"
        />
        <UpdateTodo
          :open-modal="openDialog"
          :todo="currentTodo"
          @closeModal="closeModal"
          @update="doUpdateTodo"
        />
      </div>
    </div>
  </Layout>
</template>

<script lang="js">
import { Link } from '@inertiajs/inertia-vue';
import Layout from '../Layout';
import TodoList from '../components/lists/TodoList';
import UpdateTodo from '../components/modals/UpdateTodo';

export default {
  name: 'Home',
  components: {
    Layout,
    TodoList,
    Link,
    UpdateTodo,
  },
  props: {
    todos: {
      type: Array,
      default: () => [],
    },
  },
  data() {
    return {
      openDialog: false,
      currentTodo: {},
    };
  },
  methods: {
    toggleTodo(todo) {
      const updatedTodo = {
        completed: !todo.completed,
      };
      this.$inertia.put(`/todos/${todo.id}`, updatedTodo);
    },
    editTodo(todo) {
      this.currentTodo = todo;
      this.openDialog = true;
    },
    closeModal() {
      this.openDialog = false;
    },
    doUpdateTodo(todo) {
      const updatedTodo = {
        description: todo.description,
        completed: todo.completed,
      };
      this.$inertia.put(`/todos/${todo.id}`, updatedTodo);
      this.closeModal();
    },
    doDeleteTodo(todo) {
      this.$inertia.delete(`/todos/${todo.id}`);
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
