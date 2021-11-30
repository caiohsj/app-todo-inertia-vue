<template>
  <Layout>
    <div class="create-todo">
      <FormTodo @submit="createTodo" />
    </div>
  </Layout>
</template>

<script lang="js">
import Layout from '../../Layout';
import FormTodo from '../../components/forms/FormTodo';

export default {
  name: 'Create',
  components: {
    Layout,
    FormTodo,
  },
  methods: {
    createTodo(todo) {
      this.$inertia.post('/todos', {
        description: todo.description,
        completed: todo.completed,
      });
    },
  },
};
</script>

<style lang="scss" scoped>
.create-todo {
  padding: 40px;

}
</style>
