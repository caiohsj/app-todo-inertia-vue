<template>
  <form>
    <div class="form-group">
      <label for="description">Description</label>
      <textarea class="form-control" id="description" v-model="todo.description"></textarea>
    </div>
    <div class="form-group">
      <label for="status">Done?</label>
      <select class="form-control" id="status" v-model="todo.completed">
        <option value="1">Yes</option>
        <option value="0">No</option>
      </select>
    </div>
    <button class="btn btn-primary" @click.prevent="handleSubmit">Submit</button>
  </form>
</template>

<script lang="js">
export default {
  name: 'FormTodo',
  props: {
    todo: {
      type: Object,
      default: () => ({
        description: '',
        completed: false,
      }),
    },
  },
  methods: {
    handleSubmit() {
      this.$emit('submit', this.todo);
    },
  },
};
</script>

<style lang="scss" scoped>

</style>
