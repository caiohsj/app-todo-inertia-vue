<template>
  <form>
    <div class="form-group">
      <label for="description">Description</label>
      <textarea class="form-control" id="description" v-model="description"></textarea>
    </div>
    <div class="form-group">
      <label for="status">Done?</label>
      <select class="form-control" id="status" v-model="completed">
        <option value="true">Yes</option>
        <option value="false">No</option>
      </select>
    </div>
    <button class="btn btn-primary" @click.prevent="handleSubmit">Submit</button>
  </form>
</template>

<script lang="js">
export default {
  name: 'FormTodo',
  data() {
    return {
      description: '',
      completed: false,
    };
  },
  methods: {
    handleSubmit() {
      this.$emit('submit', {
        description: this.description,
        completed: this.completed,
      });
    },
  },
};
</script>

<style lang="scss" scoped>

</style>
