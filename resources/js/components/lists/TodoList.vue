<template>
  <div class="todos-container">
    <div
      v-for="todo in list"
      :key="todo.id"
      class="todo-item"
    >
      <i
        v-if="todo.completed"
        class="bi bi-check-circle-fill"
      />
      <i
        v-else
        class="bi bi-exclamation-circle-fill"
      />
      <span>{{ todo.description }}</span>
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
    }
  },
};
</script>

<style lang="scss" scoped>
.todos-container {
  display: flex;
  flex-direction: column;
  max-width: 500px;
  margin: auto;
  border: 2px solid #9553e9;
  border-radius: 4px;
  box-shadow: 0px 2px 10px black;
  margin-top: 10px;
  .todo-item {
    display: flex;
    align-items: center;
    padding: 10px;
    i {
      margin-right: 10px;
    }
  }
}
</style>
