<template>
  <div class="todos-container">
    <div
      v-for="todo in list"
      :key="todo.id"
      class="todo-item"
    >
      <div
        @click="toggleTodo(todo)"
        class="todo-item-status"
      >
        <i
          v-if="todo.completed"
          class="bi bi-check-circle-fill text-success"
        />
        <i
          v-else
          class="bi bi-exclamation-circle-fill text-danger"
        />
      </div>
      <span>{{ todo.description }}</span>
      <div
        class="ml-auto actions"
      >
        <i
          class="bi bi-pencil"
          @click="handleEditTodo(todo)"
        />
        <i
          class="bi bi-trash text-danger"
          @click="handleDeleteTodo(todo)"
        />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'TodoList',
  props: {
    list: {
      type: Array,
      default: [],
    },
  },
  methods: {
    toggleTodo(todo) {
      this.$emit('toggle', todo);
    },
    handleEditTodo(todo) {
      this.$emit('edit', todo);
    },
    handleDeleteTodo(todo) {
      this.$emit('delete', todo);
    },
  },
};
</script>

<style lang="scss" scoped>
.todos-container {
  display: flex;
  flex-direction: column;
  width: 100%;
  margin: auto;
  border: 2px solid #9553e9;
  border-radius: 4px;
  box-shadow: 0px 2px 10px black;
  margin-top: 10px;
  .todo-item {
    display: flex;
    align-items: center;
    padding: 10px;
    .todo-item-status {
      cursor: pointer;
      i {
        margin-right: 20px;
        font-size: 16px;
      }
    }
    .actions {
      display: flex;
      justify-content: space-between;
      width: 48px;
      i {
        cursor: pointer;
      }
    }
  }
}
</style>
